<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ülessane 403</title>
</head>
<body>
<a href="../phptest.php">tagasi.....Ülesannete leht</a>
<h1>Ülessane 403</h1>

<?php
$varv=array("Gold","CornflowerBlue","Chocolate","DarkSalmon","DarkSeaGreen","DarkViolet",
"DeepPink","GoldenRod","GreenYellow","LemonChiffon","Magenta","LightYellow","MediumSlateBlue",
"Turquoise","Lavender");
for($i=0;$i<15;$i++){
    echo "<span style='color:$varv[$i]'>$varv[$i] </span><br>";
}
?>
</body>
</html>
