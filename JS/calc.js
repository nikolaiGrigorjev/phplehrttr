var vastus=document.getElementById("vastus");
var kogus=document.getElementById("kogus");
var vastus2=document.getElementById("vastus2");
var kogus2=document.getElementById("kogus2");
var vastus3=document.getElementById("vastus3");
var kogus3=document.getElementById("kogus3");
var vastus4=document.getElementById("vastus4");
var kogus4=document.getElementById("kogus4");

const dollar=1.16;
const kroon=10.65;
const rub=84.20;
const frank=1.007;

const met=1000;
const san=100000;
const mil=1000000;


//korrutab
function calculate(val,currency){
    return(val*currency).toFixed(0);
    //toFixed(3) -? 3 märki peale komat

}
function killaChange(event){
    var inputValue=kogus4.value;
    if(event.target.value==="met"){
        vastus4.innerHTML=calculate(inputValue,met) +" Metrid";
    }
    else if (event.target.value==="san"){
        vastus4.innerHTML=calculate(inputValue,san) +" Santimetrid";
    }
    else if (event.target.value==="mil"){
        vastus4.innerHTML=calculate(inputValue,mil) +" Millimetrid";
    }


}
function SelectOptionChange(event){

    var inputValue=kogus2.value;
    if(event.target.value==="dollar"){
        vastus2.innerHTML=calculate(inputValue,dollar) +"$";
        pilt.src="img1/dollar.jpg";
    }
    else if (event.target.value==="rub"){
        vastus2.innerHTML=calculate(inputValue,rub) +"₽";
        pilt.src="img1/rub.jpg";
    }
    else if (event.target.value==="kroon"){
        vastus2.innerHTML=calculate(inputValue,kroon) +"SEK";
        pilt.src="img1/швед.jpg";
    }
    else if (event.target.value==="frank"){
        vastus2.innerHTML=calculate(inputValue,frank) +"CHF";
        pilt.src="img1/sveits.jpg";
    }
}
function radioChange(event){
    if(event.target.id==="dollar"){
        vastus.innerHTML=calculate(kogus.value,dollar) +"$";
    }
    else if (event.target.id==="rub"){
        vastus.innerHTML=calculate(kogus.value,rub) +"₽";
    }
    else if (event.target.id==="kroon"){
        vastus.innerHTML=calculate(kogus.value,kroon) +"SEK";
    }
    else if (event.target.id==="frank"){
        vastus.innerHTML=calculate(kogus.value,frank) +"CHF";
    }

}
function validateForm() {
    let x = document.forms["var1"]["kogus"].value;
    if (x == "") {
        alert("Sisesta kogus!");
        return false;
    }
}
function inputCurrencyText(){

    var inputValue=document.getElementById("kogus3").value;
    var inputText=document.getElementById("valuutanimi").value;
    var vastus3=document.getElementById("vastus3");
    if(inputText=="dollar"){
        vastus3.innerHTML=calculate(inputValue,dollar) +"$";
    }
    else if(inputText=="rub"){
        vastus3.innerHTML=calculate(inputValue,dollar) +"₽";
    }
    else if(inputText=="kroon"){
        vastus3.innerHTML=calculate(inputValue,dollar) +"SEK";
    }
    else if(inputText=="frank"){
        vastus3.innerHTML=calculate(inputValue,dollar) +"CHF";
    }



}
