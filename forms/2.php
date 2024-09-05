<!DOCTYPE html>
<html lang="en">

<body>
    <form method = "post" action="index.php">
        <label for="nome"> Nome:</label>
        <input type="text" id="nome" required><br><br>

        <button type = "submit" value = "Enviar"> Enviar</button>
    </form>

<?php
if(isset($_POST["nome"])){
    $RES=$_POST["nome"];
    echo "Hello".$RES."!";
}
?>
    
</body>
</html>
