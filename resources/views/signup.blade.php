@extends('layouts.baselayout')

<head>
@section('title')
    Registar
@stop

    <link rel="stylesheet" type="text/css" href="{{asset('css/one-page-wonder.css')}}">
</head>
@section('content')

    <div class="featurette" id="about">

        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    {!! Form::open( array('route'=>'user.store','role'=>'form')) !!}
                    {!! Form::hidden('role_id', 2) !!}

                    <h2>Registe-se
                        <small></small>
                    </h2>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                {!! Form::text('username', null, array('class'=>'form-control input-lg','id'=>'name', 'placeholder'=>'Informe o seu username','tabindex'=>'1')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                {!!  Form::text('email',null,array('class'=>'form-control input-lg', 'id'=>'email','placeholder'=>'Informe o seu email','tabindex'=>'2'))!!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">

                                {!! Form::password('password', array('class'=>'form-control input-lg','id'=>'password', 'placeholder'=>'Password','tabindex'=>'3' )) !!}

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">

                                {!! Form::password('password_confirmation', array('class'=>'form-control input-lg','id'=>'password', 'placeholder'=>'Confirme a Password','tabindex'=>'4')) !!}

                            </div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                {!!  Form::number('telefone',null,array('class'=>'form-control input-lg', 'id'=>'email','placeholder'=>'Informe o seu telefone','tabindex'=>'2'))!!}
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xs-4 col-sm-3 col-md-3">
                                    <span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
                        </div>

                        <div class="col-xs-8 col-sm-9 col-md-9">
                            By clicking <strong class="label label-primary">Register</strong>, you agree to the <a
                                    href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set
                            out by this site, including our Cookie Use.
                        </div>
                    </div>

                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            {!! Form::submit('Gravar', array('class'=>'btn btn-primary btn-lg btn-block','tabindex'=>'6')) !!}

                        </div>
                        <div class="col-xs-12 col-md-6">

                            {!! link_to_route('login', $title = 'Sign In',$parameters = null, $attributes = array('class'=>'btn btn-success btn-block btn-lg')) !!}

                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi,
                                aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi
                                tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi,
                                aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi
                                tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi,
                                aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi
                                tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi,
                                aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi
                                tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi,
                                aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi
                                tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi,
                                aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi
                                tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi,
                                aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi
                                tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>

        <!----Code------end----------------------------------->
    </div>
    <!-- /.container -->
@stop