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
        $n = 6;

        if ($n >= 4 ) {
            echo $n, " é maior ou igual a 4 + uma aleração quase plausivel";
        }
        $n1 = 3;
        $n2 = 4;
        
        $result = ($n1%$n2)%2;

        if ($result == 1) {
            echo "<br>" , $result, "quociente ímpar de novo" ;
        } else {
            echo "<br>", $result, "quociente par";
        }
        ?>
    </p>
    </body>
</html>