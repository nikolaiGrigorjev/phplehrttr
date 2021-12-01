<?php
session_start();
if(isset($_POST["loggout"])){
    session_destroy();
    //aadressi reas avatakse login.php
    header('Location:loginAbb.php');
    exit();
}
session_start();
if(isset($_SESSION["tuvustamine"])){
    header('Location :loginAbb.php');
    exit();
}

