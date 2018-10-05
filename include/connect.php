<?php
	$conn = new mysqli($Mysql_Server, $Mysql_User, $Mysql_Passwd, $Mysql_DataBase);
	if ($conn->connect_error) {
		die("连接失败: " . $conn->connect_error);
	} 
	

?>