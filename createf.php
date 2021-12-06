<?php
    $users = array(
        "Fadi, 25, Engineer",
        "Ahmed, 25, Doctor",
        "Sara, 30, Designer"
    );
    $newFile = fopen('data/persons.txt','w') or die('Unable to create new file');
    foreach($users as $value)
    {
        $value = $value."\n ";
        fwrite($newFile,$value);
    }
    fclose($newFile);
?>