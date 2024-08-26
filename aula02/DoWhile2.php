<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$a=0;
$b = 1;
$contador = 0;

   do{
  echo "$a ";
  $temporaria = $a+$b;
  $a = $b;
  $b = $temporaria;
  $contador++

   } while ($contador <= 10)

    ?>
</body>
</html>
