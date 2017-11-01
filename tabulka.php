<head>
       <!-- <meta http-equiv="refresh" content="0.1"> --> 
</head>
<style type="text/css">
*{
text-align: center;
color: rgb(<?php echo rand(0,255); ?>,<?php echo rand(0,255); ?>,<?php echo rand(0,255); ?>) ;  
}
table{
background-color: rgb(<?php echo rand(0,255); ?>,<?php echo rand(0,255); ?>,<?php echo rand(0,255); ?>) ;
}
td{
    background-color: rgb(<?php echo rand(0,255); ?>,<?php echo rand(0,255); ?>,<?php echo rand(0,255); ?>) ;
}
</style>
<?php
$radky = 30;
$sloupce = 5;
//*radky*// 
function getRandomWord($len = 10) {
    $word = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}
if($sloupce > 0 && $radky > 0) {
echo "<table border='2px'>";
for($c=1;$c<=$radky;$c++)
{
 echo "<tr>";
  for($s=1;$s<=$sloupce;$s++){
       echo "<td>".getRandomWord()."</td>";
  } 
   echo "</tr>";
}

echo "</table>";
   }
//* tabulka násobilky **/   
$cols = 10;
$rows = 10;   
   
   
   echo "<table border=\"1\">";

for ($r =0; $r < $rows; $r++){

    echo('<tr>');

    for ($c = 0; $c < $cols; $c++)
        echo( '<td>' .$c*$r.'</td>');

    echo('</tr>');

}

echo("</table>");
?>