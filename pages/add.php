<?php $render('header'); ?>

<h2>Adicionar Novo Usuário</h2>


<div class="container">
    <h1>Formulário de Clientes</h1>
    <form method="POST" action="<?php echo $base ?>/novo">
        <!-- Informações do Cliente -->
        <h2>Clientes</h2>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" >
        </div>
        <div class="mb-3">
            <label for="cnpj" class="form-label">CNPJ</label>
            <input type="text" class="form-control" id="cnpj" name="cnpj">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" >
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Número</label>
            <input type="text" class="form-control" id="numero" name="numero" >
        </div>
        <div class="mb-3">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" >
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" >
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" class="form-control" id="estado" name="estado" >
        </div>
        <div class="mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" >
        </div>

        <!-- Contatos dos Clientes -->
        <h2>Contatos dos Clientes</h2>
        <div class="mb-3">
            <label for="nomeContato" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nomeContato" name="nomeContato" >
        </div>
        <div class="mb-3">
            <label for="emailContato" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailContato" name="emailContato" >
        </div>
        <div class="mb-3">
            <label for="telefoneContato" class="form-label">Telefone</label>
            <input type="tel" class="form-control" id="telefoneContato" name="telefoneContato" >
        </div>
        <div class="mb-3">
            <label for="cpfContato" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpfContato" name="cpfContato" >
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<?php $render('footer'); ?>
