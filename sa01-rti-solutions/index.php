<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css" />
    <title>Calcular Frete</title>
</head>
<body>
    <!-- Coloca o formulário -->
<form method="GET" action="calculaFrete.php">
    <h1> Calcular Frete</h1>
    <div class="input-group">
        <label for="origem">Cidade de Origem</label>
        <input type="text" id="origem" name="cidade-origem" required> </input>
    </div>

    <div class="input-group">
        <label for="destino">Cidade de Destino</label>
        <input type="text" id="destino" name="cidade-destino" required> </input>
    </div>

    <div class="input-group">
        <label for="distancia">Distância em Km</label>
        <input type="number" id="distancia" name="distancia" min="0" required> </input>
    </div>

    <div class="input-group">
        <label for="pedagios">Qtde de Pedágios</label>
        <input type="number" id="pedagios" name="pedagios" min="0" required> </input>
    </div>

    <button>Calcular</button>
    <button type="reset"> Limpar </button>

</form>
   
</body>
</html>