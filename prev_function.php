<!-- It is used to return the immediate previous element from an array of the element which is currently pointed by internal pointer -->

<?php 
$arr = array("Ram","Shyam","Jadu","Amit");

echo current($arr)."<br/>";//print first element

echo next($arr)."<br/>";//print 2nd element(next)

echo next($arr)."<br/>";//print 3rd element(next)

echo next($arr)."<br/>";//print 4th element(next)

echo prev($arr);


?>