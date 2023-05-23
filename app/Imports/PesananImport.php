<?php

namespace App\Imports;

use App\Models\City;
use App\Models\package_type;
use App\Models\paket;
use App\Models\penerima;
use App\Models\pengirim;
use App\Models\pengiriman_barang;
use App\Models\Province;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PesananImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    protected $id_user;

    protected $provinsi_id;
    protected $kabupaten_kota_id;
    protected $kode_pos;
    protected $catatan;

    public function __construct($id, $alamatLengkap, $idProvinsi, $idKota, $kodePos, $catatan)
    {
        $this->id_user           = $id;
        $this->alamatLengkap     = $alamatLengkap;
        $this->provinsi_id       = $idProvinsi;
        $this->kabupaten_kota_id = $idKota;
        $this->kode_pos          = $kodePos;
        $this->catatan           = $catatan;
    }

    public function model(array $row)
    {
        $configIdGeneratePengirim = ['table' => 'pengirims', 'length' => 15, 'prefix' => 'SNDR-'];
        $pengirimIdGenerate       = IdGenerator::generate($configIdGeneratePengirim);

        $users                    = new pengirim();
        $users->id                = $pengirimIdGenerate;
        $users->id_user           = $this->id_user;
        $users->alamat_lengkap    = $this->alamatLengkap;
        $users->provinsi_id       = $this->provinsi_id;
        $users->kabupaten_kota_id = $this->kabupaten_kota_id;
        $users->kode_pos          = $this->kode_pos;
        $users->catatan           = $this->catatan;

        $configIdGeneratePenerima = ['table' => 'penerimas', 'length' => 15, 'prefix' => 'RCVR-'];
        $penerimaIdGenerate       = IdGenerator::generate($configIdGeneratePenerima);

        $idProvinsiPenerima = Province::select('province_id')->where('province_name', 'like', "%{$row['provinsi']}%")->first();

        $idKotaPenerima = City::select('city_id')->where('city_name', 'like', "%{$row['kabupatenkota']}%")->first();

        $penerima                    = new penerima();
        $penerima->id                = $penerimaIdGenerate;
        $penerima->nama_penerima     = $row['nama_penerima'];
        $penerima->no_hp             = $row['no_handphone'];
        $penerima->alamat_lengkap    = $row['alamat_lengkap_penerima'];
        $penerima->provinsi_id       = $idProvinsiPenerima->province_id;
        $penerima->kabupaten_kota_id = $idKotaPenerima->city_id;
        $penerima->kode_pos          = $row['kode_pos'];
        $penerima->catatan           = $row['catatan_tambahan'];

        $configIdGeneratePaket = ['table' => 'pakets', 'length' => 15, 'prefix' => 'PCKG-'];
        $paketIdGenerate       = IdGenerator::generate($configIdGeneratePaket);

        $jenis_paket = package_type::select('id_type')->where('name_type', 'like', "%{$row['jenis_paket']}%")->first();

        $paket               = new paket();
        $paket->id           = $paketIdGenerate;
        $paket->jenis_paket  = $jenis_paket->id_type;
        $paket->berat        = $row['berat_paket_gram'];
        $paket->panjang      = $row['panjang_paket_cm'];
        $paket->lebar        = $row['lebar_paket_cm'];
        $paket->tinggi       = $row['tinggi_paket_cm'];
        $paket->nilai_barang = $row['nilai_barang_rp'];
        $paket->external_id  = $row['external_id'];

        $configIdGeneratePengiriman = ['table' => 'pengiriman_barangs', 'length' => 15, 'prefix' => 'KRM-'];
        $pengirimanIdGenerate       = IdGenerator::generate($configIdGeneratePengiriman);

        $DataKurir                       = explode('-', str_replace(' ', '', $row['kurir']));
        $pengirimanBarang                = new pengiriman_barang();
        $pengirimanBarang->id            = $pengirimanIdGenerate;
        $pengirimanBarang->id_paket      = $paketIdGenerate;
        $pengirimanBarang->id_pengirim   = $pengirimIdGenerate;
        $pengirimanBarang->id_penerima   = $penerimaIdGenerate;
        $pengirimanBarang->status        = 'STS-001';
        $pengirimanBarang->Agen          = $DataKurir[0];
        $pengirimanBarang->Jenis_Layanan = $DataKurir[1];
        $pengirimanBarang->Biaya         = 'Rp. ' . $row['ongkir'];
        $users->save();
        $penerima->save();
        $paket->save();
        $check = $pengirimanBarang->save();
    }
}
