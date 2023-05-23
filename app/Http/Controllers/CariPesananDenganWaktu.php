<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\pengirim;
use App\Models\pengiriman_barang;
use App\Models\Users;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use stdClass;

class CariPesananDenganWaktu extends Controller
{
    public function cariRentangWaktuPesanan(Request $request)
    {
        $data = [];
        $request->validate([
            'start' => 'required',
            'end'   => 'required',
        ]);
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
                ->whereDate('pengiriman_barangs.created_at', '>=', $request->start)
                ->whereDate('pengiriman_barangs.created_at', '<=', $request->end)
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
        $dataRequest        = new stdClass();
        $dataRequest->start = $request->start;
        $dataRequest->end   = $request->end;

        return view('UserDashboard.Pesanan.pesanan-dashboard', compact('data', 'gambar', 'dataAlamat', 'dataRequest'));
    }

    public function batalkanPesanan(Request $request)
    {
        $data = [];
        if (Session::has('loginID')) {
            $data   = Users::where('id', '=', Session::get('loginID'))->first();
            $gambar = Image::where('user_id', $data['id'])->first();

            $updateStatus = pengiriman_barang::where('id', 'like', $request->idPesananBatal)->update([
                'status' => 'STS-000',
            ]);

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
}
