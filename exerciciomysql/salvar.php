<?php
include("conexao.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];

$sql = "INSERT INTO dados (nome, idade, cpf) VALUES ('$nome', '$idade', '$cpf')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!<br>";
    echo "<a href='listar.php'>Ver Cadastros</a>";

}
else{
    echo "Erro: " . $conn->error;
}
    $conn->close()
    ?>