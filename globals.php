<?php

$x = 5;
$y = 7;

function sum($x, $y)
{
    $GLOBALS['z'] = $x + $y;
}

sum($x, $y);

echo $z;
?>