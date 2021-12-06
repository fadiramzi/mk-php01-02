<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
   <?php  include './header.php' ?>
    
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <input type="text" name="email" required/>
        <input type="password" name="password" required/>
        <input type="submit" />
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
       echo  $_POST['email'];
    }
    
    ?>
    <?php
    include './footers/copyrights.php'
    ?>
</body>
</html>