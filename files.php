<?php
   $f = fopen('./data/users.txt','r') or die("Failed to open file");
   //$data = fread($f,filesize('./data/users.txt'));
   // read file line by line
   while(!feof($f))
   {
       $line = fgets($f);
       echo "<p>".$line."</p>";
   }
//    echo $data;
   // close
   fclose($f);
?>