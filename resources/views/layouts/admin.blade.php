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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('css/sweetalert.css')}}" rel="stylesheet" type="text/css"/>

    <!--Icons-->


</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="minhaNav">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span><img src="{{asset('img/logo-1.jpg')}}"
                                                        class="img-rounded"> Admin</span></a>
            <ul class="user-menu ">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="glyphicon glyphicon-user">
                        </div>
                        {{Auth::user()->username}} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#" class="glyphicon glyphicon-user "> Perfil</a></li>
                        <li><a href="#" class="glyphicon glyphicon-cog"> Settings</a></li>
                        <li>
                            {!! link_to_route('logout', $title = 'Logout',$parameters = null, $attributes = array('class'=>'glyphicon glyphicon-log-out')) !!}

                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

    <div class="form-group">

    </div>

    <ul class="nav menu">
        <li class="active">{!! link_to_route('admin', $title = 'Dashboard',$parameters = null, $attributes = array()) !!}</li>
        <li>
            {!! link_to_route('user.index', $title = 'Utilizadores',$parameters = null, $attributes = array('class'=>'glyphicon glyphicon-user')) !!}
        </li>
        <li>
            {!! link_to_route('evento.index', $title = 'Eventos',$parameters = null, $attributes = array('class'=>'glyphicon glyphicon-calendar')) !!}
        </li>
        <li><a href="tables.html" class="glyphicon glyphicon-cog">Definições</a></li>


        <li>{!! link_to_route('logout', $title = 'Logout',$parameters = null, $attributes = array('class'=>'glyphicon glyphicon-log-out')) !!}</li>
    </ul>

</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-8 col-lg-offset-2 main">


    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#" class="glyphicon glyphicon-home"></a></li>
            <li class="active">@yield('dir')</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-xs-offset-2">
            <h1 class="page-header">@yield('title2')</h1>
        </div>
    </div><!--/.row-->

    @yield('content')

</div> <!--/.main-->


<script type="text/javascript" src="{{URL::asset('js/jquery-1.12.3.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/custom.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/sweetalert.min.js')}}"></script>

<!--[if lt IE 9]>
<script type="text/javascript" src="{{URL::asset('js/html5shiv.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/respond.min.js')}}"></script>

<![endif]-->


</body>

</html>
