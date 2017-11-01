   <?php
     $password = "testing123";
     if(isset($_POST['submit'])){
     if($_POST['heslo']==$password){
  $something = "Dobrý den";
  echo "Úspěšně přihlášen!<br>";
  echo $something;
  echo "<br>";                 
  $today = date("H:i:s Y-m-d");
  echo "Dnes je: " . $today . "<br>";
     }}else{
     ?>
         <form method="POST">
         Zadej heslo: <input type="password" name="heslo">
         <br>
         <input type="submit" name="submit">
     <?php
     };
/*
<?php
  $something = "Dobrý den";
  echo $something;
  echo "<br>";                 
  $today = date("H:i:s Y-m-d");
  echo "Dnes je: " . $today;   */
?>