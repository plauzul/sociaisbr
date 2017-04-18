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