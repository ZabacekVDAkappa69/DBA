<?php
       $hod=rand(1, 6);
       switch($hod){
       case 1:
        $vyber=1;
       break;
       case 2:
        $vyber=2;
       break;
       case 3:
        $vyber=3;
        break;
        case 4:
        $vyber=4;
        break;
        case 5:
        $vyber=5;
        break;
        case 6:
        $vyber=6;
        break; 
       }
?>
<img src="k_<?php echo $vyber ?>">
<br>
<a href="./">Obnov</a>