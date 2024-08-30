<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>CCalculadora de Idade</title>
</head>
<body>
    
<body>

    <form method="post">

        <label for="AnoNascimento">Digite o ano de nascimento: </label>
        <input type="numero" id="AnoNascimento" name="AnoNascimento" required><br><br>
        <label for="AnoAtual">Digite o ano atual: </label>
        <input type="numero" id="AnoAtual" name="AnoAtual" required><br><br>
        <input type="submit" value="Calcular Idade">

    </form>

    <?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $AnoNascimento = (int)$_POST['AnoNascimento'];

        $AnoAtual = (int)$_POST['AnoAtual'];
    
        $idade = $AnoAtual - $AnoNascimento;

        echo "<h2>A idade da pessoa é: " . $idade . " anos.</h2>";
    }
    ?>
</body>

</body>
</html>