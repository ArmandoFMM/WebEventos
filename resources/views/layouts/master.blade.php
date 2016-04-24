<?php
/**
 * Created by PhpStorm.
 * User: armandofm
 * Date: 09/04/16
 * Time: 13:58
 */
?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>@yield('title')</title>


</head>

<body>

<div class="main-header" id="menu">
    <div class="container">
        <div class="navbar navbar-inverse navbar-fixed-top"
             role="navigation">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span> <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"><img src="{{asset('img/logo-1.jpg')}}"
                                                      class="img-responsive img-rounded" alt="logo"></a>
            </div>
            <nav class="collapse navbar-collapse" id="minhaNav">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="active" href="{{ route('index')}}"><span class="glyphicon glyphicon-home"></span></a>
                    </li>
                    <li class="dropdown"><a class="dropbtn">Eventos</a>
                        <div class="dropdown-content">
                            <a href="{{route('evento.index')}}">Visualizar</a>
                            <a href="#">Pesquisar</a>
                        </div>
                    </li>
                    <li><a href="{{ route('about') }}">Sobre Nós</a></li>
                    <li><a href="{{ route('contact') }}">Contacte-nos</a></li>

                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="glyphicon glyphicon-user">
                            </div>
                            @if(Auth::check())
                            {{Auth::user()->username}}
                             @endif
                                <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#" class="glyphicon glyphicon-user "> Perfil</a></li>
                            <li><a href="#" class="glyphicon glyphicon-cog"> Settings</a></li>
                            @if(Auth::check())
                            <li>{!! link_to_route('logout', $title = 'Logout',$parameters = null, $attributes = array('class'=>'glyphicon glyphicon-log-out')) !!}</li>
                            @else
                                <li>{!! link_to_route('login', $title = 'Login',$parameters = null, $attributes = array('class'=>'glyphicon glyphicon-log-in')) !!}</li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </nav>



        </div>
    </div>
</div>


@yield('content')


<div class="navbar-static-bottom">
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12 text-left">
                    <span>Copyright &copy; 2016 WebDevz 7 </span>
                </div>
                <!-- /.text-center -->
                <div class="col-md-4 hidden-xs text-right">
                    <a href="#topo" id="voltar-topo">Voltar ao topo</a>
                </div>
                <!-- /.text-center -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#footer -->
</div>

<script type="text/javascript" src="{{URL::asset('js/jquery-1.12.3.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/custom.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/sweetalert.min.js')}}"></script>
</body>
</html>


