
<h1>Kuupäeva funktisoonid</h1>
<ol>

    <li>time()</li>
    <li>date()</li>
    <li>mktime</li>
    <li>strtotime()</li>
    <li>data_default_timezone_set()</li>

</ol>
<h1>Ülesanded</h1>
<section>

    <h2>Kuupäev ja aeg formadis d/m/y h:i</h2>
    <?php
    echo date('d/m/Y G:i');
    ?>

</section>
<section>

    <h2>Kuupäev ja aeg formadis 16.11.2021</h2>
    <?php
    include('funktsionid.php');
    echo getVanus();
    ?>

</section>
<section>
    <h2>Järgmine kooli vaheaeg on 20.12.2021</h2>
    <?php

    echo getKoolivahejani();
    ?>

</section>
<section>
    <h2>Hooaja pilt</h2>
    <img src="<?php hooaeg()?>" alt="pilt">
</section>
<secton>
    <h2>Järgmine </h2>
    <?php
    //täname aasta
    $year=date('Y');
    //
    $last_day=strtotime('last day of December');
    //
    $date_today=strtotime("now");
    $diff_to_last_day=$last_day-$date_today;
    echo "<br>";
    echo $year."aasta lõpuni".floor($diff_to_last_day/(60*60*24)).'paeva';



    ?>
</secton>
