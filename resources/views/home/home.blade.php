@extends('layouts.layout')

@section('title', 'Sociais BR - Home')

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
                <a class="navbar-brand load" href="" data-href="{{url('initial')}}" data-content=".box-content" data-img-load="#img-load">Sociais BR</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="load" href="#" data-href="{{url('party')}}" data-content=".box-content" data-img-load="#img-load"><i class="fa fa-2x fa-flag-o" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Festas"></i></a>
                    </li>
                    <li>
                        <a class="load" href="" data-href="{{url('now')}}" data-content=".box-content" data-img-load="#img-load"><i class="fa fa-2x fa-binoculars" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="O que está acontecendo"></i></a>
                    </li>
                    <li>
                        <a id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="cursor: pointer">
                            <i class="fa fa-2x fa-globe" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Notificações"></i>
                            <span class="badge">4</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li><a class="load" href="" data-href="{{url('notifications')}}" data-content=".box-content" data-img-load="#img-load">Notification1</a></li>
                            <li><a class="load" href="" data-href="{{url('notifications')}}" data-content=".box-content" data-img-load="#img-load">Notification2</a></li>
                            <li><a class="load" href="" data-href="{{url('notifications')}}" data-content=".box-content" data-img-load="#img-load">Notification3</a></li>
                            <li><a class="load" href="" data-href="{{url('notifications')}}" data-content=".box-content" data-img-load="#img-load">Notification4</a></li>
                        </ul>
                    </li>
                    <li>
                        <a id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="cursor: pointer">
                            @if(Auth::user()->img == "null")
                                @if(Auth::user()->sex == "man")
                                    <img src="{{asset('storage/img-users/default_man.png')}}" class="img-circle" width="28">
                                @else
                                    <img src="{{asset('storage/img-users/default_woman.png')}}" class="img-circle" width="28">
                                @endif
                            @else
                                <img src="{{asset('storage/img-users/'.Auth::user()->img)}}" class="img-circle" width="28">
                            @endif
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a class="load" href="" data-href="{{url('profile')}}" data-content=".box-content" data-img-load="#img-load">Perfi</a></li>
                            <li><a class="load" href="" data-href="{{url('events')}}" data-content=".box-content" data-img-load="#img-load">Eventos</a></li>
                            <li><a class="load" href="" data-href="{{url('settings')}}" data-content=".box-content" data-img-load="#img-load">Configurações</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="" id="logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <figure>
        <center><img src="img/load-img.gif" class="img-responsive hidden" id="img-load"></center>
    </figure>
    
    <section class="box-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2 class="text-center">Bem-Vindo</h2>
                            <hr class="primary">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="modal"></div>
@endsection