<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css"/>
    <title>Conta de Luz</title>
</head>
<body>
    <form method="GET" action="contaDeLuz.php">
        <h1>Calculo - Conta de Luz</h1>

        <div class="input-group">
            <label for="nome">Nome (Completo)</label>
            <input type="text" id="nome" name="nome" required/>
        </div>

        <div class="input-group">
            <label for="rua">Rua : </label>
            <input type="text" id="rua" name="rua" required/>
        </div>
    
        <div class="input-group">
            <label for="numeroDaCasa">N° da Casa</label>
            <input type="number" id="numeroDaCasa" name="numeroDaCasa" required min="0"/>
        </div>

        <div class="input-group">
            <label for="consumo">Consumo de luz (Kwh) :</label>
            <input type="number" id="consumo" name="consumo" required min="0"/>
        </div>

        <button>Calcular</button>
         <button type="reset"> Limpar </button>


    </form>
</body>
</html>