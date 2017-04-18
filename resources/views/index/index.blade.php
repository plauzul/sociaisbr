@extends('layouts.layout')

@section('title', 'Sociais BR')

@section('body')
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Sociais BR</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#sobre">Sobre</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#como-funciona">Como Funciona</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#cadastre">Cadastre</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#login">login</a>
                    </li>
                    @if(Auth::check())
                        <li>
                            <a href="{{url('home')}}">
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
                        </li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Sociais BR</h1>
                <hr>
                <h3>Venha curtir com a gente</h3>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="sobre">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Cansado de ficar final de semana só?</h2>
                    <hr class="light">
                    <p class="text-faded">
                        Certo cansando de ficar final de semana só? sem nada para fazer, agora essa sua angustia chegou ao fim o Sociais BR chegou para você poder finalmente, sem à ajuda de niguem conseguir encontrar uma festar e poder se diverti.
                        Encontre festas de todos os tipos para todos os gostos, de festas pagas e vips, a festas gratis e livres, aproveite e encontre também eventos que ocorrem ao redor, ou melhor pelo Brasil todo, pois é, isso é real isso é Sociais BR
                        e agora você pode transforma seus finais de semana, conhecer novas pessoas, novos caminhos chega de ser sempre daquele jeito, venha para o Sociais BR e faça tudo acontecer de novo!
                    </p>
                    <a href="#como-funciona" class="page-scroll btn btn-default btn-xl sr-button">Começar!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="como-funciona">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Como Funciona</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="service-box">
                                <i class="fa fa-4x fa-search text-primary sr-icons"></i>
                                <h3>Pesquise e Consulte</h3>
                                <p class="text-muted">
                                    Pesquise festas mais perto, e veja qual delas você curte!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="service-box">
                                <i class="fa fa-4x fa-map-marker text-primary sr-icons"></i>
                                <h3>Ache a festa mais próxima</h3>
                                <p class="text-muted">
                                    Com nosso sistema inteligente, podemos criar uma rota de onde você está até a festa mais proxima.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="service-box">
                                <i class="fa fa-4x fa-money text-primary sr-icons"></i>
                                <h3>Gratuito!</h3>
                                <p class="text-muted">
                                    E o melhor de tudo, o Sociais BR é totalmente gratuíto.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="service-box">
                                <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                                <h3>Feito com amor</h3>
                                <p class="text-muted">
                                    Fizemos o Sociais BR com todo o cuidado, para que sejá realmente util para você.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary clearfix" id="cadastre">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Cadastre</h2>
                    <hr class="light">
                </div>
            </div>
        </div>
        <div class="container col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
            <form id="cadastreForm" name="cadastreForm" enctype="multipart/form-data">
                <div class="panel panel-default" style="padding: 10px; -webkit-box-shadow: 0px 0px 16px 3px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 16px 3px rgba(0,0,0,0.75);box-shadow: 0px 0px 16px 3px rgba(0,0,0,0.75);">
                    <div class="row">
                        <div class="form-group col-xs-12 col-lg-12 text-center">
                            <h2 class="text-black">Dados Pessoais</h2>
                        </div>
                        <div class="form-group col-xs-6 col-lg-6 sr-input">
                            <input type="text" class="form-control" placeholder="Primeiro Nome" name="first_name" required>
                        </div>
                        <div class="form-group col-xs-6 col-lg-6 sr-input">
                            <input type="text" class="form-control" placeholder="Segundo Nome" name="second_name" required>
                        </div>
                        <div class="form-group col-xs-12 col-lg-12 sr-input">
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>                        
                        <div class="form-group col-xs-12 col-lg-12 sr-input">
                            <input type="password" class="form-control" placeholder="Senha" name="password" required>
                        </div>
                        <div class="form-group col-xs-12 col-lg-12 sr-input">
                            <select class="form-control" name="state" required>
                                <option value="" selected="">Selecione o Estado</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="GO">Goiás</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraiba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí­</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SP">São Paulo</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                        <div class="form-group col-xs-12 col-lg-12 sr-input">
                            <h5 class="text-black">Sexo:</h5>
                            <div class="col-xs-3"><input type="radio" name="sex" value="man" checked><span class="text-black">Masculino</span></div>
                            <div class="col-xs-3"><input type="radio" name="sex" value="woman"><span class="text-black">Feminino</span></div>
                        </div>
                        <div class="form-group col-xs-12 col-lg-12 text-center">
                            <button class="btn btn-danger btn-lg sr-button">Cadastrar</button>
                        </div>
                    </div>

                    <!-- ERRO -->
                    <div class="alert alert-danger" id="cadastreFormErro" style="display: none;" role="alert"></div>
                    <!-- FIM ERRO -->

                    <!-- SUCESSO -->
                    <div class="alert alert-success" id="cadastreFormSucesso" style="display: none;" role="alert"></div>
                    <!-- FIM SUCESSO -->

                </div>
            </form>
        </div>
    </section>

    <!--<aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Porque perdes tempo, ande começe a festejar logo!</h2>
                <a href="#login" class="btn btn-default btn-xl sr-button page-scroll">login!</a>
            </div>
        </div>
    </aside>-->

    <section id="login" class="bg-dark clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Login</h2>
                    <hr class="light">
                </div>
            </div>
        </div>
        <div class="container col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
            <form id="loginForm" method="post">
                <div class="panel panel-default" style="padding: 10px; -webkit-box-shadow: 0px 0px 16px 3px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 16px 3px rgba(0,0,0,0.75);box-shadow: 0px 0px 16px 3px rgba(0,0,0,0.75);">
                    <div class="row">
                        <div class="form-group col-xs-12 col-lg-12 sr-input">
                            <input type="email" class="form-control" placeholder="Email" name="email_login" required/>
                        </div>
                        <div class="form-group col-xs-12 col-lg-12 sr-input">
                            <input type="password" class="form-control" placeholder="Senha" name="password_login" required/>
                        </div>
                        <div class="form-group col-xs-12 col-lg-12 text-center">
                            <button class="btn btn-danger btn-lg sr-button" id="btn-login">Entrar</button>
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
