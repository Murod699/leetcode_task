<?php

$x = 4;
// x^2 - S = 0;
function mySqrt($x) {
    $s = 1.0;
    while (abs($s*$s-$x)>0.00001) 
    {
    $s = ($s*$s + $x)/2./$s; 
    }
    return floor($s);
}
