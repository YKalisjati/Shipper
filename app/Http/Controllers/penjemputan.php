<?php

namespace App\Http\Controllers;

use App\Models\pengiriman_barang;
use App\Models\penjemputan_barang;
use Haruncpi\LaravelIdGenerator\IdGenerator;

use Illuminate\Http\Request;

class penjemputan extends Controller
{
    public function ajukanPenjemputan(Request $request)
    {
        $request->validate([
            'hariPenjemputan'  => 'required',
            'waktuPenjemputan' => 'required',
            'jumlahPaket'      => 'required',
            'beratTotal'       => 'required',
            'idPesanan'        => 'required',
        ]);

        $replace    = str_replace(["\r\n", ' '], ',', $request->idPesanan);
        $datafilter = explode(',', $replace);
        $dataHasil  = [];
        $datafilter = array_values(array_filter($datafilter));

        for ($x = 0; $x < count($datafilter); $x++) {
            $configPenjemputan     = ['table' => 'penjemputan_barangs', 'length' => 15, 'prefix' => 'PCKUP-'];
            $PenjemputanIdGenerate = IdGenerator::generate($configPenjemputan);

            $dataPenjemputan                      = new penjemputan_barang();
            $dataPenjemputan->id                  = $PenjemputanIdGenerate;
            $dataPenjemputan->id_pesanan          = $datafilter[$x];
            $dataPenjemputan->tanggal_penjemputan = $request->hariPenjemputan;
            $dataPenjemputan->waktu_penjemputan   = $request->waktuPenjemputan;
            $dataPenjemputan->catatan             = $request->catatan;

            $updateStatus = pengiriman_barang::where('id', 'like', $datafilter[$x])->update([
                'status' => 'STS-002',
            ]);
            $successAdd = $dataPenjemputan->save();
        }

        return back()->with('success', 'Anda telah mengajukan penjemputan. Kami akan menangapinya secepat mungkin');
    }
}
