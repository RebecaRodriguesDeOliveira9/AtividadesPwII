<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Número Positivo, Negativo ou Zero</title>
</head>
<body>
    
<?php

$numero = 0;

if ($numero > 0){
    echo "<h2>È um numero Positivo.</h2>";

} elseif ($numero < 0){
echo "<h2>È um numero Negativo.</h2>";

} elseif ($numero == 0)
{
    echo "<h2>È um Zero.</h2>";
} 

?>

</body>
</html>