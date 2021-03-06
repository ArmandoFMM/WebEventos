@extends('layouts.admin')

@section('title')
    Eventos
@stop

@section('dir')
    Eventos
@stop

@section('title2')
    Eventos
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


        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
            {!! link_to_route('evento.create', $title = 'Registar', $parameters = null , $attributes = array('class'=>'btn btn-primary glyphicon glyphicon-plus add')) !!}
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach($eventos as $evento)
                    <div class="col-xs-3 evento">
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

        </div>




@stop





