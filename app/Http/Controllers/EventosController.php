<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Local;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Session;
use Redirect;


class EventosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => ['update', 'destroy', 'edit', 'create']]);
    }

    public function index()
    {           $eventos = Evento::all();
        if (Auth::user()->role->designacao == 'admin') {
            return view('eventos.index', compact('eventos'));
        }
        else {
            return view('eventos.index1', compact('eventos'));
        }
    }


    public function create()
    {
        return view('eventos.create');
    }


    public function store(Request $request)
    {
        $request->user_id = 1;
        $evento = Evento::create($request->all());
        $evento->locals()->create($request->all());

        Session::flash('message', 'Evento criado com sucesso');
        return redirect()->route('evento.show', $evento);
    }

    public function show($id)
    {
        $evento = Evento::find($id);
        if (Auth::user()->role->designacao == 'admin') {
            return view('eventos.show')->with('evento', $evento);
        } else return view('eventos.show1')->with('evento', $evento);
    }

    public function edit($id)
    {
        $evento = Evento::find($id);

        return view('eventos.edit', compact('evento', $evento));

    }

    public function update(Request $request, $id)
    {
        $evento = Evento::find($id);

        //evento
        $evento->designacao = $request->designacao;
        $evento->tipo_evento = $request->tipo_evento;
        $evento->data = $request->data;
        if ($request->imagem != null) {
            $evento->imagem = $request->imagem;
        }
        $evento->hora_inicio = $request->hora_inicio;
        $evento->descricao = $request->descricao;

        //local
        $local = Local::find($evento->locals()->first()->id);
        $local->nome_local = $request->nome_local;
        $local->cidade = $request->cidade;
        $local->bairro = $request->bairro;
        $local->avenida_rua = $request->avenida_rua;
        $local->descricao_local = $request->descricao_local;
        $local->save();

        $user = User::find(Auth::user()->id);

        $user->eventos()->save($evento);

        Session::flash('message', 'Evento actualizado com sucesso');
        return redirect()->route('evento.index');

    }

    public function destroy($id)
    {
        $evento = Evento::find($id);
        $evento->locals()->detach();
        $evento->destroy($id);
        Session::flash('message', 'Evento eliminado com sucesso');
        return redirect()->route('evento.index');
    }
}
