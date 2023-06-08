<div class="row">
    <div class="col text-center">
        <h3>Deseja eliminar o seguinte contato?</h3>

        <div class="my-4">
            <div>
                <span class="me-5">Nome: <strong><?= $contato->nome ?></strong></span>
                <span>Telefone: <strong><?= $contato->telefone  ?></strong></span>
                <span>Telefone: <strong><?= $contato->id  ?></strong></span>
            </div>
        </div>

        <a href="index.php" class="btn btn-outline-dark yes-no-width">Não</a>
        <a href="?ct=ContactsController&mt=eliminar&id=<?= $contato->id ?>&delete=yes
>" class="btn btn-outline-dark yes-no-width">Sim</a>

    </div>
</div>