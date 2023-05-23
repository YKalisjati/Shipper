<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('/Shipper/kontak');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'name'         => 'required',
            'phone_number' => 'required',
            'email'        => 'required|email',
            'message'      => 'required',
        ]);

        $contact = new Contact();

        $contact->name         = $request->name;
        $contact->phone_number = $request->phone_number;
        $contact->email        = $request->email;
        $contact->message      = $request->message;

        $contact->save();

        Mail::send('/Shipper/contact_email', [
            'name'         => $request->get('name'),
            'phone_number' => $request->get('phone_number'),
            'email'        => $request->get('email'),
            'user_message' => $request->get('message'),
        ], static function ($message) use ($request) {
            $message->from($request->email);
            $message->to('adminShipper_Sadhar@project.com')
                ->subject('Contact Us');
        });

        return back()->with('success', 'Terima kasih, telah mengontak kami!');
    }
}
