<?php
 
    $operacao =  isset($_POST["operacao"]) ? $_POST["operacao"] : null;
    $numero1 =  isset($_POST["numero1"]) ? $_POST["numero1"] : null;
    $numero2 = isset($_POST["numero2"]) ? $_POST["numero2"] : null;



    switch($operacao){
        case "soma":
            $resultado = $numero1 + $numero2;
            break;

        case "subtracao":
            $resultado = $numero1 - $numero2;
            break;

        case "multiplicacao":
            $resultado = $numero1 * $numero2;
            break;
    
        case "divisao":
            $resultado = $numero1 / $numero2;
            break;

        default:
            $resultado = null;
            break;
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css" />
    <title>Calculadora</title>
</head>
<body>
    <div class = "input-group">
    <form method="POST" action="index.php">
        <h1>Calculadora</h1>

      
            <label for="numero1">Número_1</label>
            <input type="number" id="numero1" name="numero1" required/>
       
       
            <label for="numero2">Número_2</label>
            <input type="number" id="numero2" name="numero2" required/>
       
       
            <label for="soma">Adição</label>
            <input type="radio" id="soma" name="operacao" required value="soma"/>
       
       
            <label for="subtracao">Subtração</label>
            <input type="radio" id="subtracao" name="operacao" required value="subtracao"/>
       
        
            <label for="multiplicacao">Multiplicação</label>
            <input type="radio" id="multiplicacao" name="operacao" required value="multiplicacao"/>
       
       
            <label for="divisao">Divisão</label>
            <input type="radio" id="divisao" name="operacao" required value="divisao"/>

            <label for="resultado">Resultado </label>
            <input type="text" id="resultado" readonly value="<?=$resultado?>"/> 

        <button> Calcular </button>
        <button type="reset">limpar</button>
    </form>
    </div>
</body>
</html>

