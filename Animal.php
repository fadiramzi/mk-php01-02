<?php
class Animal
{
    var $name;
    var $age;
    var $color;
    function __construct($defaultName)
    {
        $this->name = $defaultName;
    }
}

class Quadruped extends Animal{
    var $newAttr;

}

class Snake extends Animal
{
    var $tall;
    
}
class Dog extends Quadruped
{
   var $legsCount;

   public function getLegsCount()
   {
       return $this->legsCount;
   }
}
class Bug extends Animal
{
   var $wings;

   public function getWingsCount()
   {
       return $this->wings;
   }
}

$dog = new Dog('Joe');
echo $dog->name;
?>