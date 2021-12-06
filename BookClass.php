<?php
    class Book{
        // fields, attributes
        var $title;
        var $price;
        
        // constructor
        function __construct($defaultTitle, $defaultPrice)
        {
            $this->title = $defaultTitle;
            $this->price = $defaultPrice;
        }
        // methods, functions
        public function getTitle()
        {
            return $this->title;
        }

        
        
    }

    // create a new object from Book class (instance)
    // $book = new Book('TYU',15);

    // $books = array(
    //     new Book('XXG',12),
    //     new Book('OOP',80)
    // );
    // foreach($books as $b)
    // {
    //     echo "<p>".$b->getTitle()."</p>";
    // }

?>