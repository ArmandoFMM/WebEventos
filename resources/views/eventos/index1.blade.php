@extends('layouts.master')

@section('title')
    Todos os Eventos
@stop

@section('content')
    <p class="page-header">
        @include('alerts.sucesso')
    </p>



        <div class="container-fluid"></div>
        @foreach($eventos as $evento)
            <div class="col-xs-12 evento">
                <p class="page-header">
                <h1>{{$evento->designacao}}</h1></p>

                <img src="eventos/{{$evento->imagem}}" class="img-rounded" width="100px"
                />
                <p class="page-header">
                        <span>
                            <h4>{{$evento->data}}
                                {{$evento->hora_inicio}}</h4>
                            <a href="{{route('evento.show',$evento->id)}}"
                               class="btn btn-info glyphicon glyphicon-eye-open">Visualizar</a>
                    </span>
                </p>
            </div>
        @endforeach
        </div>
@stop