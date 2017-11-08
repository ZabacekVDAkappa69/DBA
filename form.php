<?php
if(!isset($_POST['submit'])){
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Something</title>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='form.css'>
    <script type="text/javascript" src="form.js"></script>
  </head>
  <body>
    <form method="POST">
         <label for="hesla">Zadej heslo: </label><input type="password" name="heslo"  id="hesla" required>
         <br>
         <input type="submit" name="submit" value="Potvrď">
  </body>
</html>
<?php
}
else 
{
if($_POST['heslo']=="123abc"){

echo "<link rel='stylesheet' href='form.css'>" ;
echo "<script type='text/javascript' src='form.js'></script>";
echo "Welcome here .....";
echo "<br>";
echo date("Y-m-d H:i:s");
echo "<br>";
echo "Odhlášení za: <span id='time'>10</span> sekund!";
unset($_POST['heslo']);
header( "refresh:10;url=form.php" );
}
else
{                                      
echo "<link rel='stylesheet' href='form.css'>" ; 
echo "<script type='text/javascript' src='form.js'></script>";
echo "Špatné heslo: ".$_POST['heslo'];   
echo "<br>";
echo "Odhlášení za: <span id='time'>10</span> sekund!";
unset($_POST['heslo']);
header( "refresh:10;url=form.php" );
}
}
?>