<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class download_file_controller extends Controller
{
    public function downloadFile()
    {
        return Storage::download('public/Excel/Template Pemesanan Bulk.xlsx');
    }
}
