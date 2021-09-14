<?php 

$pass = "Tapas";
$str_pass = password_hash($pass, PASSWORD_BCRYPT);
echo $str_pass."<br>";

$pass_check = password_verify($pass, $str_pass);
if($pass_check){
	echo "Login Successful";
}else{
	echo "Login Incorrect";
} 

/*
$pass = "Tapas";
$options = ['Cost'=>12,Salt=>'$2y$10$ym9MV8QMTc45b016rXStB.Po/s5xNCU/Evo8fFE7gmqEExsfbGYfW'];

$str_pass = password_hash($pass, PASSWORD_BCRYPT, $options);

echo strlen($str_pass)."<br>";

echo $str_pass; */


?>