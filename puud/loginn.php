<?php

session_start();
if(isset($_SESSION["tuvastamine"])){
    header('Location:tootajad.php');
    exit();
}


// login ja pass check
if(!empty($_POST['login']) && !empty($_POST['pass'])){
    $login=$_POST['login'];
    $pass=$_POST['pass'];
    if($login=='boss' && $pass=='boss') {
        $_SESSION['tuvastamine']='niilihtne';
        header('Location:tootajad.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Puuleht</title>
</head>

<body>
<h1>Login form</h1>
<form action="" method="post">
    Login:
    <input type="text" name="login" placeholder="kasutaja nimi">

    <br>
    Parool:
    <input type="password" name="pass">
    <br>
    <input type="submit" value="Logi sisse">



</form>
</body>
</html>