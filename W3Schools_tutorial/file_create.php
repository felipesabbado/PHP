<?php
    $file_name = $file_content = $write_mode = $read_file = "";
    $err_read = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $file_name = $_POST["file_name"];
        $file_content = $_POST["file_content"];
        $write_mode = $_POST["write_mode"];
        create_file($file_name, $file_content, $write_mode);
    }

    function create_file($name, $content, $mode) {
        if (isset($name) and $name != "") {
            $name = "$name.txt";
            $myfile = fopen($name, $mode) or die("Unable to open file");
            fwrite($myfile, $content);
            fclose($myfile);
        }
    }

    function read_file($name) {
        $name = "$name.txt";
        $myfile = fopen($name, "r") or die("Unable to open file");
        while (!feof($myfile)) {
            echo fgets($myfile) . "<br>";
        }
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
    Create and write a txt file if it doesn't exist. Choose the mode for append or overwrite.
</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    Enter file name: 
    <input type="text" name="file_name" value="<?php echo $file_name;?>">.txt
    <br><br>
    Enter file content: 
    <textarea name="file_content" rows="5" cols="40"></textarea>
    <br><br>
    Choose write mode:
    <input type="radio" name="write_mode" value="w" <?php if ($write_mode == "" or $write_mode == "w") echo "checked";?>>Overwrite
    <input type="radio" name="write_mode" value="a" <?php if (isset($write_mode) and $write_mode == "a") echo "checked";?>>Append
    <br><br>
    <input type="submit" name="sumbmit" value="Submit">
</form>

<h3>Input area:</h3>
<p>
    File content:<br>
    <?php if (!$file_name == "") read_file($file_name);?>
</p>

<h2>
	<a href="index.php">Home Page</a>
</h2>