<?php
require('conf.php');

session_start();
if(!isset($_SESSION["tuvastamine"])){
    header('Location:loginAbb.php');
    exit();
}
global $yhendus;
//lisamine INSERT INTO
if(isset($_REQUEST['tootajavorm'])){
    $kask=$yhendus->prepare('INSERT INTO tootajad(nimi, foto) 
VALUES (?, ?)');
// "s"- string
// $_REQUEST['loomanimi']- запрос в текстовый ящик input name="loomanimi"
    $kask->bind_param("ss", $_REQUEST['nimi'], $_REQUEST['foto']);
    $kask->execute();
// изменяет адресную строку
//$_SERVER[PHP_SELF] - до имени файла
    header("Location: $_SERVER[PHP_SELF]");
}
if (isset ($_REQUEST['kustuta'])){
    $kask=$yhendus->prepare("DELETE FROM tootajad WHERE  tootajaID=?");
    $kask->bind_param("i", $_REQUEST['kustuta']);
    $kask->execute();
}
if (isset ($_REQUEST['muuda'])){
    $kask=$yhendus->prepare("UPDATE tootajad SET nimi=?,foto=? WHERE tootajaID=?");
    $kask->bind_param("ssi", $_REQUEST['nimi'],$_REQUEST['foto']);
    $kask->execute();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <meta charset="UTF-8">
    <title>TootajadLeht</title>
</head>
<body>
<div>
    <p><?=$_SESSION['kasutaja']?> on sisse logitud</p>
    <form action="loggout.php" method="post">
        <input type="submit" value="Logi valja" name="loggout">
    </form>
</div>
<div class="leftcolumn">
    <h2>Tootajad</h2>
    <?php
    //näitame puunimed
    global $yhendus;
    $kask=$yhendus->prepare("SELECT tootajaID, nimi FROM tootajad");
    $kask->bind_result($tootajaID,$nimi);
    $kask->execute();
    echo "<ul>";
    while($kask->fetch()){
        echo "<li><a href='$_SERVER[PHP_SELF]?id=$tootajaID'>".$nimi."</a></li>";
    }
    echo "</ul>";
    echo "<a href='$_SERVER[PHP_SELF]?lisa=jah'>Lisa...</a>";
    if(isSet($_REQUEST['lisa'])){
        ?>
        <form action="" method="post">
            <input type="hidden" name="tootajadvorm" value="jah">
            <label for="nimi">Puunimi</label>
            <input type="text" name="nimi" id="nimi">
            <br>
            <label for="foto">PildiLink</label>
            <textarea name="foto" id="foto"></textarea>
            <br>
            <input type="submit" value="Lisa">
        </form>
        <?php
    }

    ?>

</div>
<div class="rightcolumn">
    <h3>siia tuleb pilt, tee klick puunimi peale</h3>
    <?php
    //näitame puunimed
    global $yhendus;
    if(isset($_REQUEST['tootajaID'])){
        $kask=$yhendus->prepare("SELECT $tootajaID, nimi, foto FROM tootajad WHERE $tootajaID=?");
        $kask->bind_param('i', $_REQUEST['$tootajaID']);
        $kask->bind_result($tootajaID, $nimi, $foto);
        $kask->execute();



        if($kask->fetch()){
            if(isSet($_REQUEST['muutmine'])){
                echo'
                    <form action="$_REQUEST[PHP_SELF]" >
                    <input type="hidden" name="muuda" value="jah">
                     <h2>Puu andmete muutmine</h2>
                    <input type="text" name="nimi" id="$nimi">
                    <br>
                    <textarea name="foto" id="$foto" cols="20"></textarea>
                    <br>
                     Pilt(peab olema pildilingi aadress)
                    <input type="submit" value="Muuda">
                    </form>
                        ';
            }

            echo "<strong>".$nimi."</strong>";
            echo "<img src='$foto' alt='foto' width=300px height=300px>";
            echo "<br>";
            if($_SESSION['onAdmin']==1){
                echo "<a href='$_SERVER[PHP_SELF]?kustuta=$tootajaID'>Kustuta</a>";
                echo "<br>";
                echo "<a href='$_SERVER[PHP_SELF]?tootajaID=$tootajaID&muutmine=jah'>Muuda</a>";
            }}} else {
        echo "Viga";


    }
    $yhendus->close();
    ?>
</div>

</body>
</html>