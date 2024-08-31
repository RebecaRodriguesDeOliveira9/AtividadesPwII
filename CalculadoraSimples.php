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

$operacao = divisão; //Escreva o nome da operação para funcionar!


if ($operacao == "soma") {

    $resultado = $numero1 + $numero2;

    echo "<h2>O resultado da soma é: </h2>" . $resultado;

} elseif ($operacao == "subtração") {

    $resultado = $numero1 - $numero2;

    echo "<h2>O resultado da subtração é: </h2>" . $resultado;

} elseif ($operacao == "multiplicação") {

    $resultado = $numero1 * $numero2;

    echo "<h2>O resultado da multiplicação é: </h2>" . $resultado;

} elseif ($operacao == "divisão") {

    if ($numero2 != 0) {

        $resultado = $numero1 / $numero2;

        echo "<h2>O resultado da divisão é: </h2>" . $resultado;

    } else {
        echo "<h2>Erro: divisão por zero não é permitida.</h2>";
    }
} else {
    echo "<h2>Operação inválida.</h2>";
}
?>
    
</body>
</html>