@extends('layouts.admin')

@section('title')
    DashBoard
@stop

@section('dir')
    Dashboard
@stop

@section('title2')
    Dashboard
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

        <div class="container">

            <h2 class="text-center h2">Eventos</h2>
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


            <h2 class="text-center h2">Utilizadores</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Função</th>
                    </thead>
                    @foreach($users as $user)
                        <tbody>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role->designacao}}</td>
                         </tbody>
                    @endforeach
                </table>
            </div>

        </div>




@stop





