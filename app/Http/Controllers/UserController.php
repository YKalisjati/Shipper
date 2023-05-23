<?php

namespace App\Http\Controllers;

use App\Exports\PesananExport;
use App\Imports\PesananImport;
use App\Models\City;
use App\Models\destination_address;
use App\Models\Image;
use App\Models\package_type;
use App\Models\pengirim;
use App\Models\pengiriman_barang;
use App\Models\Province;
use App\Models\user_verify;
use App\Models\UserAddress;
use App\Models\Users;
use Carbon\Carbon;
use Exception;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        $cities = City::get()->all();

        $province = Province::pluck('province_id', 'province_name');

        return view('register')->with(compact('cities', 'province'));
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name'       => 'required',
            'perusahaan' => 'required',
            'email'      => 'required|email|unique:users',
            'handphone'  => 'required|min:11|max:13',
            'password'   => 'required|min:5|max:100',
            'alamat'     => 'required',
            'provinsi'   => 'required',
            'kota'       => 'required',
            'kodepos'    => 'required|min:5|max:6',
        ]);

        $configU        = ['table' => 'Users', 'length' => 15, 'prefix' => 'UID-'];
        $UserIdGenerate = IdGenerator::generate($configU);

        $users     = new Users();
        $users->id = $UserIdGenerate;

        $users->name       = strtolower($request->name);
        $users->perusahaan = $request->perusahaan;
        $users->email      = $request->email;
        $users->handphone  = $request->handphone;
        $users->password   = Hash::make($request->password);
        $res               = $users->save();

        $configA           = ['table' => 'user_addresses', 'length' => 15, 'prefix' => 'ADRS-'];
        $AddressIdGenerate = IdGenerator::generate($configA);

        try {
            $user_address                    = new UserAddress();
            $user_address->id                = $AddressIdGenerate;
            $user_address->nama_alamat       = 'alamat default ' . strtolower($request->name);
            $user_address->user_id           = $UserIdGenerate;
            $user_address->alamat_lengkap    = $request->alamat;
            $user_address->provinsi_id       = $request->idProvinsi;
            $user_address->kabupaten_kota_id = $request->idCity;
            $user_address->kodepos           = $request->kodepos;
            $res_address                     = $user_address->save();

            if ($res) {
                if ($res_address) {
                    $token = Str::random(64);
                    user_verify::create([
                        'email'      => $request->email,
                        'token'      => $token,
                        'created_at' => Carbon::now(),
                    ]);

                    $action_link = route('successAktivasi', ['token' => $token, 'email' => $request->email]);
                    Mail::send('/AktivasiAkun/getAktivasi', ['action_link' => $action_link], static function ($message) use ($request) {
                        $message->from('proyekngoding@gmail.com');
                        $message->to($request->email)
                            ->subject('Aktivasi Akun');
                    });

                    return redirect('/aktivasi')->with('success', 'Berhasil Register');
                }
            }
        } catch (Exception $e) {
            UserAddress::where([
                'user_id' => $UserIdGenerate,
            ])->delete();
            Users::where([
                'id' => $UserIdGenerate,
            ])->delete();
            user_verify::where([
                'email' => $request->email,
            ])->delete();
        }

        return back()->with('fail', 'Terjadi kesalahan saat menyimpan data');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            // 'handphone'=>'required|max:20',
            'password' => 'required|min:5|max:100',
        ]);
        $users = Users::where('email', '=', $request->email)->first();
        if ($users) {
            if (Hash::check($request->password, $users->password)) {
                if ($users->verified_email_at !== null) {
                    $request->session()->put('loginID', $users->id);
                    $gambar  = Image::where('user_id', $users->id)->first();
                    $year    = Carbon::now()->format('Y');
                    $pesanan = pengiriman_barang::select(
                        DB::raw('(count(pengiriman_barangs.id)) as total_pesanan'),
                        DB::raw("(DATE_FORMAT(pengiriman_barangs.created_at, '%m')) as bulan")
                    )
                        ->where('users.id', 'like', $users->id)
                        ->whereYear('pengiriman_barangs.created_at', '=', $year)
                        ->orderBy('pengiriman_barangs.created_at')
                        ->groupBy(DB::raw("DATE_FORMAT(created_at, '%m')"))
                        ->join('pengirims', 'pengirims.id', '=', 'pengiriman_barangs.id_pengirim')
                        ->join('users', 'users.id', '=', 'pengirims.id_user')
                        ->get();

                    return redirect('dashboard')->with(compact('gambar'));
                }

                $token = Str::random(64);
                user_verify::create([
                    'email'      => $request->email,
                    'token'      => $token,
                    'created_at' => Carbon::now(),
                ]);

                $action_link = route('successAktivasi', ['token' => $token, 'email' => $request->email]);
                Mail::send('/AktivasiAkun/getAktivasi', ['action_link' => $action_link], static function ($message) use ($request) {
                    $message->from('adminShipper_Sadhar@project.com');
                    $message->to($request->email)
                        ->subject('Aktivasi Akun');
                });

                return redirect('/aktivasi');
            }

            return back()->with('fail', 'Password salah');
        }

        return back()->with('fail', 'Email tidak terdaftar');
    }

    public function dashboard()
    {
        $data = [];
        if (Session::has('loginID')) {
            $data    = Users::where('id', '=', Session::get('loginID'))->first();
            $gambar  = Image::where('user_id', $data['id'])->first();
            $year    = Carbon::now()->format('Y');
            $pesanan = pengiriman_barang::select(
                DB::raw('(count(pengiriman_barangs.id)) as total_pesanan'),
                DB::raw("(DATE_FORMAT(pengiriman_barangs.created_at, '%m')) as bulan")
            )
                ->where('users.id', 'like', $data->id)
                ->whereYear('pengiriman_barangs.created_at', '=', $year)
                ->orderBy('pengiriman_barangs.created_at')
                ->groupBy(DB::raw("DATE_FORMAT(created_at, '%m')"))
                ->join('pengirims', 'pengirims.id', '=', 'pengiriman_barangs.id_pengirim')
                ->join('users', 'users.id', '=', 'pengirims.id_user')
                ->get();
        }

        return view('UserDashboard.dashboard', compact('data', 'gambar', 'pesanan'));
    }

    public function logout()
    {
        if (Session::has('loginID')) {
            Session::pull('loginID');

            return redirect('login');
        }
    }

    public function settingDashboard()
    {
        $data = [];

        if (Session::has('loginID')) {
            $data       = Users::where('id', '=', Session::get('loginID'))->first();
            $dataAlamat = UserAddress::where('user_id', '=', $data->id)
                ->join('cities', 'city_id', '=', 'kabupaten_kota_id')
                ->join('provinces', 'provinces.province_id', '=', 'provinsi_id')
                ->get();

            $gambar         = Image::where('user_id', $data['id'])->first();
            $cities         = City::get()->all();
            $province       = Province::pluck('province_id', 'province_name');
            $alamatPenerima = destination_address::where('user_id', '=', $data->id)
                ->join('cities', 'city_id', '=', 'kabupaten_kota_id')
                ->join('provinces', 'provinces.province_id', '=', 'provinsi_id')
                ->get();
        }

        return view('UserDashboard.setting-dashboard', compact('data', 'dataAlamat', 'gambar', 'cities', 'alamatPenerima', 'province'));
    }

    public function ajukanPenjemputan()
    {
        $data = [];
        if (Session::has('loginID')) {
            $data       = Users::where('id', '=', Session::get('loginID'))->first();
            $gambar     = Image::where('user_id', $data['id'])->first();
            $dataAlamat = UserAddress::where('user_id', '=', $data->id)
                ->join('cities', 'city_id', '=', 'kabupaten_kota_id')
                ->join('provinces', 'provinces.province_id', '=', 'provinsi_id')
                ->get();

            $dataPesanan = pengirim::select(
                'pengiriman_barangs.id',
                'pengirims.alamat_lengkap as alamatLengkap_pengirim',
                'kota_pengirim.city_name as kota_pengirim',
                'provinsi_pengirim.province_name as provinsi_pengirim',
                'penerimas.alamat_lengkap as alamatLengkap_penerima',
                'kota_penerima.city_name as kota_penerima',
                'provinsi_penerima.province_name as provinsi_penerima',
                'pengiriman_barangs.biaya',
                'package_types.name_type',
                'pengiriman_barangs.agen',
                'pengiriman_barangs.jenis_layanan',
                'pakets.berat',
                'shipping_statuses.nama_status as status',
                'pengiriman_barangs.created_at'
            )
                ->where('id_user', '=', $data->id)
                ->where('shipping_statuses.nama_status', '=', 'Paket Disiapkan')
                ->join('users', 'pengirims.id_user', '=', 'users.id')
                ->join('cities as kota_pengirim', 'kota_pengirim.city_id', '=', 'pengirims.kabupaten_kota_id')
                ->join('provinces as provinsi_pengirim', 'provinsi_pengirim.province_id', '=', 'pengirims.provinsi_id')
                ->join('pengiriman_barangs', 'id_pengirim', '=', 'pengirims.id')
                ->join('penerimas', 'pengiriman_barangs.id_penerima', '=', 'penerimas.id')
                ->join('cities as kota_penerima', 'kota_penerima.city_id', '=', 'penerimas.kabupaten_kota_id')
                ->join('provinces as provinsi_penerima', 'provinsi_penerima.province_id', '=', 'penerimas.provinsi_id')
                ->join('pakets', 'pengiriman_barangs.id_paket', '=', 'pakets.id')
                ->join('package_types', 'pakets.jenis_paket', '=', 'package_types.id_type')
                ->join('shipping_statuses', 'pengiriman_barangs.status', '=', 'shipping_statuses.id_status')
                ->get();
        }

        return view('UserDashboard.ajukan-penjemputan-dashboard', compact('data', 'gambar', 'dataAlamat', 'dataPesanan'));
    }

    public function helpDashboard()
    {
        $data = [];
        if (Session::has('loginID')) {
            $data   = Users::where('id', '=', Session::get('loginID'))->first();
            $gambar = Image::where('user_id', $data['id'])->first();
        }

        return view('UserDashboard.Help.help-dashboard', compact('data', 'gambar'));
    }

    public function laporanDashboard()
    {
        $data = [];
        if (Session::has('loginID')) {
            $data   = Users::where('id', '=', Session::get('loginID'))->first();
            $gambar = Image::where('user_id', $data['id'])->first();

            $dataLaporan = pengirim::select(
                'pengiriman_barangs.id',
                'pengirims.alamat_lengkap as alamatLengkap_pengirim',
                'kota_pengirim.city_name as kota_pengirim',
                'provinsi_pengirim.province_name as provinsi_pengirim',
                'pengirims.kode_pos as kodePos_pengirim',
                'penerimas.alamat_lengkap as alamatLengkap_penerima',
                'kota_penerima.city_name as kota_penerima',
                'provinsi_penerima.province_name as provinsi_penerima',
                'penerimas.kode_pos as kodePos_penerima',
                'package_types.name_type',
                'pengiriman_barangs.created_at',
                'users.name',
                'users.perusahaan',
                'pakets.external_id as ex_id',
                'penerimas.nama_penerima',
                'penerimas.no_hp as no_penerima',
                'shipping_statuses.nama_status',
                'pengiriman_barangs.biaya as ongkir'
            )->where('users.id', '=', $data['id'])
                ->join('users', 'pengirims.id_user', '=', 'users.id')
                ->join('cities as kota_pengirim', 'kota_pengirim.city_id', '=', 'pengirims.kabupaten_kota_id')
                ->join('provinces as provinsi_pengirim', 'provinsi_pengirim.province_id', '=', 'pengirims.provinsi_id')
                ->join('pengiriman_barangs', 'id_pengirim', '=', 'pengirims.id')
                ->join('penerimas', 'pengiriman_barangs.id_penerima', '=', 'penerimas.id')
                ->join('cities as kota_penerima', 'kota_penerima.city_id', '=', 'penerimas.kabupaten_kota_id')
                ->join('provinces as provinsi_penerima', 'provinsi_penerima.province_id', '=', 'penerimas.provinsi_id')
                ->join('pakets', 'pengiriman_barangs.id_paket', '=', 'pakets.id')
                ->join('package_types', 'pakets.jenis_paket', '=', 'package_types.id_type')
                ->join('shipping_statuses', 'pengiriman_barangs.status', '=', 'shipping_statuses.id_status')
                ->orderBy('pengiriman_barangs.created_at', 'asc')

                ->get();
        }

        return view('UserDashboard.laporan-dashboard', compact('data', 'gambar', 'dataLaporan'));
    }

    public function getData(Request $request)
    {
        $data = [];
        if (Session::has('loginID')) {
            $data        = Users::where('id', '=', Session::get('loginID'))->first();
            $gambar      = Image::where('user_id', $data['id'])->first();
            $dataLaporan = pengirim::select(
                'pengiriman_barangs.id',
                'pengirims.alamat_lengkap as alamatLengkap_pengirim',
                'kota_pengirim.city_name as kota_pengirim',
                'provinsi_pengirim.province_name as provinsi_pengirim',
                'pengirims.kode_pos as kodePos_pengirim',
                'penerimas.alamat_lengkap as alamatLengkap_penerima',
                'kota_penerima.city_name as kota_penerima',
                'provinsi_penerima.province_name as provinsi_penerima',
                'penerimas.kode_pos as kodePos_penerima',
                'package_types.name_type',
                'pengiriman_barangs.created_at',
                'users.name',
                'users.perusahaan',
                'pakets.external_id as ex_id',
                'penerimas.nama_penerima',
                'penerimas.no_hp as no_penerima',
                'shipping_statuses.nama_status',
                'pengiriman_barangs.biaya as ongkir'
            )
                ->where('users.id', '=', $data['id'])
                ->whereDate('pengiriman_barangs.created_at', '>=', $request->fromdate)
                ->whereDate('pengiriman_barangs.created_at', '<=', $request->todate)
                ->join('users', 'pengirims.id_user', '=', 'users.id')
                ->join('cities as kota_pengirim', 'kota_pengirim.city_id', '=', 'pengirims.kabupaten_kota_id')
                ->join('provinces as provinsi_pengirim', 'provinsi_pengirim.province_id', '=', 'pengirims.provinsi_id')
                ->join('pengiriman_barangs', 'id_pengirim', '=', 'pengirims.id')
                ->join('penerimas', 'pengiriman_barangs.id_penerima', '=', 'penerimas.id')
                ->join('cities as kota_penerima', 'kota_penerima.city_id', '=', 'penerimas.kabupaten_kota_id')
                ->join('provinces as provinsi_penerima', 'provinsi_penerima.province_id', '=', 'penerimas.provinsi_id')
                ->join('pakets', 'pengiriman_barangs.id_paket', '=', 'pakets.id')
                ->join('package_types', 'pakets.jenis_paket', '=', 'package_types.id_type')
                ->join('shipping_statuses', 'pengiriman_barangs.status', '=', 'shipping_statuses.id_status')
                ->orderBy('pengiriman_barangs.created_at', 'asc')
                ->get();

            return view('UserDashboard.laporan-dashboard', compact('data', 'gambar', 'dataLaporan'));
        }
        // return redirect()->route('UserDashboard.laporan-dashboard', compact('users'));
    }

    public function pesananDashboard()
    {
        $data = [];
        if (Session::has('loginID')) {
            $data       = Users::where('id', '=', Session::get('loginID'))->first();
            $gambar     = Image::where('user_id', $data['id'])->first();
            $dataAlamat = pengirim::select(
                'pengiriman_barangs.id',
                'pengirims.alamat_lengkap as alamatLengkap_pengirim',
                'kota_pengirim.city_name as kota_pengirim',
                'provinsi_pengirim.province_name as provinsi_pengirim',
                'penerimas.alamat_lengkap as alamatLengkap_penerima',
                'kota_penerima.city_name as kota_penerima',
                'provinsi_penerima.province_name as provinsi_penerima',
                'pengiriman_barangs.biaya',
                'package_types.name_type',
                'pengiriman_barangs.agen',
                'pengiriman_barangs.jenis_layanan',
                'shipping_statuses.nama_status as status',
                'pengiriman_barangs.status as id_status',
                'pengiriman_barangs.created_at'
            )
                ->where('id_user', '=', $data->id)
                ->join('users', 'pengirims.id_user', '=', 'users.id')
                ->join('cities as kota_pengirim', 'kota_pengirim.city_id', '=', 'pengirims.kabupaten_kota_id')
                ->join('provinces as provinsi_pengirim', 'provinsi_pengirim.province_id', '=', 'pengirims.provinsi_id')
                ->join('pengiriman_barangs', 'id_pengirim', '=', 'pengirims.id')
                ->join('penerimas', 'pengiriman_barangs.id_penerima', '=', 'penerimas.id')
                ->join('cities as kota_penerima', 'kota_penerima.city_id', '=', 'penerimas.kabupaten_kota_id')
                ->join('provinces as provinsi_penerima', 'provinsi_penerima.province_id', '=', 'penerimas.provinsi_id')
                ->join('pakets', 'pengiriman_barangs.id_paket', '=', 'pakets.id')
                ->join('package_types', 'pakets.jenis_paket', '=', 'package_types.id_type')
                ->join('shipping_statuses', 'pengiriman_barangs.status', '=', 'shipping_statuses.id_status')
                ->get();
        }

        $dataRequest = false;

        return view('UserDashboard.Pesanan.pesanan-dashboard', compact('data', 'gambar', 'dataAlamat', 'dataRequest'));
    }

    public function PesananExport()
    {
        $data = [];
        if (Session::has('loginID')) {
            $data = Users::where('id', '=', Session::get('loginID'))->first();

            return Excel::download(new PesananExport($data->id), 'Laporan Pemesanan.xlsx');
        }
    }

