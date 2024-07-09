<?php 
    include_once("templates/header.php");
?>
   <div class="container">
    <h1 class="titulo-principal"><?= $tarefa["nome_tarefa"] ?></h1>
    <p class="bold">Data de termino:</p>
    <p><?= $tarefa["data_termino"]?></p>
    <p class="bold">Descrição da tarefa:</p>
    <p><?= $tarefa["descricao"] ?></p>
</div>
   
</body>
</html>