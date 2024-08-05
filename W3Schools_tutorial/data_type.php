<!DOCTYPE html>
<html>
<body>

<h2>
	<a href="index.php">Home Page</a>
</h2>

<h3>
	<pre>
<?php
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";

$z = 5;
var_dump($z);
echo "<br>";

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";
print_r($cars);
echo "<br>";

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

$myCar = new Car("red", "Volvo");
var_dump($myCar);
echo "<br>";
print_r($myCar);
echo "<br>";

$n = null;
var_dump($n);
echo "<br>";
?>
	<pre>
</h3>

<h2>
    <a href="index.php">Home Page</a>
</h2>

</body>
</html>