<?php
    $file_name = $file_content = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $file_name = $_POST["file_name"];
        $file_content = $_POST["file_content"];
        create_file($file_name, $file_content, "w");
    }

    function create_file($name, $content, $mode) {
        $name = "$name.txt";
        $myfile = fopen($name, $mode) or die("Unable to open file");
        fwrite($myfile, $content);
        fclose($myfile);
    }
?>

<h1>File Create/Write</h1>

<p>
    If you use fopen() on a file that does not exist, <br>
    it will create it, given that the file is opened for writing (w) or appending (a).
</p>

<h2>Create files</h2>
<p>
    Create and write a file if it doesn't exist or overwriting it if exist.
</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    Enter file name: 
    <input type="text" name="file_name" value="<?php echo $file_name;?>">
    <br><br>
    Enter file content: 
    <textarea name="file_content" rows="5" cols="40"><?php echo $file_content;?></textarea>
    <br><br>
    <input type="submit" name="sumbmit" value="Submit">
</form>


<h2>
	<a href="index.php">Home Page</a>
</h2>