<?php 

//$a = 10;//Global variable
/*function Test()
{
	$a = 10;//Local variable
	echo $a; 
}
Test();*/

/*$a = 10;
$b = 20;

function Test()
{
	global $a,$b;
	$b = $a + $b;
}

Test();
echo $b;*/


$a = 30;
$b = 20;

function Test()
{
$GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

Test();
echo $b;
?>