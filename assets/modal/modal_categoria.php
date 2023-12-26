<!-- Modal Cadastro Categoria  -->
<div class="modal fade" id="ModalCadastro" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <img src="../../assets/categoria/categoria_icon.png" alt="Icone Categoria">
                <h1 class="modal-title ms-3 fs-5" id="exampleModalLabel">Cadastrar Nova Categoria</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="criar.php" method="post">
                    <div class='container'>
                        <div class='row'>
                            <div class='col-12 col-md-8'>
                                <label for="nome" class='form-label'>Nome:</label>
                                <input type="text" class='form-control' name="nome" placeholder="Insira o nome da categoria">
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <input type="submit" value="Salvar" class="btn btn-primary " id="button"></input>
            </div>
            </form>
        </div>
    </div>
</div>



<!-- Modal Editar Categoria  -->
<div class="modal fade" id="ModalEditar" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <img src="../../assets/categoria/categoria_icon.png" alt="Icone Categoria">
                <h1 class="modal-title ms-3 fs-5" id="exampleModalLabel">Editar Categoria</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="editar.php" method="post">
                    <div class='container'>
                        <div class='row'>
                            <div class='col-12 col-md-4'>
                                <label for="id" class='form-label'>ID:</label>
                                <input type="text" class='form-control' name="id" value='Aqui vai o valor do ID' readonly>
                            </div>
                            <div class='col-12 col-md-8'>
                                <label for="nome" class='form-label'>Nome:</label>
                                <input type="text" class='form-control' name="nome" value='Aqui vai o valor do nome'>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <input type="submit" value="Salvar" class="btn btn-primary " id="button"></input>
            </div>
            </form>
        </div>
    </div>
</div>