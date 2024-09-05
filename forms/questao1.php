<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$num1 = $GET["num1"]?? $num1 = 0;
$num2 = $GET["num2"]?? $num2 = 0;

echo "A soma e:" . $num1 + $num2;

?>
    
</body>
</html>
