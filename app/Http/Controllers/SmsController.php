<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class SmsController extends Controller
{
     public function sendSms(Request $request){

         Nexmo::message()->send([
             'to'   => '+905535417079',
             'from' => '+905535417079',
             'text' => 'Using the facade to send a message.'
         ]);
         Session::flash('success','SMS Sent Successfully');
         return redirect('/');

     }
}
