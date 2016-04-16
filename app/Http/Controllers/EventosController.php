<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Foto;
use App\Local;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class EventosController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();

        return view('eventos.index', compact('eventos'));

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


//        $local = new Local();
//        $local->nome_local = $request->nome_local;
//        $local->bairro = $request->bairro;
//        $local->avenida_rua = $request->avenida_rua;
//        $local->nome_local = $request->nome_local;
//        $local->descricao = $request->descricao_local;
//        $imagem = Request::file('foto');
//        $extensao =$imagem->getClientOriginalExtension();
//        Storage::disk('local')->put($imagem->getFilename().'.'.$extensao, File::get($imagem));


        $user = User::find(1);

        $user->eventos()->save($evento);

        $foto = $request->file('foto');

        $foto = new Foto();
        $foto->nome = $request->file('foto')->getClientOriginalName();
        $evento->fotos()->save($foto);
        $evento->fotos()->save($foto);

       // $evento->locals()->save($local);
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
