<!DOCTYPE html>
<html>
<body>
<?php
echo "file in php! <br>";
$myfile = fopen("shivam.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("shivam.txt"));
fclose($myfile);
// file_get_contents
echo file_get_contents("shivam.txt");
echo file_put_contents("shivam.txt","thanks for reading my file");
?>
</body>
</html>