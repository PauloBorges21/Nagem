<?php

require 'autoload.php';
require 'config.php';
require 'partials/header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <a href="<?php echo $base ?>/list-clientes.php">
                    <button type="button" class="btn btn-primary btn-lg">Listagem Clientes</button>
                </a>
            </div>
        </div>
    </div>


<?php

require 'partials/formularioCliente.php';

require 'partials/footer.php';

