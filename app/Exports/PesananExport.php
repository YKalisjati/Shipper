<?php

namespace App\Exports;

use App\Models\pengirim;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PesananExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        return view('exports.pesanan', [
            'pengiriman_barang' => pengirim::select(
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
            )->where('users.id', '=', $this->id)
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
                ->get(),
        ]);
    }
}
