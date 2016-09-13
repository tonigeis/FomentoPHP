<!DOCTYPE html>
<html>
<body>

<?php
function familyName($fname, $year) {
	$age = date('Y') - $year;
    echo "$fname Refsnes. Born in $year. He/She is $age years old <br>";
}

familyName("Hege","1975");
familyName("Stale","1978");
familyName("Kai Jim","1983");
?>

</body>
</html>