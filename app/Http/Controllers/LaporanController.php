<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function search(Request $request)
    {
        $fromDate = $request->input('fromDate');
        $toDate   = $request->input('toDate');

        $query = DB::table('databarang')->select()
            ->where('tgl_masuk', '>=', $fromDate)
            ->where('tgl_masuk', '<=', $toDate)
            ->get();

        return view('/laporan-dashboard', compact('query'));
    }
}
