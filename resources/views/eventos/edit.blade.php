@extends('layouts.master')

@section('title')
    Editar {{$evento->designacao}}
@stop

@section('body')
    <fieldset>
        <style>
            body {
                background-color: hsla(4, 0%, 0%, 0.3);
            }
        </style>
        <div class="container formContent">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-9 col-sm-offset-2 col-md-offset-3">
                    {!! Form::model($evento, array('method'=>'patch','route'=>array('evento.update', $evento->id))) !!}
                    <fieldset>
                        <legend>Dados do Evento</legend>
                        <div class="form-group">
                            <div class="">
                                {!! Form::text('designacao',$evento->designacao , array('class'=>'form-control input-lg','id'=>'designacao', 'placeholder'=>'Designação do evento')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                {!! Form::text('tipo_evento',$evento->tipo_evento, array('class'=>'form-control input-lg', 'id'=>'tipo_evento','placeholder'=>'Tipo de evento')) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {!! Form::date('data',$evento->data, array('class'=>'form-control input-lg'))!!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {!! Form::time('hora_inicio',$evento->hora_inicio, array('class'=>'form-control input-lg', 'id'=>'hora_inicio', 'placeholder'=>'Hora de inicio')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {!! Form::time('horaF',null, array('class'=>'form-control input-lg', 'id'=>'horaF', 'placeholder'=>'Hora de Fim')) !!}
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="">
                                {!! Form::textarea('descricao',$evento->descricao,array('rows'=>'3','class'=>'form-control input-lg', 'id'=>'descricao','placeholder'=>'Descrição do evento'))!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-6 form-group">
                                {!! Form::submit('Actualizar', array('class'=>'btn btn-block btn-primary btn-lg')) !!}
                            </div>
                            <div class="col-xs-12 col-md-6 form-group">
                                {!! Form::reset('Limpar', array('class'=>'btn btn-block btn-default btn-lg')) !!}
                            </div>
                        </div>
                    </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        </div>
    </fieldset>
    </div>
@stop