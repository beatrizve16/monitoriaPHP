<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function primo(){
    for ($i = 1; $i <= 100; $i++){
        $contador = 0;
        for($j = 1; $j<= 100; $j++){
            if ($i%$j == 0){
                $contador ++
            }
        }
if ($contador == 2){
    echo "[".$i."]";
        }
    }
}

primo();

    ?>
</body>
</html>
