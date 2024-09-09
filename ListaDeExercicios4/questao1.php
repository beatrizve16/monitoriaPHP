<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/" method="post">
        <input type="text" name="number" placeholder="Enter a number" />
        <button type="submit" name="add">Adicionar Números</button>
        <button type="submit" name="print">Printar Array sem Duplicados</button>
    </form>

    <?php
    session_start();

    if (!isset($_SESSION['numbers'])) {
        $_SESSION['numbers'] = [];
    }

    if (isset($_POST['add']) && isset($_POST['number'])) {
        $number = $_POST['number'];
        if (is_numeric($number)) {
            $_SESSION['numbers'][] = $number;
        }
    }

    if (isset($_POST['print'])) {
        function removerDuplicados($num){
            $semDuplicados = [];
            foreach($num as $valor){
                if (!in_array($valor, $semDuplicados)) {
                    $semDuplicados[] = $valor;
                }
            }
            return $semDuplicados;
        }

        $num = $_SESSION['numbers'];
        $semDuplicados = removerDuplicados($num);

        echo "Array final sem duplicados: ";
        foreach($semDuplicados as $valor){
            echo $valor . " ";
        }

        echo '<pre>';
        print_r($semDuplicados);
        echo '</pre>';
    }
    ?>
</body>
</html>
