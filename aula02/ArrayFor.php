<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$num = array(1,2,3,4,5,6,7,8,9,10);
$sum = 0;

for($i = 0; $i <10; $i++){
    $sum += $num[$i];
}

echo $sum;

    ?>
</body>
</html>
