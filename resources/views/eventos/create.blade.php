@extends('layouts.master')

@section('title')
    Registo de Evento
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
                    {!! Form::open(array('route'=>'evento.store')) !!}
                    <fieldset>
                        <legend>Dados do Evento</legend>
                        <div class="form-group">
                            <div class="">
                                {!! Form::text('designacao', null, array('class'=>'form-control input-lg','id'=>'designacao', 'placeholder'=>'Designação do evento')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                {!! Form::text('tipo_evento',null, array('class'=>'form-control input-lg', 'id'=>'tipo_evento','placeholder'=>'Tipo de evento')) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {!! Form::date('data',\Carbon\Carbon::now(), array('class'=>'form-control input-lg'))!!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {!! Form::time('hora_inicio',null, array('class'=>'form-control input-lg', 'id'=>'hora_inicio', 'placeholder'=>'Hora de inicio')) !!}
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
                                {!! Form::textarea('descricao',null,array('rows'=>'3','class'=>'form-control input-lg', 'id'=>'descricao','placeholder'=>'Descrição do evento'))!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-6 form-group">
                                {!! Form::submit('Salvar', array('class'=>'btn btn-block btn-primary btn-lg')) !!}
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