<?php

    const UP10 = 1.10;
    const UP20 = 1.20;

    $nome = $_GET["nome"];
    $salarioAtual = $_GET["salario"];

    $aumento10 = $salarioAtual * UP10;
    $aumento20 = $salarioAtual * UP20;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($salarioAtual <= 5000){
    ?>
       <h1>O <?=$nome ?> passará a receber <?= $aumento20 ?></h1>

    <?php    
        }else{
    ?>
       <h1>O <?=$nome ?> passará a receber <?= $aumento10 ?></h1>
    <?php
        }
    ?>

    

    <button><a href="index.php">Calcular novo Aumento </a></button>
</body>
</html>