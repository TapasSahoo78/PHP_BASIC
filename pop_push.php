<?php 

$names = array("Tapas","Tina","Amit","Sourav");

echo "<pre>";
print_r($names);//Before Removing

array_pop($names);
echo "<pre>";
print_r($names);

array_push($names,"John");
echo "<pre>";
print_r($names);

$student = array("Tapas","Tina","Amit","Sourav");

array_shift($student);
echo "<pre>";
print_r($student);


array_unshift($student,"John");
echo "<pre>";
print_r($student);



?>