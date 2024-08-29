<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$num = array(23, 67, 12, 89, 34, 56, 78, 90, 3, 45);
$maior = $num[0];
$menor = $num[0];

for($i = 0; $i < 10 ; $i++ ){ 
if( $num[$i]>$maior){
    $maior = $num[$i];
}
if($num[$i]<$menor){
    $menor = $num[$i];
}

}


echo "maior numero: $maior ";
echo "menor numero: $menor";



    ?>
</body>
</html>
