<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

// modifcações no no banco
if (!empty($data)) {

    // criar contato
    if ($data["type"] === "create") {
        $name = $data["name"];
        $telefone = $data["telefone"];
        $observations = $data["observations"];

        $query = "INSERT INTO contacts(name, phone, observations) VALUES (:name, :telefone, :observation)";
        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->bindParam(":observation", $observations);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso!";
        } catch (PDOException $e) {
            //erro de conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    } else if ($data["type"] === "edit") {
        // atualizando dados
        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];
        $id = $data["id"];

        $query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations
        WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato atualizado com sucesso!";
        } catch (PDOException $e) {
            //erro de conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    } else if ($data["type"] === "delete") {
        $id = $data["id"];

        $query = "DELETE FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato excluido com sucesso!";
        } catch (PDOException $e) {
            //erro de conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }

    header("Location:" . $BASE_URL . "./../index.php");
} else {

    $id;

    if (!empty($_GET)) {
        $id = $_GET["id"];
    }
    // retorna o dado de um contato
    if (!empty($id)) {

        $query = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $contact = $stmt->fetch();
    } else {
        // retorna todos os contatos
        $contacts = [];

        $sql = "SELECT * FROM contacts";

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $contacts = $stmt->fetchAll();
    }
}

$conn = null;
