<!--  A constructor allows you to initialize an object's properties upon creation of the object.

If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

Notice that the construct function starts with two underscores (__)!  -->




<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name; 
    $this->color = $color; 
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?>
 
</body>
</html>
