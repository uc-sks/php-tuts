<!DOCTYPE html>
<html>
<body>
<h1>My first PHP page</h1>
<?php
// string data type
$x = "Hello world!";
echo  $x ."</br>";
// integer data type
$x = 5985;
var_dump($x);
// float data type
$x = 10.365;
var_dump($x);
// boolean data type
$x = true;
// array data type
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
// object data type
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }

  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();
  // Null data type
  $x = null;
var_dump($x);
?>
</body>
</html>