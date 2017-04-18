$(document).ready(function() {
    let local = location.pathname;
    let positionUrlLocal = local.split("/");

    if(positionUrlLocal[1] != "" && positionUrlLocal[1] != "login") {
        setInterval(function() {
            logged();// verefico de 2 em 2 segundo se o usuario está logado
        }, 2000);
    }
});