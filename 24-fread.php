<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
//echo fread($myfile,filesize("webdictionary.txt"));
echo fread($myfile, 4);
fclose($myfile);
?>

</body>
</html>