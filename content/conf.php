<?php
$serverinimi='localhost';
$kasutajanimi='kolya17';
$parool='123456';
$andmebaasinimi='kolya17';
$yhendus=new mysqli($serverinimi,$kasutajanimi,$parool,$andmebaasinimi);

$yhendus->set_charset("UTF8");

/*
CREATE TABLE loomad( id int primary key AUTO_INCREMENT, nimi varchar(50), kirjeldus text)
Insert into loomad(nimi,kirjeldus) values ('Ziraf','Polosatoe zivotnoe')
SELECT * FROM loomad */
?>
