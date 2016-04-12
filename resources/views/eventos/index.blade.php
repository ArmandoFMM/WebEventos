@extends('layouts.master')

@section('title')
    Todos os Eventos
@stop

@section('body')
    <div class="container">
        <div class="row">
            @foreach($eventos as $evento)

                <div class="col-xs-3">
                    <p class="page-header">
                    <h1>{{$evento->designacao}}</h1></p>
                    <img src="" class="img-rounded" width="250px"
                         height="250px"/>
                    <p class="page-header">
                    <h4>{{$evento->data}}</h4>
                    <h4>{{$evento->hora_inicio}}</h4>
                    <span>
                        {!! Form::open() !!}
                        {!! Form::button('Visualizar',array('class'=>'btn btn-info glyphicon glyphicon-eye-open','onclick'=>"parent.location='../evento/$evento->id'")) !!}
                        {!! Form::close() !!}
                    </span>
                    </p>


                </div>

            @endforeach

        </div>
    </div>
@stop