<?php

namespace App\Http\Controllers;

class viewPage extends Controller
{
    public function privacy()
    {
        return view('Shipper.privacy');
    }

    public function create_order()
    {
        return view('UserDashboard.Help.order-help-dashboard');
    }

    public function create_pickup()
    {
        return view('UserDashboard.Help.pickup-help-dashboard');
    }

    public function report()
    {
        return view('UserDashboard.Help.report-help-dashboard');
    }

    public function pilihkurirlogistik()
    {
        return view('UserDashboard/Pesanan/pilihkurirlogistik-dashboard');
    }

    public function warehouse()
    {
        return view('Shipper/warehouse');
    }

    public function integrasi_api()
    {
        return view('Shipper/Integrasi-api');
    }

    public function mitra()
    {
        return view('Shipper/mitra');
    }

    public function faq()
    {
        return view('FAQ.faq');
    }

    public function faq_umum()
    {
        return view('FAQ.faq-umum');
    }

    public function faq_mitra()
    {
        return view('FAQ.faq-mitra');
    }

    public function faq_api()
    {
        return view('FAQ.faq-api');
    }

    public function faq_pengiriman()
    {
        return view('FAQ.faq-pengiriman');
    }

    public function aktivasi()
    {
        return view('AktivasiAkun/aktivasi');
    }
}
