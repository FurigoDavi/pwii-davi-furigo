<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio03</title>
</head>
<body>
    <h2>Area do trapezio</h2>
    <form method="GET">
        Informe a base maior:
        <input type="number" id="basemaior" name="basemaior">
        <br>
        informe a base menor:
        <input type="number" id="basemenor" name="basemenor">
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

        $basemaior = 0.0;
        $basemenor = 0.0;
        $altura = 0.0;

        $basemaior = $_GET['basemaior'];
        $basemenor = $_GET['basemenor'];
        $altura = $_GET['altura'];

        $area = ($basemaior + $basemenor) * $altura / 2;

        echo ("A area é de : " . $area);
    ?>
</html>