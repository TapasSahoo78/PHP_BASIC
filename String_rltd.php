<?php 

$data = "Hello,Good Morning.Please checkout my ppt videos";
$length = strlen($data);

echo "The length of the String is {$length}"."<br>";

$WordCount = str_word_count($data);
echo "The length of the String is {$WordCount}"."<br>";


echo str_replace("Sahoo","Tapas","Awesome Sahoo")."<br>";//Case-Sensitive

echo str_ireplace("SaHoO","Tapas","Awesome Sahoo")."<br>";//Case In-Sensitive


$name = "Tapas|Amit|Tina";
echo str_replace("|",",",$name);






?>