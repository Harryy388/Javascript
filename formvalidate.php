<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validate A</title>
    <link rel="stylesheet" href="formvalidate.css">
</head>

<body>

    <form class="form-container" id="testForm">
    <h2>Test Formulier :</h2>
        <div class="form-group">
            <label for="voornaam">* Voornaam:</label>
            <input type="text" id="vn" name="voornaam"  placeholder="Voornaam">
            <input type="text" id="tv" name="tv" placeholder="Tv">
            <input type="text" id="an" name="achternaam"  placeholder="Achternaam"><br>
        </div>
        <div class="form-group">
            <label for="adres">* Adres:</label>
            <input type="text" id="adres" name="adres"  placeholder="adres"><br>
        </div>
        <div class="form-group">
            <label for="pc">* Pc en Plaats:</label>
            <input type="text" id="pc" name="pc"  placeholder="Postcode">
            <input type="text" id="plaats" name="plaats"  placeholder="Plaats"><br>
        </div>
        <div class="form-group">
            <label for="tel">Telefoon:</label>
            <input type="text" id="tel" name="tel" placeholder="Telefoon"><br>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email"><br>
        </div>
        <div class="form-group">
            <label for="geslacht">Geslacht:</label>
            <input type="radio" id="man" name="geslacht" value="man">Man<br>
        </div>
        <div class="form-group">
        <label for=""></label>
        <input type="radio" id="vrouw" name="geslacht" value="vrouw">Vrouw<br>
        </div>
        <div class="form-group">
            <label for="band">Boyband:</label>
            <select id="band" name="band">
                <option value="K3">K3</option>
                <option value="Chef'Special">Chef'Special</option>
                <option value="Kensington">Kensington</option>
                <option value="Rowwen Hèze">Rowwen Hèze</option>
            </select><br>
        </div>
        <div class="form-group">
            <label for="datum">Geboortedatum:</label>
            <input type="date" id="datum" name="datum"><br>
        </div>
        <div class="form-group">
            <label for="verplicht">*Verplichte velden:</label>
            <input type="submit" value="Submit">
        </div>
        <div id="error-message"></div> <!--//de div van de error message -->
    </form>
   
    <script>
    document.getElementById('testForm').addEventListener('submit', function(event) { //zorgt ervoor dat de submit knop werkt
        event.preventDefault(); //zorgt ervoor dat de pagina niet refreshed

        var errorMessage = ''; //maakt een string aan
        var requiredFields = ['vn', 'tv', 'an', 'adres', 'pc', 'plaats']; //maakt een array aan en zet alle required velden erin
        requiredFields.forEach(function(fieldId) { //loopt door elke fieldId in de array en als 1 leeg is dan komt er een error message
            var field = document.getElementById(fieldId);
            if (!field.value) {
                errorMessage +=  'Het veld ' + field.placeholder + ' is verplicht.<br>'; 
                field.style.backgroundColor = 'red'; //maakt de velden rood
            } else {
                field.style.backgroundColor = 'lightgreen'; //maakt de velden groen
            }
        });
        var errorDiv = document.getElementById('error-message'); //maakt een variabele aan voor de error message zodat die niet steeds opnieuw getypt hoeft te worden
        
        errorDiv.innerHTML = errorMessage ? '<strong>Foutmeldingen:</strong><br>' + errorMessage: '<strong class="groen">Alle verplichte vakken zijn ingevuld<strong>';
        errorDiv.style.border = errorMessage ? '1px solid red' : 'none';
       // boventste en onderste is zelfde maar blijkbaar kan je ? en : gebruiken om een if else statement te maken
       
        if (errorMessage) {
            errorDiv.innerHTML = '<strong>Foutmeldingen:</strong><br>' + errorMessage;
            errorDiv.style.border = '1px solid red'; //maakt een dunne border om de error message
        } else {
            errorDiv.innerHTML = '<strong class="groen">Alle verplichte vakken zijn ingevuld<strong>';
            errorDiv.style.border = 'none'; //zodat er niet een lelijke rode lijn is voordat er op submit is geklikt
        }
       
    });
</script>
</body>

</html>