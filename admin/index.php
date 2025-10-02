<?php
include "inc/sql.php";
//date_default_timezone_set('Asia/Kuwait');
session_start();
ob_start();
//error_reporting(0);



if (isset($_COOKIE['login1'])   ) {
 $login1=$_COOKIE['login1'];
$login2=$_COOKIE['login2'];
$sql->check("user",["md5(password)"=>"$login2","md5(phone)"=>"$login1"]);
if ($sql->check!=1) {


header("location:login.php");

}

}else{
header("location:login.php");
 }

include "inc/des/header.php";
include "inc/des/menu.php";




	

              

if (isset($_GET)) {

	if (isset($_GET['add_q']) and$_GET['add_q']=="list") {
		include "add_q.php";
	}
	if (isset($_GET['city']) and$_GET['city']=="list") {
		include "city.php";
	}
	if (isset($_GET['barcode']) and$_GET['barcode']=="list") {
		include "barcode.php";
	}
if (isset($_GET['evalForm']) and$_GET['evalForm']=="list") {
		include "evalForm.php";
	}
	if (isset($_GET['phone']) and$_GET['phone']=="list") {
		include "phone.php";
	}
	if (isset($_GET['email']) and$_GET['email']=="list") {
		include "email.php";
	}
if (isset($_GET['profile']) and$_GET['profile']=="list") {
		include "profile.php";
	}
	//dashbord
	if (empty($_GET) or isset($_GET['rate']) and$_GET['rate']=="list") {
		include"rate.php";
	}

	if (isset($_GET['write']) and$_GET['write']=="list") {
		include "write.php";
	}

	if (isset($_GET['stat']) and$_GET['stat']=="list") {
		include "stat.php";
	}

}

include "inc/des/footer.php";
ob_end_flush();

?>