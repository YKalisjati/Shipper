<?php

namespace App\Http\Controllers;

use App\Models\user_verify;
use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AktivasiAkunController extends Controller
{
    public function success(Request $request, $token = null, $email = null)
    {
        $cekTokenUser = user_verify::where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if ($cekTokenUser) {
            Users::where('email', $request->email)->update([
                'verified_email_at' => Carbon::now(),
            ]);

            user_verify::where([
                'email' => $request->email,
            ])->delete();

            return view('/AktivasiAkun/successAktivasi')->with(['token' => $token, 'email' => $email]);
        }
        $token = null;
        $email = $request->email;

        return redirect('login')->with('fail', 'Aktivasi sudah kaldaluarsa');
    }
}
