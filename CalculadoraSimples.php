<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculadora simples</title>
</head>
<body>

<?php


$numero1 = 10; 

$numero2 = 55;  

$operacao ; 


if ($operacao == "soma") {

    $resultado = $numero1 + $numero2;

    echo "O resultado da soma é: " . $resultado;

} elseif ($operacao == "subtração") {

    $resultado = $numero1 - $numero2;

    echo "O resultado da subtração é: " . $resultado;

} elseif ($operacao == "multiplicação") {

    $resultado = $numero1 * $numero2;

    echo "O resultado da multiplicação é: " . $resultado;

} elseif ($operacao == "divisão") {

    if ($numero2 != 0) {

        $resultado = $numero1 / $numero2;

        echo "O resultado da divisão é: " . $resultado;

    } else {
        echo "Erro: divisão por zero não é permitida.";
    }
} else {
    echo "Operação inválida.";
}
?>
    
</body>
</html>