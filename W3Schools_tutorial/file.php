<h1>File Handling</h1>

<h2>File Handling - readfile()</h2>
<p>echo readfile("webdictionary.txt");</p>
<p>
<?php
echo readfile("webdictionary.txt");
?>
</p>

<h2>File Open/Read</h2>
<p>fopen(), fread() and fclose()</p>
<p>
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>
</p>

<h2>Read Single Line - fgets()</h2>
<p>The fgets() function is used to read a single line from a file.</p>
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>

<h2>PHP Check End-Of-File - feof()</h2>
<p>The feof() function checks if the "end-of-file" (EOF) has been reached.</p>
<p>The feof() function is useful for looping through data of unknown length.</p>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

<h2>PHP Read Single Character - fgetc()</h2>
<p>The fgetc() function is used to read a single character from a file.</p>
<p><strong>Note:</strong> After a call to the fgetc() function, the file pointer moves to the next character.</p>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>

<h2>
	<a href="index.php">Home Page</a>
</h2>