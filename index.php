<?php
  require("include/config.php");
  require("include/connect.php");
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
$sql = "SELECT id, title, message, writer, date FROM threads WHERE atbk=4";
  	$result = $conn->query($sql);
  	$tottd=(int)(0);
	while ($row = $result -> fetch_assoc()) {
		++$tottd;
		$tdid[$tottd]=$row["id"];
		$tddate[$tottd]=$row["date"];
		$tdtitle[$tottd]=$row["title"];
		$tdwriter[$tottd]=$row["writer"];
	 } 
  require("pages/index.php");
?>
