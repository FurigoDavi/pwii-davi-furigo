<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio03</title>
</head>
<body>
    <h2>Parcelas</h2>
    <form method="GET">
        Informe o valor:
        <input type="number" id="valor" name="valor">
        <br>
        <p></p>

        <input type="submit" value="Calcular">
        <input type="reset" value="Limpar">
    </form>
</body>

    <?php

        $valor = 0.0;

        $valor = $_GET['valor'];

        $porcentagem = 0.16 * $valor + $valor;
        $parcela = $porcentagem / 10;

        echo "Cada parcela será de: R$ " . number_format($parcela, 2, ',', '.') . "<br>";


        echo "O valor total será de: R$ " . number_format($porcentagem, 2, ',', '.');
    ?>
</html>