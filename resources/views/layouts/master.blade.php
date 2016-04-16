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
    <meta charset="UTF-8" />
    <link href="{{asset('css/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/nivo-lightbox.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/default.css')}}" rel="stylesheet" type="text/css">
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
                    <li><a class="active" onclick="parent.location='../index'"><span class="glyphicon glyphicon-home"></span></a></li>
                    <li class="dropdown"><a class="dropbtn">Eventos</a>
                        <div class="dropdown-content">
                            <a onclick="parent.location='../evento/create'">Registar</a>
                            <a onclick="parent.location='../evento/'">Visualizar</a>
                            <a href="#">Pesquisar</a>
                        </div></li>
                    <li><a onclick="parent.location='#'">Conta</a></li>
                    <li><a onclick="parent.location='../about'">About Us</a></li>
                    <li><a onclick="parent.location='../contact'">Contacte-nos</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>


@yield('body')



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



<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/nivo-lightbox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>
<script type="text/javascript">
    $('button#delete').on('click', function(){
        swal({
                    title: "Deseja realmente remover?",
                    text: "Não poderá recuperar os dados!",         type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Sim",
                    closeOnConfirm: false
                },
                function(){
                    $("#myform").submit();
                });
    })

</script>

</body>
</html>


