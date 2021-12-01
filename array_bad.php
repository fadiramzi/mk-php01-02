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
    for($c=0; $c <$length ; $c++)
    {
        $car = $cars[$c];
        if(strpos($car,'a') > -1)
        {
            $str = $str.'<p style="color:red;">'.$car.'</p><br/>';   
        }
        else{
            $str = $str.'<p style="color:green;">'.$car.'</p><br/>';   
        }
    }
    return $str;
?>