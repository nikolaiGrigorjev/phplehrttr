<?php

global $yhendus;
//lisamine INSERT INTO
if(isset($_REQUEST['puuvorm'])){
    $kask=$yhendus->prepare('INSERT INTO puud(nimi, pilt) 
VALUES (?, ?)');
// "s"- string
// $_REQUEST['loomanimi']- запрос в текстовый ящик input name="loomanimi"
    $kask->bind_param("ss", $_REQUEST['nimi'], $_REQUEST['pilt']);
    $kask->execute();
// изменяет адресную строку
//$_SERVER[PHP_SELF] - до имени файла
    header("Location: $_SERVER[PHP_SELF]");
}
if (isset ($_REQUEST['kustusa'])){
    $kask=$yhendus->prepare("DELETE FROM puud WHERE = id?");
    $kask->bind_param("1", $_REQUEST['kustuta']);
    $kask->execute();
}
if (isset ($_REQUEST['muuda'])){
    $kask=$yhendus->prepare("UPDATE puud SET nimi=?,pilt=? WHERE id=?");
    $kask->bind_param("ssi", $_REQUEST['nimi'],$_REQUEST['pilt']);
    $kask->execute();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <meta charset="UTF-8">
    <title>Puuleht</title>
</head>
<body>
<div class="leftcolumn">
    <h2>Puud</h2>
    <?php
    //näitame puunimed
    global $yhendus;
    $kask=$yhendus->prepare("SELECT id, nimi FROM puud");
    $kask->bind_result($id, $nimi);
    $kask->execute();
    echo "<ul>";
    while($kask->fetch()){
        echo "<li><a href='$_SERVER[PHP_SELF]?id=$id'>".$nimi."</a></li>";
    }
    echo "</ul>";
    echo "<a href='$_SERVER[PHP_SELF]?lisa=jah'>Lisa...</a>";
    if(isSet($_REQUEST['lisa'])){
        ?>
        <form action="" method="post">
            <input type="hidden" name="puuvorm" value="jah">
            <label for="nimi">Puunimi</label>
            <input type="text" name="nimi" id="nimi">
            <br>
            <label for="pilt">PildiLink</label>
            <textarea name="pilt" id="pilt"></textarea>
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
    if(isset($_REQUEST['id'])){
        $kask=$yhendus->prepare("SELECT id, nimi, pilt FROM puud WHERE id=?");
        $kask->bind_param('i', $_REQUEST['id']);
        $kask->bind_result($id, $nimi, $pilt);
        $kask->execute();



            if($kask->fetch()){
                if(isSet($_REQUEST['muutmine'])){
                    echo'
                    <form action="$_REQUEST[PHP_SELF]" >
                    <input type="hidden" name="muuda" value="jah">
                     <h2>Puu andmete muutmine</h2>
                    <input type="text" name="nimi" id="$nimi">
                    <br>
                    <textarea name="pilt" id="$pilt" cols="20"></textarea>
                    <br>
                     Pilt(peab olema pildilingi aadress)
                    <input type="submit" value="Muuda">
                    </form>
                        ';
                        }else{

            echo "<strong>".$nimi."</strong>";
            echo "<img src='$pilt' alt='pilt' width=300px height=300px>";
                echo "<br>";
            echo "<a href='$_SERVER[PHP_SELF]?kustuta=$id'>Kustuta</a>";
            echo "<br>";
            echo "<a href='$_SERVER[PHP_SELF]?id=$id&muutmine=jah'>Muuda</a>";
        }}else {
            echo "Viga";

    }
}
    $yhendus->close();
    ?>
</div>

</body>
</html>