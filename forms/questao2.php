<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$num = $GET["num"]?? $num = 0;
$fat=1;

for($i=$num ; $i>=1; $i--){
    $fat*=$i;
}
echo "o fatorial e :" . $fat;

?>
    
</body>
</html>