//    public function PesananImport(Request $request){
//        Excel::import(new PesananImport,$request->file('file'));
//        return redirect()->back();
//    }

    public function store(Request $request)
    {
        $data = [];
        if (Session::has('loginID')) {
            $data = Users::where('id', '=', Session::get('loginID'))->first();

            try {
                $file = Excel::import(new PesananImport(
                    $data['id'],
                    $request->alamatLengkapPengirim,
                    $request->idProvinsi,
                    $request->idCity,
                    $request->kodePosPengirim,
                    $request->notePengirim
                ), $request->file('excel'));
            } catch (Exception $e) {
                return redirect('pesanan-dashboard')->with('fail', 'Maaf, terjadi kesalahan dalam sistem sehingga membuat data pesanan anda gagal disimpan');
            }

            return redirect('pesanan-dashboard')->with('success', 'Data pesanan anda berhasil disimpan');
        }
    }

    public function cashlessDashboard()
    {
        $data = [];
        if (Session::has('loginID')) {
            $data   = Users::where('id', '=', Session::get('loginID'))->first();
            $gambar = Image::where('user_id', $data['id'])->first();
        }

        return view('UserDashboard.Pesanan.cashless-dashboard', compact('data', 'gambar'));
    }

    public function pesananDomestik()
    {
        $data = [];

        if (Session::has('loginID')) {
            $cities     = City::get()->all();
            $province   = Province::pluck('province_id', 'province_name');
            $data       = Users::where('id', '=', Session::get('loginID'))->first();
            $dataAlamat = UserAddress::where('user_id', '=', $data->id)
                ->join('cities', 'city_id', '=', 'kabupaten_kota_id')
                ->join('provinces', 'provinces.province_id', '=', 'provinsi_id')
                ->get();
            $gambar         = Image::where('user_id', $data['id'])->first();
            $alamatPenerima = destination_address::where('user_id', '=', $data->id)
                ->join('cities', 'city_id', '=', 'kabupaten_kota_id')
                ->join('provinces', 'provinces.province_id', '=', 'provinsi_id')
                ->get();
            $packagetype = package_type::select('id_type', 'name_type', 'description_type')->get();
        }

        return view('UserDashboard.Pesanan.buatpesandomestik-dashboard', compact('data', 'province', 'cities', 'dataAlamat', 'alamatPenerima', 'packagetype'));
    }

    public function pesananCashless()
    {
        $data = [];

        if (Session::has('loginID')) {
            $cities     = City::get()->all();
            $province   = Province::pluck('province_id', 'province_name');
            $data       = Users::where('id', '=', Session::get('loginID'))->first();
            $dataAlamat = UserAddress::where('user_id', '=', $data->id)->get();
            $dataAlamat = UserAddress::where('user_id', '=', $data->id)
                ->join('cities', 'city_id', '=', 'kabupaten_kota_id')
                ->join('provinces', 'provinces.province_id', '=', 'provinsi_id')
                ->get();
            $gambar = Image::where('user_id', $data['id'])->first();
        }

        return view('UserDashboard.Pesanan.buatpesancashless-dashboard', compact('data', 'province', 'cities', 'dataAlamat'));
    }

    public function bulkDomestik()
    {
        $data = [];

        if (Session::has('loginID')) {
            $cities     = City::get()->all();
            $province   = Province::pluck('province_id', 'province_name');
            $data       = Users::where('id', '=', Session::get('loginID'))->first();
            $dataAlamat = UserAddress::where('user_id', '=', $data->id)->get();
            $dataAlamat = UserAddress::where('user_id', '=', $data->id)
                ->join('cities', 'city_id', '=', 'kabupaten_kota_id')
                ->join('provinces', 'provinces.province_id', '=', 'provinsi_id')
                ->get();
            $gambar = Image::where('user_id', $data['id'])->first();
        }

        return view('UserDashboard.Pesanan.bulk-upload-domestik-dashboard', compact('data', 'province', 'cities', 'dataAlamat'));
    }

    public function bulkCashless()
    {
        $data = [];

        if (Session::has('loginID')) {
            $cities     = City::get()->all();
            $province   = Province::pluck('province_id', 'province_name');
            $data       = Users::where('id', '=', Session::get('loginID'))->first();
            $dataAlamat = UserAddress::where('user_id', '=', $data->id)->get();
            $dataAlamat = UserAddress::where('user_id', '=', $data->id)
                ->join('cities', 'city_id', '=', 'kabupaten_kota_id')
                ->join('provinces', 'provinces.province_id', '=', 'provinsi_id')
                ->get();
            $gambar = Image::where('user_id', $data['id'])->first();
        }

        return view('UserDashboard.Pesanan.bulk-upload-cashless-dashboard', compact('data', 'province', 'cities', 'dataAlamat'));
    }
}
