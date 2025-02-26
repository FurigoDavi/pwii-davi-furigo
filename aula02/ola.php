<!DOCTYPE html>
<html>
    <style>
        .texto{
            color:blue
        }
    </style>
    <body>
        <p class=texto>
            <?php
            ECHO "Hello World!<br>";
            echo "Hello World!<br>";
            EcHo "Hello World!<br>";

            $nome = "Davi";
            $sobrenome = "Furigo";
            $numero = 4;

            echo "${nome} <h1> ${sobrenome} </h1>";
            echo $numero . "<p> " . $nome .
            " " . $sobrenome . "</p>";
            ?>
        </p>
    </body>
</html>