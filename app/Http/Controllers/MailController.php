<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{

   $to_name = 'Harley Melgo';
   $to_email = 'akosiharly@gmail.com';
   $data = array ('name')"Harley Melgo", "body" => "A test mail)";

   Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
   $message->to($to_email, $to_name)->subject('Laravel Test Mail');

   $message->FROM('SENDER_EMAIL_ADDRESS', 'Test Mail');


   });

}
