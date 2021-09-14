<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Tapas"=>"24", "Tina"=>"23", "Amit"=>"25");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

</body>
</html>


<!--  
Key=Tapas, Value=24
Key=Tina, Value=23
Key=Amit, Value=25
-->