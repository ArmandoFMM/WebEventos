<?php

namespace App\Http\Controllers;

use App\Evento;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\View;

class EventosController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();

        return view('eventos.index')->with('eventos', $eventos);

    }


    public function create()
    {
        return view('eventos.create');
    }


    public function store(Request $request)
    {
        $evento = new Evento();
        $evento->designacao = $request->designacao;
        $evento->tipo_evento = $request->tipo_evento;
        $evento->data = $request->data;
        $evento->hora_inicio = $request->hora_inicio;
        $evento->descricao = $request->descricao;


        $user = User::find(1);

        $user->eventos()->save($evento);
//            $inputs = $request->all();
//            $evento = Evento::create($inputs);

        return $this::show($evento->id);
    }

    public function show($id)
    {
        $evento = Evento::find($id);
        return view('eventos.show')->with('evento', $evento);
    }

    public function edit($id)
    {
        $evento = Evento::find($id);

        return view('eventos.edit', compact('evento', $evento));

    }

    public function update(Request $request, $id)
    {
        $evento = Evento::find($id);

        $evento->designacao = $request->designacao;
        $evento->tipo_evento = $request->tipo_evento;
        $evento->data = $request->data;
        $evento->hora_inicio = $request->hora_inicio;
        $evento->descricao = $request->descricao;


        $user = User::find(1);

        $user->eventos()->save($evento);

        return $this::index();

    }

    public function destroy($id)
    {
//        $evento = Evento::find($id);
//        $evento->delete();
        Evento::destroy($id);

        return $this::index();
    }

}
