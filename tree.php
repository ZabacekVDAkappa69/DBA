<head>
       <meta http-equiv="refresh" content="0.2"> 
</head>
<style type="text/css">
*{
text-align: center;
color: rgb(0,<?php echo rand(75,255); ?>,0) ;  
animation-duration: 500ms;
   animation-name: blink;
   animation-iteration-count: infinite;
   animation-direction: alternate;
}
@keyframes blink {
   from {
      opacity: 1;
   }
   to {
      opacity: 0;
   }
 }
</style>
<?php
//*for($i=100,$j=1,$k=1;$i;$i--,$j+=2,$k=2)echo str_pad(str_repeat($j<2?'*':0,$j-$k),$i+$j-(!$k?1:2),' ',0)."\n";           **/
function Tenenbaum($n)
{
$r="<br/>";
$x=2;
$v=" ";
$z="*";
$l=str_repeat($v,$n);
echo "$l*$r".$l."*$r";

for($i=1;$i<=$n;$i++)
{
$s=$n-3;
$p=str_repeat($v,$s);
$q=str_repeat($z,5);
echo str_repeat($v,$n-$i).str_repeat($z,$i+$x).$r;

if($i==$n)
{
echo "$p$q$r$p$q$r$p$q";
}
$x+=1;
}
}

Tenenbaum(46);
?>