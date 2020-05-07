<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function indexSms(){
        return view('sms_page');
    }
    public function sendSms(Request $request)
    {

        // return $request;
        Nexmo::message()->send([
            'to' => '' . $request->mobile,
            'from' => '16105552344',
            'text' => 'Using the facade to send a message.'
        ]);

        Session::flash('success', 'Message sent');
        return redirect('sms_page');
    }
}
