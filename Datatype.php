<?php
/*
$x = 25;
echo "$x is integer<br/>";
echo var_dump($x);


$s1 = true;
$s2 = false;
echo var_dump($s1). "<br>";
echo var_dump($s2);
*/

/*
$s1 = "My name is Tapas";
$s2 = "I am Student";
echo $s1. "<br>";
echo $s2. "<br>";
echo var_dump($s1);
*/

class Program{
	function add()
	{
		$x = 10;
		$y = 20;
		echo "Sum=".($x + $y);
		echo "<br/>";
		echo "<br/>";
	}
}

$obj = new Program();
$obj->add();




$name = array("Tapas","Amit","Tina");
echo var_dump($name);
echo "<br/>";
echo "<br/>";
echo $name[1];


?>