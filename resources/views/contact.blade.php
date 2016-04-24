@extends('layouts.master')

@section('title')
    Contacte-nos
@stop


@section('content')
    <style>
        body {
            background-color: hsla(4, 0%, 0%, 0.3);
        }
    </style>
    <div id="section3" class="container-fluid formContent">
        @include('alerts.sucesso')
        <h3> Contacte-nos</h3>
        {!! Form::open(array('role'=>'form', 'class'=>'form-horizontal','route'=>'mail.store','method'=>'post')) !!}
        <div class="form-group">
            <label class="control-label col-sm-2" for="nome">Nome</label>
            <div class="col-sm-10">
                {!! Form::text('nome', null, array('class'=>'form-control', 'required'=>'Prencha o nome','id'=>'nome','placeholder'=>'preencha com o seu nome')) !!}
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">email</label>
            <div class="col-sm-10">
                {!! Form::text('email', null, array('class'=>'form-control', 'required'=>'Prencha o email','id'=>'email','placeholder'=>'exemplo@gmail.com')) !!}

            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="data">Mensagem</label>
            <div class="col-sm-10">
                {!! Form::textarea('mensagem', null, array('class'=>'form-control', 'required'=>'Prencha o email','id'=>'email','placeholder'=>'Mensagem','rows'=>'7', 'cols'=>'40', 'id'=>'mensagem')) !!}
            </div>
        </div>
        {!! Form::submit('Enviar', array('class'=>'btnEnviar')) !!}

        {!! Form::close() !!}
    </div>
@stop