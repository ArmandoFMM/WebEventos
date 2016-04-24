<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

use App\Http\Requests;

class MailController extends Controller
{
    public function store(Request $request){

        Mail::send('emails.contact', $request->all(), function($msg){
            $msg->subject('Email para Contacto');
            $msg->to('webdevzmoz7@gmail.com');
            
        });

        Session::flash('message','Mensagem enviada com sucesso');

        return Redirect::to('contact');
    }
}
