<?php
 
class MyClass
{
  public $prop1 = "I'm a class property!";
 
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
 
$obj = new MyClass;
$obj2 = new MyClass;


echo $obj->getProperty(); // Get the property value
echo $obj2->getProperty(); // Get the property value


$obj->setProperty("I'm a new property value!"); // Set a new one
$obj2->setProperty("I belong to the second instance!"); // Set a new one
 
echo $obj->getProperty(); // Read it out again to show the change
echo $obj2->getProperty(); // Read it out again to show the change

 
?>