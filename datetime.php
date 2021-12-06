<?php
$timestamp = 1638805158;
date_default_timezone_set('Asia/Baghdad');
echo date('Y/m/d h:i a',$timestamp);

$str = "10:30pm";
$t = strtotime($str);
echo date('h:i a',$t);
?>