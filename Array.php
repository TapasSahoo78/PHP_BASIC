<?php 

$names = array("Tapas","Tina","Amit","Sourav");
//$names[5] = "Like";
//echo "<pre>";
//print_r($names);

//echo $names[2]."<br>";

$arrayLength = count($names);
echo $arrayLength."<br>";


echo "<ul>";
for ($i=0; $i <$arrayLength ; $i++) { 
	//echo "<br>".$names[$i]."<br>";
	echo "<li>".$names[$i]."<li>";	
}
echo "</ul>";





?>