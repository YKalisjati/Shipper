<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use App\Models\destination_address;
use App\Models\Image;
use App\Models\Paket;
use App\Models\Penerima;
use App\Models\Pengirim;
use App\Models\pengiriman_barang;
use App\Models\Users;
use GuzzleHttp\Utils;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kodepandai\LaravelRajaOngkir\Facades\RajaOngkir;

class BuatPesananDomestik extends Controller
{
    public function check_ongkir(Request $request)
    {
        $kurirs = Courier::all();

        foreach ($kurirs as $kurir) {
            $getCost     = RajaOngkir::getCost($request->city_origin, 'city', $request->city_destination, 'city', $request->weight, $kurir->code);
            $getDataCost = Utils::jsonDecode($getCost)->rajaongkir;

            if ($getDataCost->status->code === 200) {
                $cost[] = $getDataCost->results;
            }
        }

        return response()->json($cost);
    }

    public function buatPesanan(Request $request)
    {
        if (Session::has('loginID')) {
            $idUser = Session::get('loginID');
            $data   = Users::where('id', '=', Session::get('loginID'))->first();
            $gambar = Image::where('user_id', $data['id'])->first();

            $configIdGeneratePengirim    = ['table' => 'pengirims', 'length' => 15, 'prefix' => 'SNDR-'];
            $pengirimIdGenerate          = IdGenerator::generate($configIdGeneratePengirim);
            $pengirim                    = new pengirim();
            $pengirim->id                = $pengirimIdGenerate;
            $pengirim->id_user           = $idUser;
            $pengirim->alamat_lengkap    = $request->alamatLengkapPengirim;
            $pengirim->provinsi_id       = $request->idProvinsi;
            $pengirim->kabupaten_kota_id = $request->idCity;
            $pengirim->kode_pos          = $request->kodePosPengirim;
            $pengirim->catatan           = $request->notePengirim;

            $configIdGeneratePenerima    = ['table' => 'penerimas', 'length' => 15, 'prefix' => 'RCVR-'];
            $penerimaIdGenerate          = IdGenerator::generate($configIdGeneratePenerima);
            $penerima                    = new penerima();
            $penerima->id                = $penerimaIdGenerate;
            $penerima->nama_penerima     = strtolower($request->namaPenerima);
            $penerima->no_hp             = $request->noHpPenerima;
            $penerima->alamat_lengkap    = $request->alamatPenerima;
            $penerima->provinsi_id       = $request->idProvinsiP;
            $penerima->kabupaten_kota_id = $request->idCityP;
            $penerima->kode_pos          = $request->kodePosPenerima;
            $penerima->catatan           = $request->notePenerima;

            if ($request->nameSelected2 === 'buatBaru') {
                $addressPenerimaconfig     = ['table' => 'destination_addresses', 'length' => 15, 'prefix' => 'ALMP-'];
                $AddressPenerimaIdGenerate = IdGenerator::generate($addressPenerimaconfig);

                $addressPenerima                    = new destination_address();
                $addressPenerima->id                = $AddressPenerimaIdGenerate;
                $addressPenerima->nama_penerima     = $request->namaPenerima;
                $addressPenerima->nohp_penerima     = $request->noHpPenerima;
                $addressPenerima->nama_alamat       = 'alamat default ' . strtolower($request->namaPenerima);
                $addressPenerima->user_id           = $idUser;
                $addressPenerima->alamat_lengkap    = $request->alamatPenerima;
                $addressPenerima->provinsi_id       = $request->idProvinsiP;
                $addressPenerima->kabupaten_kota_id = $request->idCityP;
                $addressPenerima->kodepos           = $request->kodePosPenerima;
                $addressPenerima->note              = $request->notePenerima;
            }

            $configIdGeneratePaket = ['table' => 'pakets', 'length' => 15, 'prefix' => 'PCKG-'];
            $paketIdGenerate       = IdGenerator::generate($configIdGeneratePaket);
            $paket                 = new paket();
            $paket->id             = $paketIdGenerate;
            $paket->jenis_paket    = $request->jenisPaket;
            $paket->berat          = $request->beratPaket;
            $paket->panjang        = $request->panjang;
            $paket->lebar          = $request->lebar;
            $paket->tinggi         = $request->tinggi;
            if ($request->nilaiBarang === null) {
                $request->nilaiBarang = null;
            } else {
                $nilaiHandler        = str_replace('Rp. ', '', $request->nilaiBarang);
                $paket->nilai_barang = str_replace('.', '', $nilaiHandler);
            }

            if ($request->externalIdP === null) {
                $paket->external_id = null;
            } else {
                $paket->external_id = $request->externalIdP;
            }

            $str  = $request->pilihKurir;
            $data = explode('/', $str);

            $configIdGeneratePengiriman = ['table' => 'pengiriman_barangs', 'length' => 15, 'prefix' => 'KRM-'];
            $pengirimanIdGenerate       = IdGenerator::generate($configIdGeneratePengiriman);
            $pengiriman                 = new pengiriman_barang();
            $pengiriman->id             = $pengirimanIdGenerate;
            $pengiriman->id_paket       = $paketIdGenerate;
            $pengiriman->id_pengirim    = $pengirimIdGenerate;
            $pengiriman->id_penerima    = $penerimaIdGenerate;
            $pengiriman->status         = 'STS-001';
            $pengiriman->agen           = $data[0];
            $pengiriman->jenis_layanan  = $data[1];
            $pengiriman->biaya          = $data[2];

            if ($pengirim->save()) {
                if ($penerima->save()) {
                    if ($request->nameSelected2 === 'buatBaru') {
                        $res_address = $addressPenerima->save();
                    }
                    if ($paket->save()) {
                        if ($pengiriman->save()) {
                            return redirect('pesanan-dashboard')->with('success', 'Data pesanan anda berhasil disimpan');
                        }
                    }
                }
            }
        }

        return redirect('pesanan-dashboard')->with('fail', 'Maaf, terjadi kesalahan dalam sistem sehingga membuat data pesanan anda gagal disimpan');
    }
}
