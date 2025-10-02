<?php
include"inc/sql.php";


$id=filter_var($_POST['id'], FILTER_VALIDATE_INT);

$sql->delete1("far","where id=$id");
		
		 

		echo 1;
	
