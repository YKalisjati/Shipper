<?php

namespace App\Http\Controllers;

use App\Models\pengirim;
use Illuminate\Http\Request;

class LacakPaket extends Controller
{
    public function lacakPaketPengiriman(Request $request)
    {
        $replace    = str_replace(["\r\n", ' '], ',', $request->InputIDPaketUser);
        $datafilter = explode(',', $replace);
        $dataHasil  = [];
        $datafilter = array_unique(array_values(array_filter($datafilter)));

        if (count($datafilter) <= 10) {
            foreach ($datafilter as $datas) {
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
                    'pengiriman_barangs.created_at'
                )
                    ->where('pengiriman_barangs.id', '=', $datas)
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
                if ($dataAlamat) {
                    $dataHasil[] = $dataAlamat;
                }
            }
            $message = '';

            return view('Shipper/lacak-paket', compact('dataHasil', 'message'));
        }
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
            'pengiriman_barangs.created_at'
        )
            ->where('pengiriman_barangs.id', '=', 'none')
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
        $dataHasil[] = $dataAlamat;
        $message     = 'Nomor resi yang anda masukkan melebihi batas maksimal nomor resi yang dapat kami cari dalam sekali pencarian.' .
        ' Silahkan masukkan nomor resi setidaknya tidak melebihi 10 nomor resi.';

        return view('Shipper/lacak-paket', compact('dataHasil', 'message'));
    }

    public function getPage()
    {
        $dataHasil = [];

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
            'pengiriman_barangs.created_at'
        )
            ->where('pengiriman_barangs.id', '=', 'none')
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

        $dataHasil[] = $dataAlamat;
        $message     = '';

        return view('Shipper/lacak-paket', compact('dataHasil', 'message'));
    }
}
