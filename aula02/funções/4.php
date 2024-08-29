<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    
function cparaf($tempC){
$f = ($tempC*1.8 + 32);
return $f;
}

$f = 86;
$conversao = cparaf($f);
echo "O resultado e " $conversao;

    ?>
</body>
</html>
