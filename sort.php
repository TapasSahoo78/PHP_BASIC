<?php 

//$student = array("Tapas","Amit","Tina");
$student = array('Tapas','Amit','Tina');
sort($student);
//rsort($student);

echo "<ol>";
foreach ($student as $value) {
	//echo "<br>".$value."<br>";
	echo "<li>".$value."<li>";
}
echo "</ol>";




?>