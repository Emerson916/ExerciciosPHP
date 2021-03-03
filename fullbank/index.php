<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css"/>
    <title>Aumento</title>
</head>
<body>
    <!-- Para calcular frete -->

    <form>
        <h1>Calculo de aumento salarial</h1>
        <div class="input-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required/>
        </div>
    
        <div class="input-group">
            <label for="salario">Salário atual </label>
            <input type="number" id="salario" name="salario" required min="0"/>
        </div>

       <button>Enviar</button>
        
       <button type="reset">Limpar dados</button>
    
    </form>
</body>
</html>