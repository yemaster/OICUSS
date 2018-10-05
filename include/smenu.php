<?php
	mysqli_query($conn,"SET NAMES utf8");
	$sql = "SELECT name, icon, link FROM menu";
	$result = $conn->query($sql);
	$totmn=(int)(0);
	while($row = $result->fetch_assoc()) {
		++$totmn;
		$mnname[$totmn]=$row["name"];
		$mnicon[$totmn]=$row["icon"];
		$mnlink[$totmn]=$row["link"];
   	}
?>