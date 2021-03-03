<?php

    $nome = $_GET["nome"];
    $salarioAtual = $_GET["salario"];

    $aumento10 = $salarioAtual * 0.10;
    $aumento20 = $salarioAtual * 0.20
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
        if($salarioAtual == 5000){
    ?>
       <h1>O <?=$nome ?> passsará a receber <?= $aumento10 ?></h1>

    <?php    
        }else{
    ?>
       <h1>O <?=$nome ?> passsará a receber <?= $aumento10 ?></h1>
    <?php
        }
    ?>

    

    <button><a href="index.php">Calcular novo Frete </a></button>
</body>
</html>