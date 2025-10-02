<?php

include"inc/sql.php";
$name=filter_var($_POST['orgName'], FILTER_SANITIZE_STRING);

$sql->update1('user',"1=1",["name_c"=>"$name"]);
echo 1;