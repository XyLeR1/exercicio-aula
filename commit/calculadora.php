<?php

$x = $HTTP_GET_VARS["num1"];
$y = $HTTP_GET_VARS["num2"];
$op = $HTTP_GET_VARS["operacao"];

if($op=="soma")
    $z = $x + $y;

elseif($op=="subtracao")
    $z = $x - $y;


elseif($op=="multiplicacao")
    $z = $x*$y;


else
    $z = $x/$y;

echo "O resultado e: $z";
?>
