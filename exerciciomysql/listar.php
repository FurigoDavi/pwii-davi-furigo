<?php
include("conexao.php");

$sql = "SELECT * FROM dados";
$result = $conn->query($sql);

echo "<h2>Lista de Cadastros </h2>";

if($result->num_rows > 0){
     while ($row = $result->fetch_assoc())
        echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] .
             " - idade: " . $row["idade"] . 
             " - CPF " . $row["cpf"] . "<br>";
}
else
{
    echo "Nenhum dado cadastrado.";
}

$conn->close();
?>