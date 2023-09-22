<div class="container">
    <div class="row">
        <div class="col-sm">
            <a href="<?php echo $base ?>/list-clientes.php">
                <button type="button" class="btn btn-primary btn-lg">Listagem Clientes</button>
            </a>
        </div>
    </div>
    <h1>Editar Cliente</h1>
    <form method="POST" action="<?php echo $base ?>/actionEditCliente.php">
        <!-- Informações do Cliente -->
        <h2>Clientes</h2>
        <div class="mb-3">
            <label for="cnpj" class="form-label">CNPJ</label>
            <input type="text" min="14" maxlength="14" readonly minlength="14" class="form-control"
                   value="<?php echo $dados[0]->cnpj; ?>" name="cliente-cnpj">
        </div>
        <div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="cliente-nome"
                       value="<?php echo $dados[0]->nome; ?>" required>
            </div>
            <div class="mb-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cliente-cep"
                       value="<?php echo $dados[0]->cep; ?>" required>
            </div>

            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="cliente-endereco"
                       value="<?php echo $dados[0]->endereco; ?>" required>
            </div>
            <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <input type="text" class="form-control" id="numero" name="cliente-numero"
                       value="<?php echo $dados[0]->numero; ?>" required>
            </div>
            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="cliente-bairro"
                       value="<?php echo $dados[0]->bairro; ?>" required>
            </div>
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cliente-cidade"
                       value="<?php echo $dados[0]->cidade; ?>" required>
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="estado" name="cliente-estado"
                       value="<?php echo $dados[0]->estado; ?>" required>
            </div>
        </div>
        <!-- Contatos dos Clientes -->
<!--        <h2>Contatos dos Clientes</h2>-->
<!--        --><?php //foreach ($dados as $list): ?>
<!--            <div class="mb-3">-->
<!--                <label for="cpfContato" class="form-label">CPF</label>-->
<!--                <input type="text" maxlength="11" value="--><?php //echo $list->cpf ?><!--" class="form-control"-->
<!--                       id="cpfContato" name="contato-cpf" required>-->
<!--            </div>-->
<!--            <div class="mb-3">-->
<!--                <label for="emailContato" class="form-label">Email</label>-->
<!--                <input type="email" class="form-control" value="--><?php //echo $list->email_contato ?><!--" id="emailContato"-->
<!--                       name="contato-email" required>-->
<!--            </div>-->
<!--            <div>-->
<!--                <div class="mb-3">-->
<!--                    <label for="nomeContato" class="form-label">Nome</label>-->
<!--                    <input type="text" class="form-control" id="nomeContato" value="--><?php //echo $list->nome_contato?><!--"-->
<!--                           name="contato-nome" required>-->
<!--                </div>-->
<!--                <div class="mb-3">-->
<!--                    <label for="telefoneContato" class="form-label">Telefone</label>-->
<!--                    <input type="tel" class="form-control" id="telefoneContato" value="--><?php //echo $list->telefone_contato ?><!--"-->
<!--                           name="contato-telefone" required>    -->
<!--                </div>-->
<!--            </div>-->
<!--        --><?php //endforeach; ?>
        <button type="submit" id="btnContato" class="btn btn-primary">Enviar</button>
    </form>
</div>