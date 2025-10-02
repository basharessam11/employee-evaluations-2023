<?php

include"inc/sql.php";
$phone=filter_var($_POST['mobile'], FILTER_SANITIZE_STRING);

$password=filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$sql->check("user",["password"=>"$password","phone"=>"$phone"]);
if ($sql->check>=1) {

$md5=md5($phone);
$md55=md5($password);

setcookie("login1", $md5, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie("login2", $md55, time() + (86400 * 30), "/"); // 86400 = 1 day
	
echo 1;
}else{
	echo 2;
}


