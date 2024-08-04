<!DOCTYPE html>
<html>
<body>
<h3>
    <pre>
<?php
$a = 5;
$b = 5.34;
$c = "25";

echo "Número a: $a\n";
echo var_dump($a);
echo "</br>";
echo "Número b: $b\n";
echo var_dump($b);
echo "</br>";
echo "Número c: $c\n";
echo var_dump($c);
echo "</br>";

echo "Número a é inteiro\n";
var_dump(is_int($a));
echo "</br>";

echo "Número b é inteiro\n";
var_dump(is_int($b));
echo "</br>";

echo "Número a é decimal\n";
var_dump(is_float($a));
echo "</br>";

echo "Número b é decimal\n";
var_dump(is_float($b));
echo "</br>";
?>
    </pre>
</h3>

<h2>
    <a href="index.php">Home Page</a>
</h2>
</body>
</html>