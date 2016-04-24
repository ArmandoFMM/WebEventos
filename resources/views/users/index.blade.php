@extends('layouts.admin')

@section('title')
    Utilizador
@stop

@section('dir')
    Utilizador
@stop

@section('title2')
    Utilizadores
@stop

@section('content')

    <p class="page-header">
   @include('alerts.sucesso')
        </p>

        <div class="pull-right">
    {!! link_to_route('user.create', $title = 'Registar', $parameters = null , $attributes = array('class'=>'btn btn-primary glyphicon glyphicon-plus add')) !!}
</div>
        <div class="table-responsive">
    <table class="table">
        <thead>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Função</th>
        <th>Acções</th>
        </thead>
        @foreach($users as $user)
            <tbody>
            <td>{{$user->username}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->designacao}}</td>
            <td>

                {!! Form::open(array('id'=>'myform','method'=>'delete','route'=>array('user.destroy',$user->id))) !!}
                {!! link_to_route('user.edit', $title = 'Editar', $parameters = $user->id, $attributes = array('class'=>'btn btn-info glyphicon glyphicon-edit')) !!}
                {!! Form::button('Eliminar', array('class'=>'btn btn-danger glyphicon glyphicon-remove-circle', 'id'=>'delete')) !!}
                {!! Form::close() !!}


                </td>
            </tbody>
        @endforeach
    </table>
    </div>
@stop