<?php
include"inc/sql.php";
$id=filter_var($_POST['ques_id'], FILTER_VALIDATE_INT);
$name=filter_var($_POST['ques'], FILTER_SANITIZE_STRING);
$type=filter_var($_POST['ansType'], FILTER_VALIDATE_INT);
$phone=filter_var($_POST['isMobile'], FILTER_VALIDATE_INT);
$email=filter_var($_POST['isEmail'], FILTER_VALIDATE_INT);
$optional=filter_var($_POST['optional'], FILTER_VALIDATE_INT);


$sql->update('quiz',$id,["name"=>"$name","type"=>"$type","phone"=>"$phone","email"=>"$email","optional"=>"$optional"]);

echo 1;

?>