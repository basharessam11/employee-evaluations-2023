<?php
include"inc/sql.php";


$id=filter_var($_POST['id'], FILTER_VALIDATE_INT);

$name=filter_var($_POST['name'], FILTER_SANITIZE_STRING);
if (!empty($name)) {
 $sql->select1("far"," where name='$name' and id !=$id");

if ($sql->res1->num_rows>=1) {
	echo 2;
}else{
	$sql->update('far',$id,["name"=>"$name"]);
	echo 1;
}


}else{
echo 3;
}
