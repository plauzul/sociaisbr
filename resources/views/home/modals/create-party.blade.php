<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <form id="formCreateParty" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Titulo" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="description" placeholder="Descrição da festa" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="address" placeholder="Endereço da festa" required>
                </div>

                <div class="form-group">
                    <textarea class="form-control" rows="4" name="content" placeholder="Conteudo da festa" required></textarea>
                </div>

                <div class="form-group">
                    <span class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Adicionar Foto</span>
                        <input id="fileupload" type="file" name="img">
                    </span>
                    <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                </div>
                <button type="submit" class="btn btn-primary">Criar</button>
            </form>
            <br>

            <!-- ERRO -->
            <div class="alert alert-danger hidden" id="createPartyFormErro" role="alert"></div>
            <!-- FIM ERRO -->

            <!-- SUCESSO -->
            <div class="alert alert-success hidden" id="createPartyFormSucesso" role="alert"></div>
            <!-- FIM SUCESSO -->
        </div>
    </div>
</div>