<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Users;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function index()
    {
        return view('UserDashboard.setting-dashboard');
    }

    public function upload(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg|max:5120 ',
        ]);

        if (Session::has('loginID')) {
            $data = Users::where('id', '=', Session::get('loginID'))->first();

            $haveImage = Image::where('user_id', '=', $data['id'])->first();

            if ($haveImage) {
                Storage::delete('public/images/' . $haveImage->name);

                $request->file('image')->store('public/images/');
                Image::where('id', $haveImage->id)->update([
                    'name' => $request->image->hashName(),
                ]);
            } else {
                $configI       = ['table' => 'images', 'length' => 15, 'prefix' => 'IMGU-'];
                $ImgIdGenerate = IdGenerator::generate($configI);
                $name          = $request->file('image')->getClientOriginalName();

                $request->file('image')->store('public/images/');
                $image          = new Image();
                $image->id      = $ImgIdGenerate;
                $image->name    = $request->image->hashName();
                $image->user_id = $data['id'];
                $image->save();
            }

            return back()->with('data')->with('success', 'Gambar Berhasil Disimpan.');
        }
    }

    public function hapusImage(Request $request)
    {
        if (Session::has('loginID')) {
            $data = Users::where('id', '=', Session::get('loginID'))->first();

            $haveImage = Image::where('user_id', '=', $data['id'])->first();

            if ($haveImage) {
                Storage::delete('public/images/' . $haveImage->name);
                $delImg = Image::where('id', '=', $haveImage->id)->delete();

                return back()->with('data')->with('success', 'Foto Profil Anda Berhasil Dihapus.');
            }

            return back()->with('data')->with('fail', 'Anda Tidak Memiliki Foto Profil Untuk Dihapus');
        }
    }
}
