<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>√úlesanne 402</title>
</head>
<body>
<a href="../phptest.php">tagasi.....√úlesannete leht</a>
<h1>√úlesanne 402</h1>
<h2>1.20 Checbox tsikliiga</h2>
<?php
    $i=1;
    while($i<20){
        echo "<input type='checkbox' id='$i' name='box[]' value ='$i'>";
        echo "<label for='$i'>box ".$i."</label><br>";
        $i++;

    }

?>
<br>
<h2>2.20 radionupp tsikliiga</h2>
<?php
$r=1;
while($r<20){
    echo "<input type='radio' id='l$r' name='radio[]' value ='$r'>";
    echo "<label for='l$r'>value ".$r."</label><br>";
    $r++;

}

?>

<h3>3.20 tekstbox tsikliiga</h3>
<?php
$q=1;
while($q<20){
    echo "<input type='textbox' id='u$q' name='tekst[]' value ='$q'>";
    echo "<label for='u$q'>cell ".$q."</label><br>";
    $q++;

}

?>

</body>
</html>

