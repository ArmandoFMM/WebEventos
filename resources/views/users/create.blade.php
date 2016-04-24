@extends('layouts.admin')

@section('title')
    Utilizador
@stop

@section('dir')
    Registo de Utilizador
@stop

@section('title2')
    Registo de Utilizador
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-9 col-xs-12 col-lg-offset-1">
            <div class="panel panel-info ">
                <div class="panel-body">
                    <h3 class="panel-title">Registar Utilizador</h3>
                </div>
            </div>
            <!--  <div class="jumbotron"> -->
            {!! Form::open(array('route'=>'user.store')) !!}

            <div class="form-group">
                <div class="control-label col-xs-3"> {!!  Form::label('username','Utilizador')!!} </div>
                <div class="col-xs-12">
                    {!! Form::text('username', null, array('class'=>'form-control input-lg','id'=>'name', 'placeholder'=>'Informe o seu username')) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="control-label col-xs-8">{!!  Form::label('email','Email')!!}   </div>

                <div class="col-xs-12">
                    {!!  Form::email('email',null,array('class'=>'form-control input-lg', 'id'=>'email',
                    'placeholder'=>'Informe o seu email'))!!}
                </div>
            </div>


            <div class="form-group">
                <div class="control-label col-xs-6">
                    {!! Form::label('role_id','Funcao') !!}
                </div>
                <div class="col-xs-12">
                    {!! Form::select('role_id',$roles, null, array('class'=>'form-control input-lg dropdown-content', 'placeholder'=>'--selecione--')) !!}
                </div>
                </div>



            <div class="form-group">
                <div class="control-label col-xs-6">
                    {!! Form::label('password','Password') !!}
                </div>
                <div class="control-label col-xs-6">
                    {!! Form::label('confirm_password','Confirmar Passwrd')!!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-6">
                    {!! Form::password('password', array('class'=>'form-control input-lg','id'=>'password', 'placeholder'=>'********')) !!}
                </div>

                <div class="col-xs-6">
                    {!! Form::password('confirm_password', array('class'=>'form-control input-lg','id'=>'password', 'placeholder'=>'********')) !!}
                </div>
            </div>


            <div class="form-group">
                <div class="control-label col-xs-12">  {{Form::label('telefone','Telefone')}}</div>
                <div class="col-xs-12">
                    {{Form::text('telefone',null,array('class'=>'form-control input-lg','id'=>'telefone','placeholder'=>'Informe o seu número de telefone'))}}
                </div>
            </div>

                <div class="form-group">
                    <div class="col-xs-12 col-md-6">
                        {!! Form::submit('Gravar', array('class'=>'btn btn-primary btn-lg btn-block')) !!}
                    </div>

                    <div class="col-xs-12 col-md-6">
                        {!! Form::reset('Limpar', array('class'=>'btn btn-default btn-lg btn-block')) !!}

                </div>
            </div>
            {!! Form::close() !!}
                    <!-- </div> -->
            <!-- <div class="panel-body">The server successfully processed the request.</div> -->
        </div>
    </div>

@stop