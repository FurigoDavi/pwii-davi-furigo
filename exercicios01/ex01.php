<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>
<body>
    <h2>Calculadora de Consumo</h2>
    <form method="GET">
        Informe a distancia percorrida em KM:
        <input type="number" id="km" name="km">
        <br>
        informe a quantia de combustivel em L:
        <input type="number" id="comb" name="comb">
        <br>

        <p></p>

        <input type="submit" value="Calcular">
        <input type="reset" value="Limpar">
    </form>
</body>

    <?php

        $km = 0.0;
        $comb = 0.0;

        $km = $_GET['km'];
        $comb = $_GET['comb'];

        echo ("O consumo médio de combustivel é de: " . $km / $comb . " Litros" );
    ?>
</html>