<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero = $_POST["numero"];
        $somma = 0;
        $contatore = 0;
        
        while ($contatore <= $numero){
            if ($contatore % 2 == 0){
                $somma = $somma + $contatore;
            }
            $contatore++;
        }
        echo "<h1>";
        echo "la somma totale è = ";
        echo $somma;
        echo "<h1>";
    ?>   
</body>
</html>