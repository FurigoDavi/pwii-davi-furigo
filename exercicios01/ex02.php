<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio02</title>
</head>
<body>
    <h2>Volume</h2>
    <form method="GET">
        Informe o comprimento:
        <input type="number" id="comprimento" name="comprimento">
        <br>
        informe a largura:
        <input type="number" id="largura" name="largura">
        <br>
        informe a altura:
        <input type="number" id="altura" name="altura">
        <br>
        <p></p>

        <input type="submit" value="Calcular">
        <input type="reset" value="Limpar">
    </form>
</body>

    <?php

        $comprimento = 0.0;
        $largura = 0.0;
        $altura = 0.0;

        $comprimento = $_GET['comprimento'];
        $largura = $_GET['largura'];
        $altura = $_GET['altura'];

        $volume = $largura * $comprimento * $altura;

        echo ("O volume é de : " . $volume);
    ?>
</html>