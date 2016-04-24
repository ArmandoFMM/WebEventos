<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Session;
use Redirect;
use App\Http\Requests\LoginRequest;

class LogController extends Controller
{


    public function store(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->role->designacao == 'admin') {
                return Redirect::to('admin');
            }
            else return Redirect::to('/');
        }
        Session::flash('message-error', 'email ou password inválido');
        return Redirect::to('login');

    }


    public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }
}
