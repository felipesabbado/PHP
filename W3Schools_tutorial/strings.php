<!DOCTYPE html>
<html>
<body>
<h3>
    <pre>
<?php
$x = "Hello world!";

echo "String x: $x\n";

echo "Tamanho da String x:\n";
echo strlen($x);
echo "<br>";

echo "Quantidade de palavras da String x:\n";
echo str_word_count($x);
echo "<br>";

echo "Posição da palavra 'world' na String x:\n";
echo strpos($x, "world");
echo "<br>";

echo "Posição da palvra 'PHP' na String x:\n";
var_dump(strpos($x, "PHP"));
echo "<br>";

echo "String x em maiúsculas:\n";
echo strtoupper($x);
echo "<br>";

echo "String x em minúsculas:\n";
echo strtolower($x);
echo "<br>";

echo "Substituir 'world' por 'nurse' na String x:\n";
echo str_replace("world", "nurse", $x);
echo "<br>";

echo "String x em invertida:\n";
echo strrev($x);
echo "<br>";	

echo "Substring da String x:\n";
echo substr($x, 6, 5);
echo "<br>";
?>
    </pre>
</h3>

<h2>
    <a href="index.php">Home Page</a>
</h2>
</body>
</html>