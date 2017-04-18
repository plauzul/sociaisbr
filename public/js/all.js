$(document).ready(function() {

    loadGo();

    $("body").tooltip({
        selector: '[data-toggle="tooltip"]'
    });

    $(document).on("click", ".load", function(e) {
        e.preventDefault();

        let imgData = $(this).data("img-load");

        $($(this).data("content")).html("");

        $(imgData).removeClass("hidden");

        $($(this).data("content")).load($(this).data("href"), function() {
            $(imgData).addClass("hidden");
            loadGo();
        });
    });

    $(document).on("click", "#logout", function(e) {
        e.preventDefault();

        $.post(url + "logout", {_token: token }, function(data) {
            localStorage.removeItem('userLogged');
            window.location.href = url + "login";
        });
    });

    function loadGo() {
        $(".load-go").each(function() {
            let imgData = $(this).data("img-load");
            $($(this)).load($(this).data("href"), function() {
                $(imgData).addClass("hidden");
            });
        });
    }
});
$(document).ready(function() {

    $(document).on("submit", "#loginForm", function(e) {
        e.preventDefault();

        let email = $("input[name=email_login]").val();
        let password = $("input[name=password_login]").val();

        $("#btn-login").addClass("hidden");
        $("#load-img-login").removeClass("hidden");
        $("#loginErro").addClass("hidden")

        $.post(url + "authenticate", {email: email, password: password, _token: token })
        .done(function(data) {
            $("#load-img-login").addClass("hidden");
            $("#btn-login").removeClass("hidden");
            if(data.step == "true") {
                localStorage.setItem('userLogged', JSON.stringify(data));
                window.location.href = data.redirect;
            } else if(data.step == "false") {
                $("#loginErro").removeClass("hidden").html("Nome de usuario ou senha incorretos");
            }
        })
        .fail(function(xhr, status, error) {
            $("#load-img-login").addClass("hidden");
            $("#btn-login").removeClass("hidden");
            $("#loginErro").removeClass("hidden").html("Houve algum erro desculpe-nos <br>" + error);
        });
    });

    $(document).on("submit", "#cadastreForm", function(e) {
        e.preventDefault();

        let dataForm = $(this).serialize() + "&_token=" + token;

        $.post(url + "api/users", dataForm, function(data) {
            if(data.status == "OK") {
                $("#cadastreFormSucesso").show().html("Cadastrado com sucesso!");
            } else {
                $("#cadastreFormErro").show().html("Erro ao cadastrar, reveja o formulario");
            }
        });
    });
});
$(document).ready(function() {    

    $(document).on("click", "#create-party", function(e) {
        $("#modal").iziModal({
            title: 'Crie a sua festa',
            headerColor: '#f05f40',
            zindex: 9999,
            width: 800,
            padding: 5,
            onOpening: function(modal) {
                modal.startLoading();
                $.get(url + 'create-party', function(data) {
                    $("#modal .iziModal-content").html(data);
                    modal.stopLoading();
                });
            }
        }).iziModal('open');
    });

    $(document).on("submit", "#formCreateParty", function(e) {
        e.preventDefault();
        
        let dataForm = $(this).serialize() + "&_token=" + token;
        console.log(dataForm);

        $.post(url + "api/party", dataForm)
        .done(function(data) {
            if(data.id_user) {
                $(".load-go").prepend(`
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="`+data.img+`" onerror="this.src = 'img/not-load.png'">
                            <div class="caption">
                                <h3>`+data.title+`</h3>
                                <p>`+data.description+`</p>
                                <p>
                                    <a href="" class="btn btn-primary load" role="button"  data-href="{{url('party-detail')}}" data-content=".box-content" data-img-load="#img-load">Visualizar <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                    <a href="#" class="btn btn-default pull-right" role="button"><i class="fa fa-2x fa-map-marker" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                `);
                $("#createPartyFormSucesso").removeClass("hidden").html("Festa criada com sucesso");
            } else {
                $("#createPartyFormErro").removeClass("hidden").html("Erro ao criar a festa, reveja seu formulario");
            }
        })
        .fail(function(xhr, status, error) {
            $("#createPartyFormErro").removeClass("hidden").html("Erro ao criar a festa<br>" + error);
        });
    });
});
var logged = function() {

    if(!!localStorage.getItem("userLogged") == false) {
        $("#modal").iziModal({
            title: 'Você não está mais logado, tchau',
            headerColor: '#f05f40'
        }).iziModal('open');
        setTimeout(function() {
            window.location.href = url + "login";
        }, 3000);
    }
}
$(document).ready(function() {
    let local = location.pathname;
    let positionUrlLocal = local.split("/");

    if(positionUrlLocal[1] != "" && positionUrlLocal[1] != "login") {
        setInterval(function() {
            logged();// verefico de 2 em 2 segundo se o usuario está logado
        }, 2000);
    }
});
//# sourceMappingURL=all.js.map
