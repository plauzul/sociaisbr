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