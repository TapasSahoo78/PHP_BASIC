<?php 

$color = array('red','blue','yellow');
print_r($color);

$res = implode("|",$color);
echo "My favourite colors are   {$res}";


$biodata = "My name is Tapas";
$res = explode(" ",$biodata);
echo "<pre>";
print_r($res);

foreach($res as $val)
{
	echo $val;
}



?>