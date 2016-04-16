@extends('layouts.master')

@section('title')
    {{$evento->designacao}}
@stop

@section('body')
    <fieldset>
    <div class="container formContent">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-9 col-sm-offset-2 col-md-offset-3">
                {!! Form::open(array('id'=>'myform','method'=>'delete','route'=>array('evento.destroy',$evento->id))) !!}
                <h1>{{$evento->designacao}}</h1>
                <h4>{{$evento->data}}</h4>
                <h4>{{$evento->hora_inicio}}</h4>

                {!! Form::button('Editar',array('class'=>'glyphicon glyphicon-edit','onclick'=>"parent.location='../evento/$evento->id/edit'")) !!}
                {!! Form::button('Apagar',array('class'=>'glyphicon glyphicon-remove','id'=>'delete')) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </fieldset>
@stop