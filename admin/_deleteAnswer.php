<?php

include"inc/sql.php";
$id=filter_var($_POST['customer_id'], FILTER_VALIDATE_INT)??0;



$sql->delete1("answer","where org_id= $id");
		$sql->delete1("org","where id= $id");
		echo 1;