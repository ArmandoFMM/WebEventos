@extends('layouts.master')

@section('title')
    Contacte-nos
@stop


@section('body')
    <style>
        body {
            background-color: hsla(4, 0%, 0%, 0.3);
        }
    </style>
    <div id="section3" class="container-fluid formContent">

        <h3> Contacte-nos</h3>
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nome">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" required="Prencha o nome" id="nome"
                           placeholder="preencha com o seu nome">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="data">Comentário</label>
                <div class="col-sm-10">
                <textarea type="text" class="form-control" rows="7" cols="40" id="comentario"
                          placeholder="preencha com o seu comentário"></textarea>
                </div>
            </div>
        </form>
        <input type="submit" class="btnEnviar" value="Enviar">

    </div>
@stop