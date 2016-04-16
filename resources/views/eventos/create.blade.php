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
                    {!! Form::open(array('route'=>'evento.store','files' => true)) !!}
                    <fieldset>
                        <legend>Dados do Evento</legend>
                        <div class="form-group">

                            {!! Form::text('designacao', null, array('class'=>'form-control input-lg','id'=>'designacao', 'placeholder'=>'Designação do evento')) !!}

                        </div>

                        <div class="form-group">

                            {!! Form::select('tipo_evento',array('cultural'=>'Cultural','musical'=>'Musical','académico'=>'Académico','empresarial'=>'Empresarial'),null,array('class'=>'form-control input-lg', 'id'=>'tipo_evento','placeholder'=>'Tipo de evento')) !!}

                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {!! Form::file('foto',array('class'=>'form-control input-lg', 'id'=>'foto','accept'=>'image/*')) !!}
                                </div>
                            </div>

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

                            {!! Form::textarea('descricao',null,array('rows'=>'3','class'=>'form-control input-lg', 'id'=>'descricao','placeholder'=>'Descrição do local'))!!}

                        </div>


                        <legend>Dados do Local</legend>

                        <div class="form-group">

                            {!! Form::text('nome_local', null, array('class'=>'form-control input-lg','id'=>'nome_local', 'placeholder'=>'Nome do local')) !!}

                        </div>

                        <div class="form-group">
                            {!! Form::select('cidade', array('maputo'=>'Maputo'),null,array('class'=>'form-control input-lg','placeholder'=>'Cidade'))!!}
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {!! Form::text('bairro',null, array('class'=>'form-control input-lg', 'id'=>'bairro', 'placeholder'=>'Bairro')) !!}
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {!! Form::text('avenida_rua',null, array('class'=>'form-control input-lg', 'id'=>'avenida_rua', 'placeholder'=>'Avenida/Rua')) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::textarea('descricao_local',null, array('rows'=>'3','class'=>'form-control input-lg', 'id'=>'descricao_local', 'placeholder'=>'Descricao do Local')) !!}
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    {!! Form::submit('Salvar', array('class'=>'btn btn-block btn-primary btn-lg')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    {!! Form::reset('Limpar', array('class'=>'btn btn-block btn-default btn-lg')) !!}
                                </div>
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