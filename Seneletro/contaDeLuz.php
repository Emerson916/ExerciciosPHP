<?php

$nome = $_GET["nome"];
$endereco = $_GET["rua"];
$numero = $_GET["numeroDaCasa"];
$consumo = $_GET["consumo"];
$mensagem = "(Parabéns por economizar!)";

const ALTO_CONSUMO = 0.42;
const BAIXO_CONSUMO = 0.32;

$altoConsumo = $consumo + ALTO_CONSUMO;
$baixoConsumo = $consumo + BAIXO_CONSUMO;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css" />
    <title>Calculo - Conta de Luz</title>
</head>

<body>

<h1>Conta de Luz de <?= $nome ?></h1>
        <form>
            <h1> Endereço:<?= $endereco ?>, <?= $numero?></h1>
            <?php
                if($consumo > 120){
            ?>
                <h1 style="color: red;">Consumo: <?= $consumo ?> Kwh</h1>
            <?php
                }else{
            ?>
                <h1 style="color: blue;">Consumo: <?= $consumo ?> <?= $mensagem ?></h1>
            <?php
                }
            ?>
            <?php
                if($consumo > 120){
            ?>
                <h1>Valor a pagar: R$<?= $altoConsumo ?></h1>
            <?php
            }else{
            ?>
                <h1>Valor a pagar: R$<?= $baixoConsumo ?></h1>
            <?php
                }
            ?>
        </form>
    <button><a href="index.php">Calcular nova conta </a></button>
</body>
</html>