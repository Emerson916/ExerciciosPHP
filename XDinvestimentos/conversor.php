<?php
    const DOLAR = 5.41;
    const EURO = 6.57;
 
     $reais = $_GET["valorReais"];
     $unidadeMonetaria = $_GET["unidadeMonetaria"];
 
     $convercaoDolar= $reais * DOLAR;
     $convercaoEuro= $reais * EURO;
 
     if ($unidadeMonetaria == "Dolar" ) {
         echo  "<h1> Valor total em $unidadeMonetaria: $ $convercaoDolar </h1>" ;
     } else {
         echo  "<h1> Valor total em $unidadeMonetaria: € $convercaoEuro </h1>" ;
     }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convercao</title>
</head>
<body>
    <button><a href="index.php">Fazer uma nova conversão</a></button>
</body>
</html>

