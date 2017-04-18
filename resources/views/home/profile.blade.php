<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">Perfil</h1>
                    <hr class="primary">
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-3">
                        <figure>
                            @if(Auth::user()->img == "null")
                                @if(Auth::user()->sex == "man")
                                    <img src="{{asset('storage/img-users/default_man.png')}}" class="img-circle" width="200">
                                @else
                                    <img src="{{asset('storage/img-users/default_woman.png')}}" class="img-circle" width="200">
                                @endif
                            @else
                                <img src="{{asset('storage/img-users/'.Auth::user()->img)}}" class="img-circle" width="200">
                            @endif
                        </figure>
                    </div>
                    <div class="col-lg-9">
                        <h1 class="text-center">Dados Pessoais</h1>
                        <hr class="primary">
                        <pre>{{ print_r(Auth::user()) }}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>