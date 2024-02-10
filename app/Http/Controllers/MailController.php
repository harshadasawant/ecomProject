<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\MailNotify;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(){
      // return "hello1";
      $mailData=[
        'title'=>'Mail From Harshada',
        'body' => 'This is testing mail using smtp',
      ];

    //  try{


      Mail::to('harshadasawant22@gmail.com')->send(new MailNotify($mailData));

    //  } catch(Exception $e){
    //  echo("hello");
    //   dd('Exception',$e);
    //   return $e;
    //  }
      dd('Email send successfully');
    }
}
