<?php
function avg($x,$y,$z)
{
    // avg = sum/count
    $avg = ($x+$y+$z)/3;
    return $avg;
}
 
echo avg(8,2,3);
?>