<?php

function polindrom($x){
$r = 0;
$t = $x;
if($t>=0){
while($t!= 0){
    $r = $r*10;
    $r = $r+$t%10;
    $t = floor($t/10);
}
if($x==$r){
    echo "polindrom";
}
else 
    echo "polindrom emas";
}

else echo "false";
}
polindrom(-121);
?>
