<?php
include"inc/sql.php";
$num='@'.filter_var($_POST['quesOrder'], FILTER_SANITIZE_STRING);

$sql->update1('num',"1=1",["num"=>"$num"]);
?>