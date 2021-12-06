<?php
    require './BookClass.php';
    class Novel extends Book {
           var $publisher;

           function __construct($title, $price, $defaultPublisher)
           {
               parent::__construct($title, $price);
               $this->publisher = $defaultPublisher;
           }

           public function getPublisher()
           {
               return $this->publisher;
           }
    }

    $novel = new Novel('ABC',25,'Ali');

    echo $novel->title;
    echo $novel->publisher;
    
?>