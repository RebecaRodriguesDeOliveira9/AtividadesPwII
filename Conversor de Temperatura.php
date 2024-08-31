<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
</head>
<body>
    
<?php

$temperaturaCelsius = 35;

$numero1 = 9;
$numero2 = 5;
$numero3 = 32;

$Resultado;


$Resultado = $temperaturaCelsius * $numero1 / $numero2 + $numero3;

    echo "<h2>Resultado da temperatura: " .$Resultado. "</h2>";



?>


</body>
</html>