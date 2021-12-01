

var lopp=false;


function klik(pilt){
    pilt.src=kellekord;

    if(vyidukontroll()){
        alert("Sa võitsid");
        lopp=true;
    }


    /*if(kellekord=="pildid/X.png"){
        kellekord="pildid/O.png";
    }else {
        kellekord="pildid/X.png";
    }
    /*if(ruuududKasutatud()){
        lopp=true;
        alert("Mäng ob läbi!");
    }
    */


}
function klicValik(pilt){
    kellekord=pilt.src;
    document.getElementById("pilt22").src=kellekord;
}
// проверяет все картинки и возращает false если найдет пустую картинку

function ruuududKasutatud(){
    pildid=document.images;
    for(var i=0;i<pildid.length;i++){
        if(pildid[i].src.split("/").pop()=="list.jpg"){

            return false;
            //split("/")- делает массив из пути к файлу
            //pop() -выберает из массива последние значение или имя файла
        }
    }
    return true;
}
// пределяем имя файла
function sisu(nr){
    var fnimi=document.getElementById("pilt"+nr).src;
    fnimi=fnimi.split("/").pop();
    return fnimi;
}
function kontrollsisu(a,b,c,sisuloop){
    sisuloop=sisuloop.split("/").pop();
    //a,b,c-номера картинок и sisuloop - адресс нужной картинки
    if(sisu(a)==sisuloop && sisu(b)==sisuloop && sisu(c)==sisuloop)
    {return true;}else {return false;}


}



function vyidukontroll(){
    if(kontrollsisu(1,2,3,4,5,6,7,8,9,10,11,12,kellekord)){return true;}

    return false;


}