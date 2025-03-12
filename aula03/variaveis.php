<!DOCTYPE html>
<html>
    <style>
        .texto{
            color:red;
            background-color: orange;
            }
    </style>
    <body>
    <p class="texto">
        <?php 
        $texto = "isso é um texto";
        $n1 = 2;
        $n2 =5;
        $valor = null;

        echo $texto;
        echo "<br>";
        echo gettype($texto), "<br>";
        echo gettype($n1), "<br>"; 
        echo gettype($n2), "<br>";
        echo gettype($valor),"<br>";
        ?>
    </p>
    </body>
</html>