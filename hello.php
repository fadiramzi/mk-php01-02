
<!DOCTYPE html>
<html>
<body>

<h1>Hello, World! Example</h1>

<?php
    $name = 'Fadi Ramzi Mohammed'; // string
    $age = 27; // integer
    $hasCar = true; // one byte from // boolean
    $salary = 750.5; // float (32 bit => 4 bytes), double(8 bytes)
    $AGE = '25 years';
    // contactenation
    $p = 'This is '.$name.', age is: '.$age.', his salary is: '.$salary.'IQD';
    $nameCharsCount = strlen($name); // camel case
    $wordsCount = str_word_count($p);
    $pNew = str_replace("Mohammed","Ahmed", $p);
    echo $pNew ;
    echo "<br/>";
    echo $wordsCount;
    echo "<br/>";
    $output = is_float($age);
    echo $output;
?>

</body>
</html>