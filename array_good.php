<?php
// declare string array
$cars = array(
    'Kia',
    'BMW',
    'Hyndai',
    'XYZ',
    'UUU'
);
// functions
// Append new string to the old passed one and return final string based on strpos condition
function appendStr($str,$car)
{
    $str = $str.'<p style="color:'.(strpos($car,'a') > -1?'red':'green').';">'.$car.'</p><br/>';
    return $str;
}
// iterate cars array using for loop
// using appendStr to accumlate final string
function coloringCar($cars)
{
    $length = count($cars); //5
    $str = '';
    for($c=0; $c < $length ; $c++)
    {
        $car = $cars[$c];
        $str = appendStr( $str ,$car);      
    }
    return $str;
}

// use function and send output to the brwoser
echo coloringCar($cars);
?>