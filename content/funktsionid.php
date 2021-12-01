<?php
//vanus
function getVanus(){
    echo '<form method="post" action="">';
    echo 'Palun sinu sünnipäev';
    echo '<input type="date" name="age">';
    echo '<input type="submit" name="arvuta" value="Arvuta vanus">';
    echo '</form>';
    if(isset($_POST['arvuta'])){

        $synd=$_POST['age'];
        $diff=date_diff(date_create($synd),date_create('16.11.2021'));
         $result=$diff;
         echo '<br>';
         echo $diff-> format('%y').'aastat vana';
    }
}
function getKoolivahejani(){

    $today=date('d.m.Y');
    $talv=date('20.12.2021');

    $diff=date_diff(date_create($today),date_create($talv));
    echo '<br>';
    echo 'Talve koolivahejani on'.$diff-> format('%a').'päeva';


}
function hooaeg(){
    //vastavalt tänase kuupäeva näitab hooaja pilti
    $pildid=array(
        "sygis"=>"pildid/osen.jpg",
        "talv"=>"pildid/zima.jpg",
        "kevad"=>"pildid/sakuraa.jpg",
        "suvi"=>"pildid/dzigan.jpg",
    );
    //sygis
    $paev=date("z");
    $sygis_algus=date("z",strtotime("September 1"));
    $sygis_lopp=date("z",strtotime("November 30"));
    //talv
    $talvv_algus=date("z",strtotime("Detsember 1"));
    $talvv_lopp=date("z",strtotime("Veebruar 30"));
    //kevad
    $kevad_algus=date("z",strtotime("Mart 1"));
    $kevad_lopp=date("z",strtotime("Mai 30"));

    //if
    if($paev>=$sygis_algus && $paev<=$sygis_lopp):

        $hooaeg="sygis";
    elseif($paev>=$talvv_algus && $paev<=$talvv_lopp):

        $hooaeg="talv";
    elseif($paev>=$kevad_algus && $paev<=$kevad_lopp):

        $hooaeg="kevad";
    else: $hooaeg="suvi";
    endif;

    $hooajapilt=$pildid[$hooaeg];

    echo $hooajapilt;

}
?>