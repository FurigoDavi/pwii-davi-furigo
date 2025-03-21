<!DOCTYPE html>
<html>
    <style> 
    .tam_font{
        font-size:50px;
        color:white;
    } 
    body{
        background-color:gray;
    }
    </style>
<body>

        <p class = tam_font>
            <?php  
            $i = 1;

            while ($i < 6) {
            echo $i;
            echo "<br>";
            $i++;
            } 
            echo "------------- <br>";
            do{
                echo $i;
                $i++;
            } while ($i < 6);

            echo "<br>";

            for ($x = 0; $x <= 10; $x++) {
                echo "The number is: $x <br>";
              }
            ?>  
        </p>
</body>
</html>