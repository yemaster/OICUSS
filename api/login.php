<?php
	require("../include/config.php");
	$uname=$_POST["username"];
	$passwd=$_POST["password"];
	echo md5($passwd).' '.$passwd;
?>