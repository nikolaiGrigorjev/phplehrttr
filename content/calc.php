h1>Valutta calculator var 1</h1>

<form name="var1" onClick="return validateForm()" method="post">
    <label for="kogus">Sisesta kogus:</label>
    <input type="number" name="kogus" id="kogus"> EURO
    <br>
    <fieldset>

        <legend>Vali valuuta:</legend>

        <input type="radio" name="valuuta1" id="dollar" value="dollar" onchange="radioChange(event)">
        <label for="dollar">Dollar</label>
        <br>
        <input type="radio" name="valuuta1" id="rub" value="rub" onchange="radioChange(event)">
        <label for="rub">Rouble</label>
        <br>
        <input type="radio" name="valuuta1" id="kroon" value="kroon" onchange="radioChange(event)">
        <label for="kroon">Rotsi kroon</label>
        <br>
        <input type="radio" name="valuuta1" id="frank" value="frank" onchange="radioChange(event)">
        <label for="frank">Sveitsi franklin</label>
        <br>



    </fieldset>

    <div id="vastus">Siin tuleb vastus...</div>




</form>
<img src="img1/golob.jpg" alt="pilt" id="pilt">

<h2>Valutta calculator var 2</h2>

<form name="var2">
    <label for="kogus2">Sisesta kogus:</label>
    <input type="number" name="kogus2" id="kogus2"> EURO

    <select name="valuuta2" onchange="SelectOptionChange(event)">
        <option value=""></option>
        <option value="dollar">Dollar</option>
        <option value="kroon">Rootse kroon</option>
        <option value="frank">Sveits Franklin</option>
        <option value="rub">Rouble</option>

    </select>
    <div id="vastus2">Siin tuleb vastus...</div>

</form>

<h3>Valuuta kalkulatoor var 3</h3>
<form name="var3">
    <label for="kogus3">Sisesta kogus:</label>
    <input type="number" name="kogus3" id="kogus3"> EURO


    <label for="valuutanimi">Sisesta vaaluta(dollar,rub,frank,kroon):</label>
    <input type="text" name="valuuta3" id="kogus3" placeholder="Vaaluta nimi">
    <input type="button" onClick="inputCurrencyText()" value="OK">
    <div id="vastus3">Siis tuleb vastus...</div>
</form>
<br>
<br>
<h4>Valuuta kalkulatoor var 4</h4>
<form name="var4">
    <label for="kogus4">Sisesta pikkus:</label>
    <input type="number" name="kogus4" id="kogus4"> kilometrid =

    <select name="valuuta4" onchange="killaChange(event)">
        <option value=""></option>

        <option value="met">Metrid</option>
        <option value="san">Santimetrid</option>
        <option value="mil">Milimetrid</option>

    </select>

    <div id="vastus4">Siin tuleb vastus...</div>
</form>


<script src="valcalculatoor.js"></script>
