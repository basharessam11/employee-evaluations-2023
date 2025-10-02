<?php

include"inc/sql.php";
$email=filter_var($_POST['email'], FILTER_SANITIZE_STRING);

$sql->update1('user',"1=1",["email"=>"$email"]);
echo 1;