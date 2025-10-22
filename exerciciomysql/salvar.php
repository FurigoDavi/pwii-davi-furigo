<?php
include("conexao.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$celular = $_POST['celular'];
$email = $_POST['email'];

$sql = "INSERT INTO dados (nome, idade, cpf, endereco, celular, email) VALUES ('$nome', '$idade', '$cpf', '$endereco', '$celular', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!<br>";
    echo "<a href='listar.php'>Ver Cadastros</a>";

}
else{
    echo "Erro: " . $conn->error;
}
    $conn->close()
    ?>