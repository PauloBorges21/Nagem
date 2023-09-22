<div class="container">

        <div class="row">
            <div class="col-sm">
                <a href="<?php echo $base ?>/list-clientes.php">
                    <button type="button" class="btn btn-primary btn-lg">Listagem Clientes</button>
                </a>
            </div>
        </div>

    <h1>Formulário de Contato</h1>
    <form method="POST" id="formC" action="<?php echo $base ?>/actionAddContato.php">
        <!-- Informações do Cliente -->
        <p>Cliente</p>
        <div class="mb-3">
            <label for="cnpj" class="form-label">CNPJ</label>
            <input type="text" min="14" maxlength="14" minlength="14" readonly disabled
                   value="<?php echo $cnpj->cnpj ?>" class="form-control" name="cnpj">
            <input type="hidden" readonly
                   value="<?php echo $_GET['proc'] ?>" class="form-control" name="proc">
        </div>
        <!-- Contatos dos Clientes -->
        <h2>Contatos dos Clientes</h2>
        <div class="mb-3">
            <label for="cpfContato" class="form-label">CPF</label>
            <input type="text" maxlength="11" class="form-control" id="cpfContato" name="contato-cpf" required>
        </div>
        <div class="mb-3">
            <label for="emailContato" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailContato" name="contato-email" required>
        </div>
        <div id="addCont" style="display: none">
            <div class="mb-3">
                <label for="nomeContato" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nomeContato" name="contato-nome" required>
            </div>
            <div class="mb-3">
                <label for="telefoneContato" class="form-label">Telefone</label>
                <input type="tel" class="form-control" id="telefoneContato" name="contato-telefone" required>
            </div>
        </div>
        <button type="submit" id="btnContato" class="btn btn-primary">Enviar</button>
</div>
</form>
