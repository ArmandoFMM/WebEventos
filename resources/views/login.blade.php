@extends('layouts.baselayout')

@section('title')
    Login
@stop

@section('content')
    <div class="row">
        <div class="col-md-4"></div>



        <div id="loginBox" class="col-md-4">
            <h2 class="h2" align="center">Login</h2>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control username" id="user"
                               placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="password" class="form-control" id="senha"
                               placeholder="Senha">
                    </div>
                </div>

                <div class="form-group" class="btn-success">
                    <div class="col-sm-12">
                        <button id="login" type="button" onclick="parent.location='main.php'" class="btn btn-default">Submit</button>
                        <div class="checkbox">
                            <label><input type="checkbox" class="">Lembrar de
                                mim</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>





        <div class="col-sm-4"></div>

    </div>
@stop