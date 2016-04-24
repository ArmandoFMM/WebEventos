<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth' ,['only'=>['index','update','destroy','edit']]);
        $this->middleware('admin',['only'=>['index','update','destroy','edit']]);
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {

        $roles = Role::lists('designacao', 'id');
        return view('users.create', compact('roles'));

    }


    public function store(Request $request, Requests\LoginRequest $loginRequest)
    {
        if (Auth::check()) {

            User::create($request->all());
            Session::flash('message', 'Utilizador gravado com sucesso');
            return redirect()->route('user.index');
        } else {
            User::create($request->all());
            Session::flash('message', 'Utilizador gravado com sucesso');
            if (
            Auth::attempt(['email' => $loginRequest->email, 'password' => $loginRequest->password])
            ) {
                return redirect()->route('/');;

            }
            return 'ghfhfffh';
        }


    }

    public function show()
    {

    }

    public  function edit($id)
    {
        $user = User::find($id);
        $roles = Role::lists('designacao', 'id');
        return view('users.edit', compact('user', $user), compact('roles', $roles));
    }

    public  function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        Session::flash('message', 'Utilizador actualizado com sucesso');
        return redirect()->route('user.index');

    }


    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('message', 'Utilizador eliminado com sucesso');
        return redirect()->route('user.index');
    }
}