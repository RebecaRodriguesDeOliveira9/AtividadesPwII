<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Faixa Etária</title>
</head>
<body>
    
<?php

$idade = 48;

if ($idade >= 0 && $idade < 13){
    echo "È uma criança.";
} elseif ($idade >= 13 && $idade <= 17){
echo "È uma Adolescente.";
} elseif ($idade >= 18 && $idade <= 64){
    echo "È uma Adulto.";
} elseif ($idade >= 65){
    echo "È uma Idoso.";
}

?>

</body>
</html>