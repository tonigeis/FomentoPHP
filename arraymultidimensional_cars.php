<!DOCTYPE html>
<html>
<body>

<?php
define("MAXSTOCK", 20);

$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
    
for ($row = 0; $row < count($cars); $row++) {
  if ($cars[$row][1] < MAXSTOCK) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < count($cars[$row]); $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }
}
?>

</body>
</html>