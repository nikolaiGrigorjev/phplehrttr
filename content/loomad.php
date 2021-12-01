<?php
require('conf.php');
// функция которая удаляет из адресной строки переменные
function clearVarsExcept($url, $varname){
return strtok(basename($_SERVER['REQUEST_URI']), "?")."?$varname=".$_REQUEST[$varname];
}

global $yhendus;
//lisamine INSERT INTO
if(!empty($_REQUEST['loomanimi'])){
$kask=$yhendus->prepare('INSERT INTO loomad(nimi, kirjeldus)
VALUES(?, ?)');
// "s" - string
// $_REQUEST['loomanimi'] - запрос в текстовом ящике
$kask->bind_param('ss',$_REQUEST['loomanimi'], $_REQUEST['kiri']);
$kask->execute();
// изменяет адресную строку
//$_SERVER[PHP_SELF] - до имени файла
//header("Location:" .basename($_SERVER['REQUEST_URI']));
}
// kustutamine
IF(isset($_REQUEST['kustuta'])){
$kask=$yhendus->prepare("DELETE FROM loomad where id=?");
$kask->bind_param('i',$_REQUEST['kustuta']);
$kask->execute();
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
<meta charset="UTF-8">
<title>Andmetabeli "Loomad" sinu näitamine</title>
</head>
<body>
<h1>
Andmebtabel "Loomad" sinu näitamine
</h1>
<?php
global $yhendus;
// tabeli sisu näitamine
$kask=$yhendus->prepare("SELECT id, nimi, kirjeldus from loomad");
$kask->bind_result($id, $nimi, $kirjeldus);
$kask->execute();
echo "<table>";
echo "<tr>
<th>id</th>
<th>Loomanimi</th>
<th>Kirjeldus</th>
</tr>";
//fetch()
while($kask->fetch()){
echo "<tr>";
echo "<td>$id</td>";
echo "<td>$nimi</td>";
echo "<td>$kirjeldus</td>";
echo "<td><a href='".clearVarsExcept(basename($_SERVER['REQUEST_URI']), "leht")."&kustuta=$id'>xxx</a></td>";
echo "</tr>";
}
echo "</table>";
?>
<br><br>
<form action="<?=clearVarsExcept(basename($_SERVER['REQUEST_URI']), 'leht')?>" method="post">
<label for="loomanimi">Loomanimi</label>
<br>
<input type="text" name="loomanimi" id="loomanimi">
<br>
<label for="kiri">Kirjeldus</label>
<br>
<input type="text" name="kiri" id="kiri">
<br>
<input type="submit" name="Lisa">
</form>
<?php
$yhendus->close();
?>

</body>
</html>