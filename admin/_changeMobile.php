<?php

include"inc/sql.php";
$phone=filter_var($_POST['mobile'], FILTER_SANITIZE_STRING);

$sql->update1('user',"1=1",["phone"=>"$phone"]);
echo 1;