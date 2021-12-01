<?php
$parool='tootajad';
$sool='vagavagatekst';
$krypt=crypt($parool,$sool);
echo $krypt;
