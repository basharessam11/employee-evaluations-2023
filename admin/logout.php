<?php
setcookie("login1", $md5, time() - (86400 * 30), "/"); // 86400 = 1 day
setcookie("login2", $md55, time() - (86400 * 30), "/"); // 86400 = 1 day
	
header("location:login.php");
?>