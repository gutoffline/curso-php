<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>
<body>
    <h1>Cadastro de clientes</h1>
    <?php
    $nome = "Guto";
    $idade = 36;
    $fumante = false;
    echo "<p>Id cliente: $nome <br>";
    echo "Idade cliente: $idade <br>";
    echo "Fumante: $fumante </p>";
    /* 
    OPERADORES ARITMÉTICOS
    */
    echo 20*3;
    echo "<br>";
    /* 
    OPERADORES RELACIONAIS
    */
    echo 20>10;
    echo "<br>";
    /* 
    OPERADORES LÓGICOS
    */
    echo "operadores lógicos<br>";
    $fumante = true;
    echo !$fumante;

    $idade = 75;
    if($idade>=18 && $fumante == false){
        echo "<p>Sua idade é $idade </p>";
        echo "<p>Pode entrar na festa</p>";
    }else if($idade >= 70){
        echo "<p>Pessoas acima de 70 anos não podem entrar na festa</p>";
    }else{
        echo "Você não pode entrar";
    }

    $nota = 3;
    if($nota >= 8){
        echo "<p>Aprovado</p>";
    }else if($nota >= 5){
        echo "<p>Recuperação</p>";
    }else{
        echo "<p>Reprovado</p>";
    }


    $idade = 15;
    echo ($idade>=18) ? "pode entrar" : "rejeitado";

    ?>
</body>
</html>