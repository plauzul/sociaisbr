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