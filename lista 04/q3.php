<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantidade = isset($_POST['quantidade']) ? (int)$_POST['quantidade'] : 0;
    $numeros = isset($_POST['numeros']) ? explode(",", $_POST['numeros']) : [];

    function separarParesImpares($array) {
        $pares = [];
        $impares = [];
        foreach ($array as $numero) {
            if ($numero % 2 == 0) {
                $pares[] = $numero;
            } else {
                $impares[] = $numero;
            }
        }
        return [$pares, $impares];
    }

    list($pares, $impares) = separarParesImpares($numeros);
    
    $pares_string = implode(", ", $pares);
    $impares_string = implode(", ", $impares);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pares e Ímpares</title>
</head>
<body>
    <h1>Separar Números Pares e Ímpares</h1>
    <form method="POST" action="pares_impares.php">
        <label for="quantidade">Quantos números você deseja inserir?</label><br>
        <input type="number" id="quantidade" name="quantidade" min="1" required><br><br>
        <label for="numeros">Digite os números separados por vírgula:</label><br>
        <input type="text" id="numeros" name="numeros" placeholder="Ex: 1, 2, 3, 4, 5" required><br><br>
        <input type="submit" value="Separar Números">
    </form>

    <?php if (isset($pares_string) && isset($impares_string)): ?>
        <h2>Números Pares:</h2>
        <p><?php echo htmlspecialchars($pares_string); ?></p>
        <h2>Números Ímpares:</h2>
        <p><?php echo htmlspecialchars($impares_string); ?></p>
    <?php endif; ?>
</body>
</html>


