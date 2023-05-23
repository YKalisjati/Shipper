<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\pengiriman_barang;
use App\Models\penjemputan_barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class jemput_pesanan_controller extends Controller
{
    public function viewJemputPesanan()
    {
        $admin = [];
        if (Session::has('adminID')) {
            $admin           = admin::where('id', '=', Session::get('adminID'))->first();
            $dataPenjemputan = pengiriman_barang::select(
                'pengiriman_barangs.id as id_pengiriman',
                'penjemputan_barangs.tanggal_penjemputan as tanggalPenjemputan',
                'penjemputan_barangs.waktu_penjemputan as waktuPenjemputan',
                'pengirims.alamat_lengkap as alamatLengkap_pengirim',
                'kota_pengirim.city_name as kota_pengirim',
                'provinsi_pengirim.province_name as provinsi_pengirim',
                'pengirims.kode_pos as kode_pos',
                'package_types.name_type',
                'pakets.berat as berat_paket',
                'penjemputan_barangs.catatan as catatanPenjemputan',
                'pengiriman_barangs.biaya as ongkir',
            )
                ->where('shipping_statuses.nama_status', '=', 'Paket Menunggu Penjemputan')
                ->orderBy('tanggalPenjemputan', 'ASC')
                ->orderBy('waktuPenjemputan', 'ASC')
                ->join('shipping_statuses', 'pengiriman_barangs.status', '=', 'shipping_statuses.id_status')
                ->join('pakets', 'pengiriman_barangs.id_paket', '=', 'pakets.id')
                ->join('pengirims', 'pengiriman_barangs.id_pengirim', '=', 'pengirims.id')
                ->join('penjemputan_barangs', 'penjemputan_barangs.id_pesanan', '=', 'pengiriman_barangs.id')
                ->join('cities as kota_pengirim', 'kota_pengirim.city_id', '=', 'pengirims.kabupaten_kota_id')
                ->join('provinces as provinsi_pengirim', 'provinsi_pengirim.province_id', '=', 'pengirims.provinsi_id')
                ->join('package_types', 'pakets.jenis_paket', '=', 'package_types.id_type')
                ->get();

            return view('admin.jemput-pesanan', compact('dataPenjemputan', 'admin'));
        }
    }

    public function JemputPesanan(Request $request)
    {
        $admin = [];
        if (Session::has('adminID')) {
            $admin      = admin::where('id', '=', Session::get('adminID'))->first();
            $replace    = str_replace(["\r\n", ' '], ',', $request->listIdDiJemput);
            $datafilter = explode(',', $replace);
            $dataHasil  = [];
            $datafilter = array_values(array_filter($datafilter));

            for ($x = 0; $x < count($datafilter); $x++) {
                $updateNama = penjemputan_barang::where('id_pesanan', 'like', $datafilter[$x])->update([
                    'agen_penjemputan' => $admin->name,
                ]);
                $updateStatus = pengiriman_barang::where('id', 'like', $datafilter[$x])->update([
                    'status' => 'STS-003',
                ]);
            }
        }

        return back();
    }

    public function viewTerimaPesanan()
    {
        $admin = [];
        if (Session::has('adminID')) {
            $admin = admin::where('id', '=', Session::get('adminID'))->first();

            $dataPenjemputan = pengiriman_barang::select(
                'pengiriman_barangs.id as id_pengiriman',
                'penjemputan_barangs.tanggal_penjemputan as tanggalPenjemputan',
                'penjemputan_barangs.waktu_penjemputan as waktuPenjemputan',
                'pengirims.alamat_lengkap as alamatLengkap_pengirim',
                'kota_pengirim.city_name as kota_pengirim',
                'provinsi_pengirim.province_name as provinsi_pengirim',
                'pengirims.kode_pos as kode_pos',
                'package_types.name_type',
                'pakets.berat as berat_paket',
                'penjemputan_barangs.catatan as catatanPenjemputan',
                'pengiriman_barangs.biaya as ongkir',
            )
                ->where('shipping_statuses.nama_status', '=', 'Paket Sedang Dijemput')
                ->where('penjemputan_barangs.agen_penjemputan', '=', $admin->name)
                ->join('shipping_statuses', 'pengiriman_barangs.status', '=', 'shipping_statuses.id_status')
                ->join('pakets', 'pengiriman_barangs.id_paket', '=', 'pakets.id')
                ->join('pengirims', 'pengiriman_barangs.id_pengirim', '=', 'pengirims.id')
                ->join('penjemputan_barangs', 'penjemputan_barangs.id_pesanan', '=', 'pengiriman_barangs.id')
                ->join('cities as kota_pengirim', 'kota_pengirim.city_id', '=', 'pengirims.kabupaten_kota_id')
                ->join('provinces as provinsi_pengirim', 'provinsi_pengirim.province_id', '=', 'pengirims.provinsi_id')
                ->join('package_types', 'pakets.jenis_paket', '=', 'package_types.id_type')
                ->get();

            return view('admin.terima-paket-pesanan', compact('dataPenjemputan', 'admin'));
        }
    }

    public function TerimaPesanan(Request $request)
    {
        $admin = [];
        if (Session::has('adminID')) {
            $admin      = admin::where('id', '=', Session::get('adminID'))->first();
            $replace    = str_replace(["\r\n", ' '], ',', $request->listIdDiJemput);
            $datafilter = explode(',', $replace);
            $dataHasil  = [];
            $datafilter = array_values(array_filter($datafilter));
            date_default_timezone_set('Asia/Jakarta');

            for ($x = 0; $x < count($datafilter); $x++) {
                $updateNama = penjemputan_barang::where('id_pesanan', 'like', $datafilter[$x])->update([

                    'tanggal_diterima_agen' => date('Y-m-d'),
                    'waktu_diterima_agen'   => date('H:i'),
                    'sudah_diterima_agen'   => 1,
                ]);
                $updateStatus = pengiriman_barang::where('id', 'like', $datafilter[$x])->update([
                    'status' => 'STS-004',
                ]);
            }
        }

        return back();
    }

    public function viewTerimaWarehouse()
    {
        $admin = [];
        if (Session::has('adminID')) {
            $admin           = admin::where('id', '=', Session::get('adminID'))->first();
            $dataPenjemputan = pengiriman_barang::select(
                'pengiriman_barangs.id as id_pengiriman',
                'penjemputan_barangs.tanggal_penjemputan as tanggalPenjemputan',
                'penjemputan_barangs.waktu_penjemputan as waktuPenjemputan',
                'pengirims.alamat_lengkap as alamatLengkap_pengirim',
                'kota_pengirim.city_name as kota_pengirim',
                'provinsi_pengirim.province_name as provinsi_pengirim',
                'pengirims.kode_pos as kode_pos',
                'package_types.name_type',
                'pakets.berat as berat_paket',
                'penjemputan_barangs.catatan as catatanPenjemputan',
                'pengiriman_barangs.biaya as ongkir',
            )
                ->where('shipping_statuses.nama_status', '=', 'Paket Dalam Perjalanan ke Hub')
                ->join('shipping_statuses', 'pengiriman_barangs.status', '=', 'shipping_statuses.id_status')
                ->join('pakets', 'pengiriman_barangs.id_paket', '=', 'pakets.id')
                ->join('pengirims', 'pengiriman_barangs.id_pengirim', '=', 'pengirims.id')
                ->join('penjemputan_barangs', 'penjemputan_barangs.id_pesanan', '=', 'pengiriman_barangs.id')
                ->join('cities as kota_pengirim', 'kota_pengirim.city_id', '=', 'pengirims.kabupaten_kota_id')
                ->join('provinces as provinsi_pengirim', 'provinsi_pengirim.province_id', '=', 'pengirims.provinsi_id')
                ->join('package_types', 'pakets.jenis_paket', '=', 'package_types.id_type')
                ->get();

            return view('admin.terima-paket-warehouse', compact('dataPenjemputan', 'admin'));
        }
    }

    public function TerimaWarehouse(Request $request)
    {
        $admin = [];
        if (Session::has('adminID')) {
            $admin      = admin::where('id', '=', Session::get('adminID'))->first();
            $replace    = str_replace(["\r\n", ' '], ',', $request->listIdDiJemput);
            $datafilter = explode(',', $replace);
            $dataHasil  = [];
            $datafilter = array_values(array_filter($datafilter));
            date_default_timezone_set('Asia/Jakarta');

            for ($x = 0; $x < count($datafilter); $x++) {
                $updateNama = penjemputan_barang::where('id_pesanan', 'like', $datafilter[$x])->update([

                    'tanggal_diterima_warehouse' => date('Y-m-d'),
                    'waktu_diterima_warehouse'   => date('H:i'),
                    'sudah_diterima_warehouse'   => 1,
                ]);
                $updateStatus = pengiriman_barang::where('id', 'like', $datafilter[$x])->update([
                    'status' => 'STS-005',
                ]);
            }
        }

        return back();
    }
}
