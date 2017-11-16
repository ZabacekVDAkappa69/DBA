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
            <label for="email">E-Mail: </label><input type="email" name="email" id="email" required value="@">
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
            </fieldset>
            <fieldset>
                      <legend>Vzdělání</legend>
                      Ukončené vzdělání: 
                      <select value="vzdelani" required>
                        <optgroup label="Základní">
                        <option value="základní neukončené">Základní neukončené</option>
                        <option value="základní">základní</option>
                        </optgroup>
                      <optgroup label="Střední">
                        <option value="střední odborné">střední odborné</option>
                        <option value="gymnázium">gymnázium</option>
                        <option value="vyučen">vyučen</option>
                      </optgroup>
                      <optgroup label="Vysoké">
                        <option value="bakalářské">bakalářské</option>
                        <option value="magisterské/inženýrské">magisterské/inženýrské</option>
                        <option value="doktoranské">doktoranské</option>
                      </optgroup>
                      </select>
            </fieldset>
            <fieldset>
                <legend>Jazyky</legend>
                Anglický jazyk <input type="radio" name="anglicky" value="aktivně"> Aktivně <input type="radio" value="pasivně" name="anglicky"> Pasivně <input type="radio" name="anglicky" value="vůbec"> vůbec
                <br>
                Něměcký jazyk <input type="radio" name="nemecky" value="aktivně"> Aktivně <input type="radio" value="pasivně" name="nemecky"> Pasivně <input type="radio" name="nemecky" value="vůbec"> vůbec
                <br>
                Ruský jazyk <input type="radio" name="rusky" value="aktivně"> Aktivně <input type="radio" value="pasivně" name="rusky"> Pasivně <input type="radio" name="rusky" value="vůbec"> vůbec
                <br>
                Jiný <input type="text" name="jiny" placeholder="který a v jakém rozsahu">
            </fieldset>
            <fieldset>
                <legend>Požadavky</legend>
                <input type="checkbox" name="1"> částečný úvazek
                <br>
                <input type="checkbox" name="2"> služební auto
                <br>
                <input type="checkbox" name="3"> příspěvěk na dovolenou
            </fieldset>
            <br>
            <input type="submit" name="submit" value="Odeslat údaje">
            </form>
        </body>
    </html>
<?php
}
else
{
    if(isset($_POST['muz'])){
        $muz="zaměstnance";
    }
    else {
        $muz = "zaměstnankyně";
    }
  echo "<h1>Údaje ".$muz."</h1>";
  echo "Adresa:";
  echo $_POST['jmeno']." ".$_POST['prijmeni'];
  echo "<br>";
  echo $_POST['ulice'];
  echo "<br>";
  echo $_POST['psc']." ".$_POST['mesto'];
  echo "<br>";
  echo "<br>";
  echo "E-Mail: ".$_POST['email'];
  echo "<br>";
  echo "<br>";
  echo "Zdravotní pojišťovna: ".$_POST['pojistovna'];
  echo "<br>";
  echo "<br>";
  echo "Znalost jazyků";
  echo "<br>";
  echo "Anglický jazyk: ".$_POST['anglicky'];
  echo "<br>";
  echo "Německý jazyk: ".$_POST['nemecky'];
  echo "<br>";
  echo "Ruský jazyk: ".$_POST['rusky'];
  if(isset($_POST['jiny'])) {
      echo "<br>";
      echo $_POST['jiny'];
  }
  echo "<br>";
  echo "<br>";
  echo "Požadavky:";;
    if(isset($_POST['1'])) {
        echo "<br>";
        echo "částečný úvazek";
    }
    if(isset($_POST['2'])) {
        echo "<br>";
        echo "služební auto";
    }
    if(isset($_POST['3'])) {
        echo "<br>";
        echo "příspěvěk na dovolenou";
    }
}