@extends('layouts.master')

@section('title')
    Web Devz 7 - Gestão de Eventos
@stop

@section('body')
    <div class="container-caroussel" id="home">
        <div data-rel="lightbox" class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="../img/evento-moztech.jpg" alt="evento">
                    </div>

                    <div class="item">
                        <img src="../img/evento-jantar-africano.jpg" alt="evento">
                    </div>

                    <div class="item">
                        <img src="../img/evento-espectaculo.jpg" alt="evento">
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button"
                       data-slide="prev"> <span
                                class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a> <a class="right carousel-control" href="#myCarousel" role="button"
                            data-slide="next"> <span
                                class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>
    </div>



    <div class="portfolio" id="proximos">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <h2>Proximos Eventos</h2>
                </div>
            </div>

            <div class="row mt30">
                <ol>

                    <li><a href="../img/evento-moztech.jpg"
                           data-lightbox-gallery="portfolio-gallery"><img
                                    src="../img/evento-moztech_1.jpg" alt="evento"></a></li>
                    <li><a href="../img/evento-festival-lusofonia.jpg"
                           data-lightbox-gallery="portfolio-gallery"><img
                                    src="../img/evento-capulana.jpg" alt="evento"></a></li>

                    <li><a href="../img/evento-mingas.jpg"
                           data-lightbox-gallery="portfolio-gallery"><img
                                    src="../img/evento-mingas.jpg" alt="evento"></a></li>

                    <li><a href="../img/evento-tendas.jpg"
                           data-lightbox-gallery="portfolio-gallery"><img
                                    src="../img/evento-tendas.jpg" alt="evento"></a></li>
                    <li><a href="../img/evento_didy.jpg"
                           data-lightbox-gallery="portfolio-gallery"><img
                                    src="../img/evento_didy.jpg" alt="evento"></a></li>
                </ol>
            </div>
        </div>
    </div>





    <div class="portfolio" id="realizados">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <h2>Eventos Realizados Recentemente</h2>
                </div>
            </div>
        </div>
    </div>
@stop