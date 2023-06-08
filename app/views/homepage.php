<!-- search & add new -->
<div class="row align-items-center mb-3">
    <div class="col">
        <form action="index.php" method="post">
            <div class="row">
                <div class="col-auto">
                    <input type="text" class="form-control" name="text_search" id="text_search" minlength="3" maxlength="20" required>
                </div>
                <div class="col-auto">
                    <input type="submit" name="search" class="btn btn-outline-dark" value="Procurar">
                </div>
                <div class="col-auto">
                    <a href="index.php" class="btn btn-outline-dark">Ver tudo</a>
                </div>
            </div>
        </form>
    </div>

    <div class="col text-end">
        <a href="?ct=ContactsController&mt=addContact" class="btn btn-outline-dark">Adicionar contato</a>
    </div>
</div>

<!-- show contact's table -->
<div class="row">
    <div class="col">
        <?php if ($total_contacts == 0) : ?>
            <!-- no results -->
            <p class="text-center opacity-75 mt-3">Não foram encontrados contatos registrados.</p>
        <?php else : ?>
            <!-- with results -->
            <table class="table table-sm table-striped table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th width="40%">Nome</th>
                        <th width="30%">Telefone</th>
                        <th width="15%"></th>
                        <th width="15%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contacts as $contact) : ?>
                        <tr>
                            <td><?= $contact->nome ?></td>
                            <td><?= $contact->telefone ?></td>
                            <td class="text-center">
                                <a href="?ct=ContactsController&mt=editContact&id=<?= $contact->id ?>">Editar</a>
                            </td>
                            <td class="text-center">
                                <a href="?ct=ContactsController&mt=eliminar&id=<?= $contact->id ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- total results -->
            <div class="row">
                <div class="col">
                    <p>Total: <strong><?= $total_contacts ?></strong></p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>