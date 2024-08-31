<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Paridade</title>
</head>
<body>
    
<?php

$numero = 45;
$A = 2;



if($numero % $A ==0)
{
    echo "<h2>Esse número é" .$numero. "Par.</h2>";
} else{
    echo "<h2>Esse número é " .$numero. " Impar.</h2>";
}

   
    
    


?>

</body>
</html>