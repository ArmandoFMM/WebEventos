@extends('layouts.master')
@section('title')
    {{$evento->designacao}}
@stop
@section('content')
    <p class="page-header">
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>
        @endif
        </p>

        <fieldset>
            <div class="container formContent">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-lg-9 col-sm-offset-2 col-md-offset-3">

                        <h1>{{$evento->designacao}}</h1>
                        <img src="../eventos/{{$evento->imagem}}" width="200px" class="img-responsive">

                        <div class="evento">
                            @foreach($evento->locals as $local)
                                <h3 class="h3"> Local a decorrer:</h3>
                                <p class="text-justify text-capitalize"> <h4 class="h4">{{$local->nome_local}}</h4>
                                <p class="text-justify text-capitalize"> {{$local->cidade}} </p>
                                <p class="text-justify text-capitalize"> {{$local->bairro}} </p>
                                <p class="text-justify text-capitalize"> {{$local->avenida_rua}} </p>
                            @endforeach

                            <h3 class="h3"> Dia/Hora a decorrer:</h3>
                            <p class="text-justify text-capitalize">{{$evento->data}}</p>
                            <p class="text-justify text-capitalize">{{$evento->hora_inicio}}</p>
                            <p class="page-header">
                        <span>
                              <a href="#"
                               class="btn btn-primary glyphicon glyphicon-link">Participar</a>

                    </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

@stop