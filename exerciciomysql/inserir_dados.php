<?php

require "Databaseconnect.php";

// dados da tabela logins
$id_usuario = $_POST["id_usuario"] ?? '';
$usuario = $_POST["usuario"] ?? '';
$senha = $_POST["senha"] ?? '';

// dados da tabela bdpw3
$nome = $_POST["nome"] ?? '';
$idade = $_POST["idade"] ?? '';
$CPF = $_POST["CPF"] ?? '';
$endereco = $_POST["endereco"] ?? '';
$email = $_POST["email"] ?? '';
$celular = $_POST["celular"] ?? '';

function cadastrar($pdo, $id_usuario, $usuario, $senha, $nome, $idade, $CPF, $endereco, $email, $celular) {
    try {
        // Inserção na tabela logins
        $stmt1 = $pdo->prepare("INSERT INTO logins(id_usuario, usuario, senha) VALUES (:id_usuario, :usuario, :senha)");
        $stmt1->execute([
            ':id_usuario' => $id_usuario,
            ':usuario' => $usuario,
            ':senha' => $senha,
        ]);

        // Inserção na tabela bdpw3
        $stmt2 = $pdo->prepare("INSERT INTO bdpw3(nome, idade, CPF, endereco, email, celular)
                                VALUES (:nome, :idade, :CPF, :endereco, :email, :celular)");
        $stmt2->execute([
            ':nome' => $nome,
            ':idade' => $idade,
            ':CPF' => $CPF,
            ':endereco' => $endereco,
            ':email' => $email,
            ':celular' => $celular,
        ]);

        echo "Dados inseridos com sucesso <br> <a href='index.php'>Voltar</a>";
    } catch (PDOException $e) {
        echo "Erro ao inserir: " . $e->getMessage();
    }
}

?>
