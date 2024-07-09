<?php 
    include_once("templates/header.php")
?>
  <main>
    <div class="containercriar">
        <h1 class="titulo-principal">Adicionar tarefa</h1>

        <form class="create-form" action="<?= $BASE_URL ?>config/processamento.php" method="POST">

            <input type="hidden" name="type" value="create">

            <div class="form-group">
                <label for="nome_tarefa">Nome da tarefa:</label>
                <input type="text" class="form-control" id="nome_tarefa" name="nome_tarefa" placeholder="Digite o nome da tarefa" required>
            </div>

            <div class="form-group">
                <label for="data_termino">Data de conclusão:</label>
                <input type="text" class="form-control" id="data_termino" name="data_termino" placeholder="Digite a data de termino" required>
            </div>

            <div class="form-group">
                <label for="descricao">Observacões:</label>
                <textarea type="text" class="form-control" id="descricao" name="descricao" placeholder="Insira a descrição" rows="3"></textarea>
            </div>

            <button type="submit" class="btc">Adicionar</button>
        </form>
    </div>
   </main>
</body>
</html>
