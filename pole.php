<?php
    $fotogalerie[1]["nazev"]= "adaptační kurz";
    $fotogalerie[1]["pocet"]= 100;
    $fotogalerie[2]["nazev"]= "lyžarský kurz";
    $fotogalerie[2]["pocet"]= 50;
    $fotogalerie[3]["nazev"]= "sportovní kurz";
    $fotogalerie[3]["pocet"]= 30;
    $fotogalerie[4]["nazev"]= "Stužkovací večírek";
    $fotogalerie[4]["pocet"]= 10;
    
    var_dump($fotogalerie);
    $znaky=range("F","Q");
    $retezec=implode(" |©| ",$znaky);
    echo $retezec;
    
    $pole=explode(" |©| ", $retezec);
    var_dump($pole);
?>