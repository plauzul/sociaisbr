@extends('layouts.layout')

@section('title', 'Faça login')

@section('body')
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid bg-primary">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">Sociais BR</a>
            </div>
        </div>
    </nav>

    <section id="login" class="bg-primary clearfix" style="height: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Login</h2>
                    <hr class="light">
                </div>
            </div>
        </div>
        <div class="container col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
            <form id="loginForm">
                <div class="panel panel-default" style="padding: 10px; -webkit-box-shadow: 0px 0px 16px 3px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 16px 3px rgba(0,0,0,0.75);box-shadow: 0px 0px 16px 3px rgba(0,0,0,0.75);">
                    <div class="row">
                        <div class="form-group col-xs-12 col-lg-12 sr-input">
                            <input type="email" class="form-control" placeholder="Email" name="email_login" required/>
                        </div>
                        <div class="form-group col-xs-12 col-lg-12 sr-input">
                            <input type="password" class="form-control" placeholder="Senha" name="password_login" required/>
                        </div>
                        <div class="form-group col-xs-12 col-lg-12 text-center">
                            <button class="btn btn-danger btn-lg sr-button"  id="btn-login">Entrar</button>
                        </div>
                    </div>

                    <figure class="text-center">
                        <img src="img/load-img.gif" id="load-img-login" class="hidden" width="150">
                    </figure>
        
                    <!-- CASO DE ERRO -->
                    <div class="alert alert-danger hidden" role="alert" id="loginErro"></div>

                </div>
            </form>
        </div>
    </section>
@endsection