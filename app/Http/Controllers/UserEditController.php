<?php

namespace App\Http\Controllers;

use App\Models\destination_address;
use App\Models\UserAddress;
use App\Models\Users;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserEditController extends Controller
{
    public function editUser(request $request)
    {
        $request->validate([
            'name'       => 'required',
            'perusahaan' => 'required',
        ]);

        $data = [];
        if (Session::has('loginID')) {
            $data = Users::where('id', '=', Session::get('loginID'))->first();

            Users::where('email', $data['email'])->update([
                'name' => $request->name, 'perusahaan' => $request->perusahaan,
            ]);
        }

        return back()->with(compact('data'))->with('success', 'Data berhasil diubah.');
    }

    public function gantiPassword(request $request)
    {
        $request->validate([
            'oldPassword'              => 'required',
            'newPassword'              => 'required|confirmed|min:5|max:100',
            'newPassword_confirmation' => 'required|min:5|max:100',
        ]);
        $data = [];
        if (Session::has('loginID')) {
            $data = Users::where('id', '=', Session::get('loginID'))->first();
            if (Hash::check($request->oldPassword, $data['password'])) {
                Users::where('email', $data['email'])->update([
                    'password' => Hash::make($request->newPassword),
                ]);

                return back()->with(compact('data'))->with('success', 'Password berhasil diubah.');
            }

            return back()->with(compact('data'))->with('fail', 'Password yang anda masukan salah.');
        }
    }

    public function ubahAlamat(request $request)
    {
        $request->validate([
            'namaAlamat'    => 'required',
            'alamatLengkap' => 'required',
            'provinsi'      => 'required',
            'kota'          => 'required',
            'kodePos'       => 'required|min:5|max:6',
        ]);
        if (Session::has('loginID')) {
            $data   = Users::where('id', '=', Session::get('loginID'))->first();
            $alamat = UserAddress::where('user_id', '=', $data['id'])->get(['id']);

            foreach ($alamat as $alamatId) {
                if ($alamatId->id === $request->idAlamat) {
                    UserAddress::where('id', $alamatId->id)->update([
                        'nama_alamat'       => strtolower($request->namaAlamat),
                        'alamat_lengkap'    => $request->alamatLengkap,
                        'provinsi_id'       => $request->idProvinsi,
                        'kabupaten_kota_id' => $request->idCity,
                        'kodepos'           => $request->kodePos,
                        'note'              => $request->catatan,
                    ]);

                    return back()->with(compact('data'))->with('success', 'Alamat berhasil diubah.');
                }
            }
            $configA           = ['table' => 'user_addresses', 'length' => 15, 'prefix' => 'ADRS-'];
            $AddressIdGenerate = IdGenerator::generate($configA);

            $user_address                    = new UserAddress();
            $user_address->id                = $AddressIdGenerate;
            $user_address->nama_alamat       = strtolower($request->namaAlamat);
            $user_address->user_id           = $data->id;
            $user_address->alamat_lengkap    = $request->alamatLengkap;
            $user_address->provinsi_id       = $request->idProvinsi;
            $user_address->kabupaten_kota_id = $request->idCity;
            $user_address->kodepos           = $request->kodePos;
            $user_address->note              = $request->catatan;
            $res_address                     = $user_address->save();

            return back()->with(compact('data'))->with('success', 'Alamat baru berhasil ditambahkan');
        }
    }

    public function hapusAlamat(request $request)
    {
        if (Session::has('loginID')) {
            $data       = Users::where('id', '=', Session::get('loginID'))->first();
            $dataAlamat = UserAddress::where('id', '=', $request->idAlamat)->delete();

            return back()->with(compact('data'))->with('success', 'Alamat berhasil dihapus');
        }
    }

    public function editAlamatPenerima(request $request)
    {
        $request->validate([
            'namaPenerima'   => 'required',
            'nomorHandphone' => 'required',
            'namaAlamat'     => 'required',
            'idProvinsiP'    => 'required',
            'idCityP'        => 'required',
            'alamatLengkap'  => 'required',
            'kota'           => 'required',
            'kodePos'        => 'required|min:5|max:6',
        ]);
        if (Session::has('loginID')) {
            $data   = Users::where('id', '=', Session::get('loginID'))->first();
            $alamat = destination_address::where('user_id', '=', $data['id'])->get(['id']);

            foreach ($alamat as $alamatId) {
                if ($alamatId->id === $request->idAlamat) {
                    destination_address::where('id', $alamatId->id)->update([
                        'nama_penerima'     => strtolower($request->namaPenerima),
                        'nohp_penerima'     => $request->nomorHandphone,
                        'nama_alamat'       => strtolower($request->namaAlamat),
                        'alamat_lengkap'    => $request->alamatLengkap,
                        'provinsi_id'       => $request->idProvinsiP,
                        'kabupaten_kota_id' => $request->idCityP,
                        'kodepos'           => $request->kodePos,
                        'note'              => $request->catatan,
                    ]);

                    return back()->with(compact('data'))->with('success', 'Alamat penerima berhasil diubah.');
                }
            }
            $configA           = ['table' => 'destination_addresses', 'length' => 15, 'prefix' => 'ALMP-'];
            $AddressIdGenerate = IdGenerator::generate($configA);

            $addressPenerima                    = new destination_address();
            $addressPenerima->id                = $AddressIdGenerate;
            $addressPenerima->nama_penerima     = strtolower($request->namaPenerima);
            $addressPenerima->nohp_penerima     = $request->nomorHandphone;
            $addressPenerima->nama_alamat       = strtolower($request->namaAlamat);
            $addressPenerima->user_id           = $data->id;
            $addressPenerima->alamat_lengkap    = $request->alamatLengkap;
            $addressPenerima->provinsi_id       = $request->idProvinsiP;
            $addressPenerima->kabupaten_kota_id = $request->idCityP;
            $addressPenerima->kodepos           = $request->kodePos;
            $addressPenerima->note              = $request->catatan;
            $res_address                        = $addressPenerima->save();

            return back()->with(compact('data'))->with('success', 'Alamat penerima berhasil ditambahkan');
        }
    }

    public function hapusAlamatPenerima(request $request)
    {
        if (Session::has('loginID')) {
            $data       = Users::where('id', '=', Session::get('loginID'))->first();
            $dataAlamat = destination_address::where('id', '=', $request->idAlamat)->delete();

            return back()->with(compact('data'))->with('success', 'Alamat penerima berhasil dihapus');
        }
    }
}
