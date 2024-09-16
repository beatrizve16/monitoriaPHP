<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Fila de Pessoas</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="n" required placeholder="Quantidade de pessoas na fila">
        <input type="text" name="identificadores" required placeholder="Identificadores separados por vírgula">
        <input type="number" name="m" required placeholder="Quantidade de pessoas que saíram">
        <input type="text" name="sair" required placeholder="Identificadores que saíram separados por vírgula">
        <button type="submit">Verificar Fila Final</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $n = $_POST['n'];
        $identificadores = $_POST['identificadores'];
        $m = $_POST['m'];
        $sair = $_POST['sair'];

        $fila = array_map('trim', explode(',', $identificadores));
        $saiu = array_map('trim', explode(',', $sair));

        $filaFinal = array_diff($fila, $saiu);

        echo "<p>Fila Final: " . implode(', ', $filaFinal) . "</p>";
    }
    ?>
</body>
</html>
