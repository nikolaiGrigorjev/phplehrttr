<?php
//andmed massivis
$data=["nimi"=>"Nikolai Grigorjev", "aadress"=>"Õismäe tee 76, Tallinn", "pilt"=>"mem.jpg", "koduleht"=>"https://grigorjev20.thkit.ee"];
?>
<h1>Ülesanne 401/ var 1</h1>
<p><b><?=$data["nimi"]?></b></p>
<p><i><?=$data["aadress"]?></i></p>
<img src=<?=$data["pilt"]?> alt="Landscape">
<br>
<a href=<?=$data["koduleht"]?> target="_blank">Koduleht</a>
<h1>Ülesanne 401/ var 2</h1><br>
<?php
$arrayy=array("Nikolai Grigorjev","Õismäe tee 76, Tallinn","mem.jpg","https://grigorjev20.thkit.ee");
echo "<b>Nimi: ".$arrayy[0]."</b><br>";
echo "<i>Aadress: ".$arrayy[1]."</i><br>";
echo "<img src='$arrayy[2]' alt='Landscape'>";
echo "<br><a href='$arrayy[3]'>Koduleht</a>";

?>
<br><a href=../../index.php?leht=test>Ülessanete leht</a>
