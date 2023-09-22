<div class="container">
    <h1>Formulário de Clientes</h1>
    <form method="POST" action="<?php echo $base ?>/actionAddCliente.php">
        <!-- Informações do Cliente -->
        <h2>Clientes</h2>
        <div class="mb-3">
            <label for="cnpj" class="form-label">CNPJ</label>
            <input type="text" min="14" maxlength="14" minlength="14" class="form-control" id="cnpj" name="cliente-cnpj">
        </div>
        <div id="addC" style="display: none">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="cliente-nome" required>
            </div>
            <div class="mb-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cliente-cep" required>
            </div>

            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="cliente-endereco" required>
            </div>
            <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <input type="text" class="form-control" id="numero" name="cliente-numero" required>
            </div>
            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="cliente-bairro" required>
            </div>
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cliente-cidade" required>
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="estado" name="cliente-estado" required>
            </div>

        </div>
            <button type="submit" id="btnCliente" class="btn btn-primary">Enviar</button>
    </form>
</div>