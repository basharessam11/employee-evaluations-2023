<?php
include"inc/sql.php";



$name=filter_var($_POST['name'], FILTER_SANITIZE_STRING);
if (!empty($name)) {
	# code...

 $sql->select1("far"," where name='$name'");

if ($sql->res1->num_rows>=1) {
	echo 2;
}else{
	$sql->insert('far',["name"=>"$name"]);
	echo 1;
}

}else{
echo 3;
}
