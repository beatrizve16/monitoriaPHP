<?php
$resultado = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = isset($_POST['x']) ? (int)$_POST['x'] : 0;
    $y = isset($_POST['y']) ? (int)$_POST['y'] : 0;

    if ($x == 0 || $y == 0) {
        $resultado = 'eixos';
    } elseif ($x > 0 && $y > 0) {
        $resultado = 'Quadrante 1';
    } elseif ($x < 0 && $y > 0) {
        $resultado = 'Quadrante 2';
    } elseif ($x < 0 && $y < 0) {
        $resultado = 'Quadrante 3';
    } elseif ($x > 0 && $y < 0) {
        $resultado = 'Quadrante 4';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadrante do Plano Cartesiano</title>
</head>
<body>
    <h1>Determinar o Quadrante do Ponto</h1>
    <form method="POST" action="quadrante.php">
        <label for="x">Digite o valor de X:</label><br>
        <input type="number" id="x" name="x" required><br><br>
        <label for="y">Digite o valor de Y:</label><br>
        <input type="number" id="y" name="y" required><br><br>
        <input type="submit" value="Determinar Quadrante">
    </form>

    <?php if ($resultado): ?>
        <h2>Resultado:</h2>
        <p><?php echo htmlspecialchars($resultado); ?></p>
    <?php endif; ?>
</body>
</html>
