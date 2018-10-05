<?php
	require("include/config.php");
	require("include/connect.php");
	$thisid=$_GET["id"];
	mysqli_query($conn,"SET NAMES utf8");
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
  	$sql = "SELECT id, title, message, writer, date,atbk FROM threads";
  	$result = $conn->query($sql);
  	$tottd=(int)(0);
	while ($row = $result -> fetch_assoc()) {
		++$tottd;
		$tdid[$tottd]=$row["id"];
		$tddate[$tottd]=$row["date"];
		$tdatbk[$tottd]=$row["atbk"];
		$tdtitle[$tottd]=$row["title"];
		$tdwriter[$tottd]=$row["writer"];
		$tdmessage[$tottd]=$row["message"];
	 }
  	$sql = "SELECT id, name, password,icon FROM users";
  	$result = $conn->query($sql);
  	$totus=(int)(0);
	while ($row = $result -> fetch_assoc()) {
		++$totus;
		$usid[$totus]=$row["id"];
		$usicon[$totus]=$row["icon"];
		$usname[$totus]=$row["name"];
	 }
	require("pages/look.php");
?>