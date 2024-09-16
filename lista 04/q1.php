<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num1" placeholder="Número 1" required>
        <input type="number" name="num2" placeholder="Número 2" required>
        <select name="operation">
            <option value="add">Somar</option>
            <option value="subtract">Subtrair</option>
            <option value="multiply">Multiplicar</option>
            <option value="divide">Dividir</option>
        </select>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacao = $_POST['operation'];

        switch ($operacao) {
            case 'add': $resultado = $num1 + $num2; break;
            case 'subtract': $resultado = $num1 - $num2; break;
            case 'multiply': $resultado = $num1 * $num2; break;
            case 'divide': $resultado = $num2 != 0 ? $num1 / $num2 : "Erro: Divisão por zero"; break;
        }
        
        echo "Resultado: $resultado";
    }
    ?>
</body>
</html>
