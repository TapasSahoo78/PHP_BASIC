<?php 

echo Circle();
echo "<br/>";
echo Power();



function Circle(){
$pi = 3.14;
$radius = 5;

$AreaOfCircle = $pi*$radius*$radius;
//echo $AreaOfCircle; 
return $AreaOfCircle;
}


function Power(){
$base = 5;
$power = 2;

$PoweOfNumber = pow($base,$power);
//echo $PoweOfNumber;
return $PoweOfNumber;
}


?>