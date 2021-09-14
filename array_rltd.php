<?php 
$Color1 = array("Red","Yellow","Blue");
$Color2 = array("Green","Red","Blue","Black");

ArrayUnion($Color1,$Color2);


function ArrayUnion($Color1,$Color2)
{
	$merge = array_merge($Color1,$Color2);
	echo "<pre>";
    print_r($merge);


    $res = array_unique($merge);
    echo "<pre>";
    print_r($res);

}

?>