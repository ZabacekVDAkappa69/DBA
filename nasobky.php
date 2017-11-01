<?php
$min=270;
$max=1485;
$cislo1=17;
$cislo2=23;
for($min; $min<=$max; $min++){
$deleni=$min/$cislo1;
$deleni2=$min/$cislo2;
if(is_int($deleni) && is_int($deleni2)){
 echo $min."<br>";
}
}
?>