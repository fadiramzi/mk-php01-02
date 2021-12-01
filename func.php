<?php
    // implementation
    function printMsg($name,$msg) // msg = How are u?
    {
        //
        //
        //
        $msgAt = date('y-m-d');
        $msg = '<span>at : '.$msgAt.', </span><b>From '.$name.':</b> '.$msg;
        return $msg; // From Fadi: How are u?
    }

    // Calling
    $newMsg1 = printMsg("Ahmed","H R U?");
    $newMsg2 = printMsg("Fadi","Fine");
    $newMsg3 = printMsg("Ali","There is a problem!");
    echo $newMsg1;
    echo '<br/>';
    echo $newMsg2;
    echo '<br/>';
    echo $newMsg3;
?>