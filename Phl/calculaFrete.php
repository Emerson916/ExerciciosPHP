<?php

const VALOR_PEDAGIO = 9.4;
const VALOR_KM = 6;


$origem = $_GET["cidade-origem"];
$destino = $_GET["cidade-destino"];
$distancia = $_GET["distancia"];
$pedagios = $_GET["pedagios"];

$custoPedagio = $pedagios * VALOR_PEDAGIO;
$custoKM = $distancia * VALOR_KM;

$custoViagem = $custoPedagio + $custoKM;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css" />
    <title>Document</title>
</head>

<!-- Tags para enviar textos para a tela -->

<!-- < ?php echo (Nome da Variavel)  ou  < ?=(nome da variavel) -->


<body>
    <?php
        if($custoPedagio >= 100){
    ?>
        <h1 style='color: red'> O valor total dos pedágios é: R$ <?=number_format($custoPedagio, 2, ",", ".") ?></h1>

    <?php    
        }else{
    ?>
        <h1 style='color: green'> O valor total dos pedágios é: R$ <?=number_format($custoPedagio, 2, ",", ".") ?></h1>
    <?php
        }
    ?>

    <h1> A viagem de <?= $origem ?> à <?= $destino ?> vai custar um total de <em>R$ <?=number_format($custoViagem, 2, "," , ".")  ?> </em></h1>

    <button><a href="index.php">Calcular novo Frete </a></button>
</body>
</html>