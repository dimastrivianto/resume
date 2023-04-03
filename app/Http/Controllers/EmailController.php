<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
class EmailController extends Controller
{
    static function sendEmail($name, $email){
      // return response()->json('jalan');
      $to_name = $name;
      $to_email = $email;
      $data = array();

      Mail::send('email.index', $data, function($message) use ($to_name, $to_email) {
      $message->to($to_email, $to_name)
      ->subject('Thank You Message');
      $message->from(env('MAIL_USERNAME'),'Dimas Trivianto');
      });


    }

    public function emailPage(){
      return view('email.index');
    }

}
