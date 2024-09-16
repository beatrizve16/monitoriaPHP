<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pirâmide de Asteriscos</title>
    <style>
        pre { font-family: monospace; }
    </style>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="altura" required placeholder="Altura da pirâmide" min="1">
        <button type="submit">Desenhar Pirâmide</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $altura = $_POST['altura'];

        if ($altura > 0) {
            for ($i = 1; $i <= $altura; $i++) {
                echo "<pre>" . str_repeat(' ', $altura - $i) . str_repeat('*', 2 * $i - 1) . "</pre>";
            }
        } else {
            echo "<p>Altura inválida.</p>";
        }
    }
    ?>
</body>
</html>
