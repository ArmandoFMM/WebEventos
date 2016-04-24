<?php

namespace App\Http\Controllers;

use App\User;
use App\Evento;

use App\Http\Requests;

class PagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['only'=>'admin']);
        $this->middleware('admin', ['only'=>'admin']);

    }

    public function getIndex()
    {
        return view('index');
    }


    public function getAbout()
    {
        return view('about');
    }


    public function getContact()
    {
        return view('contact');
    }

    public function admin()
    {
        $eventos = Evento::all();
        $users = User::all();
        return view('admin.index', compact('eventos'), compact('users'));
    }

    public function login(){

        return view('login');
    }

    public function signup(){
        return view('signup');
    }
}
