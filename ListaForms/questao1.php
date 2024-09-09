<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/" method="post">

<input type="text"  name="numero1" required>
<label for="">Digite um numero </label>
<input type="text"  name="numero1" required>
<label for="">Digite outro numero </label>

<input type="button" value="Enviar">
    </form>


    <?php

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $numero1=$_POST['numero1'];
    $numero2=$_POST['numero2'];

    echo $numero1+$numero2;
}




    ?>
    

</body>
</html>
