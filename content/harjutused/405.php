<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 405</title>
    <style>
        td{
            border:3px solid;
            padding:15px;
            text-align:center;
        }
    </style>
</head>
<body>
<a href="../phptest.php">tagasi.....Ülesannete leht</a>
<h1>Ülesane 405 korrustustabel</h1>
<?php
echo "<table>";

for($i=1;$i<=10;$i++){
    echo"<tr>";
    for($j=1;$j<=10;$j++) {
        $val=$i*$j;


        echo "<td>".$val."</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>
