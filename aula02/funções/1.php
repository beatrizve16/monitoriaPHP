<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function calculadora($a, $b, $calculo){
    switch($calculo){
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '/':
            return $a/$b;
        case '*':
            return $a*$b;
        default:
            return "tente novamente :("
    }
}

$a = 10;
$b = 2;

$calculo= '/';
$resposta = calculadora($a, $b, $calculo);

echo "O resultado e " $resposta;

    ?>
</body>
</html>
