@extends('layouts.master')

@section('title')
    Sobre nós
@stop

@section('body')
    <div id="about-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12"></div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">

                <div class="col-md-5 col-sm-4">
                    <img src="{{asset('img/logo-1.jpg')}}" class="img-responsive" alt="logo">
                    <p>
                        WebDevz 7 é um grupo de gesão de eventos Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit,
                        sed diam nonummy nibh euismo
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismo.
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismo.
                    </p>

                    <p>
                        <i class="glyphicon glyphicon-phone"></i> +258-21-12-34-56
                    </p>
                    <p>
                        <i class="glyphicon glyphicon-envelope"></i> webdevzmoz7@gmail.com
                    </p>
                    <p>
                        <i class="glyphicon glyphicon-globe"></i> www.webdevzmoz7.com
                    </p>
                </div>


                <div class="col-md-4 col-sm-4 newsletter">
                    <h3>Newsletter</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismo.
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismo.
                    </p>
                    <div class="input-group">
                        <form action="#" method="post">
                            <input name="email" type="email" placeholder="Introduza seu email"
                                   class="form-control">
                            <button type="submit" name="submit" class="btn email">Enviar</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </footer>
@stop
