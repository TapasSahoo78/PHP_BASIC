<?php 


function Mult($a,$b=5)
{
$multResult = $a * $b;
return $multResult;
}


$Output1 = Mult(10,30);//300
$Output2 = Mult(12,40);//480

echo "The multiplication of two number is {$Output1}"."<br>";
echo "The multiplication of two number is {$Output2}";
?>