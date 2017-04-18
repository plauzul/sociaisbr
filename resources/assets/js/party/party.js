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