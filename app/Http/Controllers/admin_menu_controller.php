<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\pengirim;
use App\Models\penjemputan_barang;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class admin_menu_controller extends Controller
{
    public function viewDashboard()
    {
        $admin = [];
        if (Session::has('adminID')) {
            $admin = admin::where('id', '=', Session::get('adminID'))->first();

            $dataUser = users::select('*')
                ->get();
            $dataPenjemputan = penjemputan_barang::select('*')
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
                'shipping_statuses.nama_status as status',
                'pengiriman_barangs.status as id_status',
                'pengiriman_barangs.created_at'
            )
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

            return view('admin.dashboard-admin', compact('admin', 'dataPesanan', 'dataUser', 'dataPenjemputan'));
        }
    }

    public function viewLoginAdmin()
    {
        return view('admin.login-admin');
    }

    public function loginAdminPost(request $request)
    {
        $admin = admin::where('email', '=', $request->email)->first();

        if ($admin) {
            if ($request->password === $admin->password) {
                $request->session()->put('adminID', $admin->id);

                $dataUser = users::select('*')
                    ->get();
                $dataPenjemputan = penjemputan_barang::select('*')
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
                    'shipping_statuses.nama_status as status',
                    'pengiriman_barangs.status as id_status',
                    'pengiriman_barangs.created_at'
                )
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

                return redirect('dashboard-admin')->with(compact('admin', 'dataPesanan', 'dataUser', 'dataPenjemputan'));
            }

            return back()->with('fail', 'Password salah');
        }

        return back()->with('fail', 'Email tidak terdaftar');
    }

    public function logoutAdmin()
    {
        if (Session::has('adminID')) {
            Session::pull('adminID');

            return redirect('login-admin');
        }
    }
}
