<?php

namespace App\Http\Controllers;

use App\Models\reset_password;
use App\Models\Users;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class lupaSandiController extends Controller
{
    public function view()
    {
        return view('/lupa-sandi');
    }

    public function password(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        try {
            $email  = $request->email;
            $token1 = $request->_token;
            $user   = Users::where('email', '=', $request->email)->pluck('email');

            if (count($user) !== null) {
                $token = Str::random(64);
                reset_password::create([
                    'email'      => $request->email,
                    'token'      => $token,
                    'created_at' => Carbon::now(),
                ]);

                $action_link = route('link-email', ['token' => $token, 'email' => $request->email]);
                Mail::send('/email/resetpassword', ['action_link' => $action_link], static function ($message) use ($request) {
                    $message->from('proyekngoding@gmail.com');
                    $message->to($request->email)
                        ->subject('Reset Password');
                });

                $user  = $user[0];
                $bName = 'Kirim Ulang Alamat Reset';

                return back()->with(compact('email', 'bName'))->with('success', 'Alamat reset password sudah dikirim ke-' . $user);
            }
            $bName = 'Kirim Alamat Reset ke Email';

            return back()->with(compact('bName'))->with('fail', 'Email yang anda masukkan belum terdaftar');
        } catch (Exception $e) {
            $bName = 'Kirim Alamat Reset ke Email';

            return back()->with(compact('bName'))->with('fail', 'Error : Terjadi kesalahan sistem');
        }
    }

    public function showResetForm(Request $request, $token = null, $email = null)
    {
        return view('/email/buatpasswordbaru')->with(['token' => $token, 'email' => $email]);
    }

    public function newpassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:5|max:100',
        ]);

        $cekTokenUser = reset_password::where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if ($cekTokenUser) {
            Users::where('email', $request->email)->update([
                'password' => Hash::make($request->password),
            ]);

            reset_password::where([
                'email' => $request->email,
            ])->delete();

            return redirect('/login');
        }
        $token = null;
        $email = $request->email;

        return back()->with(compact('token', 'email'))->with('fail', 'Token sudah kaldaluarsa');
    }
}
