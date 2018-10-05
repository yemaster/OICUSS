<?php
	require("include/config.php");
	require("include/connect.php");
	mysqli_query($conn,"SET NAMES utf8");
	$thisid=$_GET["id"];
  	$sql = "SELECT id, name, icon, manager FROM bk";
  	$result = $conn->query($sql);
  	$totbk=(int)(0);
	while ($row = $result -> fetch_assoc()) {
		++$totbk;
		$bkid[$totbk]=$row["id"];
		$bkname[$totbk]=$row["name"];
		$bkicon[$totbk]=$row["icon"];
		$bkmanager[$totbk]=$row["manager"];
	 }
	session_start();
	if (!$_SESSION["username"]) {
		header("Location: login.php");
	}
	require("pages/newpost.php");
?>