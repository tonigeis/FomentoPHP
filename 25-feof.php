<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
$string = "Vector";
$count = 1;

while(!feof($myfile)) {
	$line = fgets($myfile);
  //if(strpos($line = fgets($myfile), $string)){
  	echo $count . " - (" . (strlen($line) - 2) . ") - (" . str_word_count($line) . ") - " . $line . "<br>";
  //}
  $count++;
}
fclose($myfile);
?>

</body>
</html>