<?php
    session_start();
    include_once("conexao.php");
    include_once("url.php");

    //banco
    $data = $_POST;

    if(!empty($data)) {
         //criar contato
         if($data["type"] === "create") {

            $nome_tarefa = $data["nome_tarefa"];
            $data_termino = $data["data_termino"];
            $descricao = $data["descricao"];

            $query = "INSERT INTO dados (nome_tarefa, data_termino, descricao) VALUES (:nome_tarefa, :data_termino, :descricao)";
            $stmt = $conn->prepare($query);

            $stmt->bindParam(":nome_tarefa", $nome_tarefa);
            $stmt->bindParam(":data_termino", $data_termino);
            $stmt->bindParam(":descricao", $descricao);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com sucesso";
            }
            catch(PDOException $e) {
                //erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
            }
         }
         else if($data["type"] === "edit") {

            $nome_tarefa = $data["nome_tarefa"];
            $data_termino = $data["data_termino"];
            $descricao = $data["descricao"];
            $id = $data["id"];

            $query = "UPDATE dados SET nome_tarefa = :nome_tarefa, data_termino = :data_termino, descricao = :descricao WHERE id = :id";
            $stmt = $conn->prepare($query);

            $stmt->bindParam(":nome_tarefa", $nome_tarefa);
            $stmt->bindParam(":data_termino", $data_termino);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Tarefa atualizada com sucesso";
            }
            catch(PDOException $e) {
                //erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
            }
         }
         else if($data["type"] === "delete"){
            
            $id = $data["id"];

            $query = "DELETE FROM dados WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Tarefa deletada com sucesso";
            }
            catch(PDOException $e) {
                //erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
            } 
        }

    header("location:" . $BASE_URL . "../index.php");

    }
    else{
        //exibir

        $id;
        if(!empty($_GET)) {
            $id = $_GET["id"]; 
        }

        if(!empty($id)) {
            $query = "SELECT * FROM dados WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $tarefa = $stmt->fetch();  //pegou isso tambem para o atualizar por causa do get que pega o id
        }
        else {
            $tarefas = [];

            $query = "SELECT * FROM dados";
            $stmt = $conn->prepare($query);
            $stmt->execute();
        
            $tarefas = $stmt->fetchAll();
        }
        $conn = null;

            }
   
?>