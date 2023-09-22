<?php
require 'autoload.php';
require 'config.php';
$l = new Listagem($pdo);
$listClientes = $l->getlistC();
?>
<section class="secdash">
    <div class="container">
        <a href="<?php echo $base ?>/">
            <div class="btn btn-primary">Cadastro Cliente</div>
        </a>
        <div class="secdash__table">
            <h1 class="secdash__table__title">Listagem de Clientes</h1>
            <div class="table-responsive">
                <table class="stripe row-border order-column listagem-tabela">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cnpj</th>
                        <th>Endereço</th>
                        <th>Estado</th>
                        <th>Cep</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($listClientes as $item) { ?>
                        <tr>
                            <!--Nome  -->
                            <td><?php echo $item->nome ?></td>
                            <!--cnpj  -->
                            <td class="font-weight-bold"><?php echo $item->cnpj ?></td>

                            <!-- endereco -->
                            <td class="font-weight-bold"><?php echo $item->endereco ?></td>

                            <!-- estado -->
                            <td class="font-weight-bold"><?php echo $item->estado ?></td>
                            <!-- cep -->
                            <td class="font-weight-bold"><?php echo $item->cep ?></td>
                            <!-- Ações -->
                            <td class="font-weight-bold">
                                <a target="_blank"
                                   href="<?php echo $base ?>/adicionar-contato?proc=<?php echo $item->id ?>">
                                    <div class="btn btn-outline-success">Adicionar Contato</div>
                                </a>
                                <a target="_blank"
                                   href="<?php echo $base ?>/editar-contato?proc=<?php echo $item->id ?>">
                                    <div class="btn btn-outline-warning">Editar Cliente</div>
                                </a>
                                <a target="_blank"
                                   href="<?php echo $base ?>/desativar-contato?proc=<?php echo $item->id ?>">
                                    <div class="btn btn-outline-danger">Desativa Cliente</div>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
