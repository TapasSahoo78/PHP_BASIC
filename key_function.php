<!-- The key() function is an inbuild function in php which is used to return the index of the element of a given array to which the internal pointer is currently pointing  

syntax:

key($array);

 -->


 <?php 

$arr = array("Ram","Shyam","Jadu","Amit");

next($arr);//Ram[0] -> next value  1
next($arr);//Shyam[1] -> next value 2 key1+1 = 2

echo "The index of the current element of  ".key($arr);

 ?>

