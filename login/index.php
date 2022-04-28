<?php
if(isset($_POST['password'])){
    require_once ('encriptar.php');
}
if(isset($_POST['usu'])){
    require_once ('encriptar.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <var class="contenerdor padre">
        <h1 id="l1">Login</h1>
    <form action="encriptar.php" method="post">
    <br>
    <input type="text" name="usu" id="usu">
    <br><br>
    <input type="text" name="password" id="password">
    <br><br>
    <input type="submit" value="Ir">

    </form>
</var>
</body>
</html>