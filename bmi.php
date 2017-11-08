<?php
if(!isset($_POST['submit'])){
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Something</title>
    <meta charset="UTF-8">
  </head>
  <body>  
  <fieldset>
  <legend>Osobní údaje</legend>
    <form method="POST">
         <label for="jmeno">Jméno: </label><input type="text" name="jmeno"  id="jmeno" required>
         <br>
         <label for="prijmeni">Přijmení: </label><input type="text" name="prijmeni" id="prijmeni"  required>
         <br>
         Pohlaví: 
         <br>
         <input type="radio" name="pohlavi" value="Muz" checked> Muž
         <br>
         <input type="radio" name"pohlavi" value="Zena"> Žena
         </fieldset>
           <fieldset>
           <legend>Tělesné proporce</legend>
         <label for="vaha">vaha: </label> <input type="number" name="vaha" id="vaha" required> kg
         <br>
         <label for="vyska">Výška: </label><input type="number" name="vyska" id="vyska" required> cm
         </fieldset> 
         <input type="submit" name="submit" value="Potvrď">
         </form>
  </body>
</html>
<?php
}
else 
{
 //BMI
$vyska_v_m= $_POST['vyska']/100;

$bmi=$_POST['vaha']/($vyska_v_m*$vyska_v_m);
echo "Zákazník / Zákaznice: ".$_POST['jmeno']." ".$_POST['prijmeni'];
echo "<br>";
echo "Vaše vaha je: ".$_POST['vaha']."kg";
echo "<br>";
echo "Vaše výška je: ".$_POST['vyska']."cm";
echo "<br>";
echo "BMI = ".$bmi;
echo "<br>" ;
if ($bmi<=20) {echo "podváha";} 
elseif ($bmi<=23) {echo "normální váha";} 
elseif ($bmi<=26) {echo "lehká nadváha";} 
elseif ($bmi<=30) {echo "zvýšená nadváha";} 
elseif ($bmi<=35) {echo "obezita I. stupně";} 
elseif ($bmi<=40) {echo "obezita II. stupně";} 
else {echo "obezita III. stupně";}
echo "<br>" ;echo "<br>" ;
unset($_POST['submit']);
header( "refresh:15;url=bmi.php" );
}
?>