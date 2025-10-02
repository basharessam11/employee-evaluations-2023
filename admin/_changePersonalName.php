<?php

include"inc/sql.php";
$name=filter_var($_POST['name'], FILTER_SANITIZE_STRING);

$sql->update1('user',"1=1",["name"=>"$name"]);
echo 1;