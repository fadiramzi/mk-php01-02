<?php


$cars = array(
    'Kia',
    'BMW',
    'Hyndai',
    'XYZ',
    'UUU'
);

    $length = count($cars); //5
    $str = '';
   
    foreach($cars as $car)
    {
    
        if(strpos($car,'a') > -1)
        {
            $str = $str.'<p style="color:red;">'.$car.'</p><br/>';   
        }
        else{
            $str = $str.'<p style="color:green;">'.$car.'</p><br/>';   
        }
    }
    echo $str;
?>