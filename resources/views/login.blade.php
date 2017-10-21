@extends('layouts.basic')

@section('content')

    <div class="row">

        <div class="col-xs-2 col-sm-3 col-md-4 col-lg-4">
        </div>

        <div class="col-xs-10 col-sm-9 col-md-4 col-lg-4">

            <div class="row">


                <div class="col-xs-10 col-sm-9 col-md-12 col-lg-10">

                    @if(Session::has('message'))
                
                    <div class="alert alert-danger alert-dismissible center margin_top_textsinguppage" role="alert">
                        {{Session::get('message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    @endif  

                    <div class="box">

                        <div class="text_singuppage margin_top_textsinguppage ">

                            <img src="{{ asset('images/BigLogo.png') }}" class="logo_radius" alt="Logo Centre Moral i Cultural del Poblenou" width="40%">

                        </div>

                        <div class="singupform">

                            <form method="post" action="{{route('loginPost')}}">
                                {{csrf_field()}}

                                <div class="form-group">
                                    <input type="text" class="form-control" name="name_user" placeholder="Administrador">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password_user" placeholder="Contrasenya">
                                </div>
                                <button type="submit" class="form-control btn session-button">Iniciar la sesió</button>
                            </form>
                          
                        </div>
        
                    </div>

                </div>      

            </div>

        </div>

    </div>


@stop