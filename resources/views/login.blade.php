@extends('layouts.baselayout')

@section('title')
    Login
@stop

@section('content')


    <div class="container">

        <h1 class="title center-block">
            Login
        </h1>

            <!------------------------code---------------start---------------->
            <p class="page-header">
                @include('alerts.erros')
            </p>

                <div class="card card-container">
                    <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                    <img id="profile-img" class="profile-img-card"
                         src="{{asset('img/user_green.gif')}}"/>
                    <p id="profile-name" class="profile-name-card"></p>
                    {!!  Form::open(array('route'=>'log.store','class'=>'form-signin','role'=>'form'))  !!}

                    <span id="reauth-email" class="reauth-email"></span>
                    {!! Form::email('email',null, array('id'=>'inputEmail', 'class'=>'form-control', 'placeholder'=>'Email','required', 'autofocus'))!!}
                    {!! Form::password('password', array('class'=>'form-control', 'placeholder'=>'********','required','id'=>'inputPassword')) !!}

                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember_me"> Remember me
                        </label>
                    </div>
                    <div class="col-xs-12 col-md-6">{!! form::submit('Entrar',array('class'=>'btn btn-lg btn-primary btn-block btn-signin') ) !!}
                    </div>
                    <div class="col-xs-12 col-md-6">
                        {!! link_to_route('signup', $title = 'Sign Up',$parameters = null, $attributes = array('class'=>'btn btn-success btn-block btn-lg')) !!}

                    </div>
                    {!! Form::close() !!}
                            <!-- /form -->
                    <a href="#" class="forgot-password">
                        Forgot the password?
                    </a>
                </div>
                <!-- /card-container -->
            </div>
@stop