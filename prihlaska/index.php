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
                PŘIHLÁŠKA K ZÁVODU
            </h1>
            <br>
            <form method="POST">
            <label for="jmeno">Jméno </label><input type="text" name="jmeno" id="jmeno" required>
            <br>
            <label for="prijmeni">Přijmení </label><input type="text" name="prijmeni" id="prijmeni" required>
            <br>
            <label for="datum">Datum narození </label><input type="date" name="date" id="datum" required>
            <br>
            <label for="adresa">Adresa:</label>
            <br>
            <textarea name="adresa" id="adresa">
            </textarea>
            <br>
            <label for="telefon">Telefon </label><input type="tel" name="telefon" id="telefon" required>
            <br>
            Disciplína:
            <br>
            <select name="disciplina" required>
                <option value="60m" selected>Běh 60 m</option>
                <option value="800m">Běh 800m</option>
                <option value="dalka">Skok do dálky</option>
                <option value="ostep">Hod oštěpem</option>
                <option value="koule">Vrh koulí</option>
            </select>
            <br>
            Úcastním se jako:
            <input type="radio" name="ucast" value="1" checked> amatér
            <input type="radio" name="ucast" value="2">profesionál za oddíl<input type="text" name="oddil">
            <br>
            Požadavky:
            <input type="checkbox" name="pozadavky" value="1">Vlastní šatna
            <input type="checkbox" name="pozadavky" value="2">Vegetariánská strava
            <input type="checkbox" name="pozadavky" value="3">Osobní asistent
            <br>
            <br>
            Souhlasím s podmínkami registrace <input type="checkbox" name="podminky" required>
            <br>
            <input type="submit" name="submit" value="Přihlásit">
            </form>
        </body>
    </html>
<?php
}
else
{
    if($_POST['ucast']==1){
        $ucast="Účastníte se jako amatér";
    }
    elseif($_POST['ucast']==2){
        $ucast="Účastníte se jako profesionál za oddíl ".$_POST['oddil'];
    }
    echo "Vaše přihlášení proběhlo v pořádku";
    echo "<br><br>";
    echo "Vaše Údaje";   
    echo "<br>";
    echo $_POST['jmeno']." ".$_POST['prijmeni'];
    echo "<br>";
    echo "Datum narození: ".$_POST['date']; 
    echo "<br>";
    echo "Adresa:";
    echo "<br>";
    echo $_POST['adresa']; 
    echo "<br>";
    echo "Telefon: ".$_POST['telefon'];
    echo "<br>";
    echo "Účastníte se jako ".$ucast." v disciplíně ".$_POST['disciplina'];
    echo "<br>";
    echo "Požadujete";
    echo "<br>";
    echo $_POST['pozadavky'];
    
}