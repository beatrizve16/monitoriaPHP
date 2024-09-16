
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formas Geométricas</title>
    <style>
        .shape { font-family: monospace; white-space: pre; }
    </style>
</head>
<body>
    <form action="" method="POST">
        <select name="forma" required>
            <option value="quadrado">Quadrado</option>
            <option value="retangulo">Retângulo</option>
            <option value="triangulo">Triângulo</option>
        </select>
        <input type="number" name="largura" placeholder="Largura (para Retângulo)" min="1">
        <input type="number" name="altura" placeholder="Altura (para Retângulo e Triângulo)" min="1">
        <button type="submit">Desenhar Forma</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $forma = $_POST['forma'];
        $largura = $_POST['largura'];
        $altura = $_POST['altura'];

        function desenharQuadrado($tamanho) {
            for ($i = 0; $i < $tamanho; $i++) {
                echo str_repeat('*', $tamanho) . "<br>";
            }
        }

        function desenharRetangulo($largura, $altura) {
            for ($i = 0; $i < $altura; $i++) {
                echo str_repeat('*', $largura) . "<br>";
            }
        }

        function desenharTriangulo($altura) {
            for ($i = 1; $i <= $altura; $i++) {
                echo str_repeat(' ', $altura - $i) . str_repeat('*', 2 * $i - 1) . "<br>";
            }
        }

        echo "<div class='shape'>";
        switch ($forma) {
            case 'quadrado':
                desenharQuadrado($altura);
                break;
            case 'retangulo':
                desenharRetangulo($largura, $altura);
                break;
            case 'triangulo':
                desenharTriangulo($altura);
                break;
        }
        echo "</div>";
    }
    ?>
</body>
</html>
