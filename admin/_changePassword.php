<?php

include"inc/sql.php";
$oldPassword=filter_var($_POST['oldPassword'], FILTER_SANITIZE_STRING);
$password1=filter_var($_POST['password1'], FILTER_SANITIZE_STRING);
$password2=filter_var($_POST['password2'], FILTER_SANITIZE_STRING);

$sql->check("user",["password"=>"$oldPassword"]);
if ($sql->check>=1) {
	$sql->update1('user',"1=1",["password"=>"$password1"]);
echo 1;
}else{
	echo 3;
}


