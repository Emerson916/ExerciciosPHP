<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form method="POST" action="index.php">
        <h1>Calculadora</h1>

        <div>
            <label for="numero1">Número 1</label>
            <input type="number" id="numero1" name="numero1" required/>
        </div>

        <div>
            <label for="numero2">Número 2</label>
            <input type="number" id="numero2" name="numero2" required/>
        </div>

        <div>
        <label for="mais">Adição (+)</label>
            <input type="radio" id="mais" name="operacao" required/>
        </div>

        <label for="menos">Subtração (-)</label>
            <input type="radio" id="menos" name="operacao" required/>
        </div>

        <label for="vezes">Multiplicação (x)</label>
            <input type="radio" id="vezes" name="operacao" required/>
        </div>

        <label for="dividir">Divisão (/)</label>
            <input type="radio" id="dividir" name="operacao" required/>
        </div>

        <button> Calcular </button>
        <button type="reset"> limpar </button>
    </form>
</body>
</html>