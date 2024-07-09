<?php 
    include_once("templates/header.php")
?>

    <main>
        <div class="conteiner">
            <?php if(isset($printMsg) && $printMsg != ''): ?>
                <p id="msg"><?= $printMsg ?></p>
            <?php endif; ?>

            <h1 class="titulo-principal">Minhas tarefas</h1>

            <?php if(count($tarefas) > 0): ?>
            <table class="table">
                <thead>
                    <tr class="isso2">
                        <th scope="col">ID</t>
                        <th scope="col">Nome da tarefa</th>
                        <th scope="col">Data de termino</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($tarefas as $tarefa): ?>
                        <tr class="isso">
                            <td scope="row" class="col-id"><?= $tarefa["id"] ?></td>
                            <td scope="row"><?= $tarefa["nome_tarefa"] ?></td>
                            <td scope="row"><?= $tarefa["data_termino"] ?></td>
                            <td class="actions">
                                <a href="<?= $BASE_URL ?>mostra.php?id=<?= $tarefa['id'] ?>"> <i class="fas fa-eye check-icon"></i></a>
                                <a href="<?= $BASE_URL ?>editar.php?id=<?= $tarefa['id'] ?>"><i class="far fa-edit edit-icon"></i></a>

                                <form class="delete-form" action="<?= $BASE_URL ?>config/processamento.php" method="POST">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="hidden" name="id" value="<?= $tarefa["id"] ?>">
                                    <button class="delete-btn" type="submit"><div class="i fas fa-times delete icon"></div></button>
                                </form>
                            </td>
                        </tr>   
                    <?php endforeach; ?>
                </tbody>

            </table>
            <?php else: ?>

            <p id="empty-list-text">Ainda não há contatos na sua agenda, 
                <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>
            </p>

            <?php endif; ?>
        </div>
    </main>
    
</body>
</html>
