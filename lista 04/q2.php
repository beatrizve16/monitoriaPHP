<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = isset($_POST['numeros']) ? $_POST['numeros'] : '';
    $array_numeros = explode(",", $numeros);
    
    function removeDuplicatas($array) {
        $novo_array = [];
        foreach ($array as $numero) {
            if (!in_array($numero, $novo_array)) {
                $novo_array[] = $numero;
            }
        }
        return $novo_array;
    }

    $resultado = removeDuplicatas($array_numeros);
    $resultado_string = implode(", ", $resultado);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover Duplicatas</title>
</head>
<body>
    <h1>Remover Duplicatas de um Array</h1>
    <form method="POST" action="remove_duplicatas.php">
        <label for="numeros">Digite os números separados por vírgula:</label><br>
        <input type="text" id="numeros" name="numeros" placeholder="Ex: 1, 2, 3, 4, 4, 5"><br><br>
        <input type="submit" value="Remover Duplicatas">
    </form>

    <?php if (isset($resultado_string)): ?>
        <h2>Array sem duplicatas:</h2>
        <p><?php echo htmlspecialchars($resultado_string); ?></p>
    <?php endif; ?>
</body>
</html>
