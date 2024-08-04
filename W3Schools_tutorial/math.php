<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>
    <pre>
<?php
echo "Value of PI: ";
echo pi();
echo "<br>";

$number_list = array(0, 150, 30, 20, -8, -200);
echo "List of values: 0, 150, 30, 20, -8, -200\n";
echo "Minimum value: " . min($number_list) . "\n";
echo "Maximum value: " . max($number_list) . "\n";
echo "<br>";

echo "Other functions: \n";
echo "Absolute «abs(-6.7)»: " . abs(-6.7);
echo "<br>";
echo "Square «root sqrt(9)»: " . sqrt(9);
echo "<br>";
?>
    </pre>
</h3>

<h2>
	<a href="index.php">Home Page</a>
</h2>
</body>
</html>