<?php
/**
 * Created by PhpStorm.
 * User: Mates
 * Date: 09.11.2017
 * Time: 13:35
 */ 
  
if(!isset($_POST['submit'])){
    ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Přihláška</title>
            <meta charset="UTF-8">
        </head>
        <body>
            <h1>
                Karta Zaměstnance
            </h1>
            <br>
            <form method="POST">
            <fieldset>
            <legend>Osobní údaje</legend>
            <label for="jmeno">Jméno </label><input type="text" name="jmeno" id="jmeno" required>
            <br>
            <label for="prijmeni">Přijmení </label><input type="text" name="prijmeni" id="prijmeni" required>
            <br>
            <label for="ulice">Ulice a čp.: </label><input type="text" name="ulice" id="ulice" required>
            <br>
            <label for="mesto">Město: </label><input type="text" name="mesto" id="mesto" required>
            <br>
            <label for="ulice">PSČ: </label><input type="number" name="psc" id="psc" required>
            <br>
            <label for="email">E-Mail: </label><input type="email" name="email" id="email" required>
            <br>
            <input type="checkbox" name="muz" value="Muž">Muž
            <br>
            Zdravotní pojišťovna:
            <select name="pojistovna" required>
                <option value="VZP" selected>VZP</option>
                <option value="ZPMV">ZPMV</option>
                <option value="VOZP">VOZP</option>
                <option value="OZP">OZP</option>
                <option value="jiná">jiná</option>
            </select>
            </fieldset
            <br>
            <input type="submit" name="submit" value="Přihlásit">
            </form>
        </body>
    </html>
<?php
}
else
{
    
}