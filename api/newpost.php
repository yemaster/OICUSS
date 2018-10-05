<?php
	session_start();
	require("../include/config.php");
	$msg=$_POST["message"];
	$title=$_POST["title"];
	$fby=$_POST["fby"];
	$writer=$_SESSION["id"];
	if (!$fby || !$msg || !$title) {
		?>
		<script>alert("请填写完整!!");history.go(-1);</script>
		<?php
		die();
	}
	if ($passwd!=$rpass) {
		?>
		<script>
			alert("密码不一致!");
			history.go(-1);
		</script>
		<?php
	}
	require("../include/connect.php");
	mysqli_query($conn,"SET NAMES utf8");
  	$sql = "SELECT id, title, message, writer, date FROM threads";
  	$result = $conn->query($sql);
  	$tottd=(int)(0);
	while ($row = $result -> fetch_assoc()) {
		++$tottd;
		$tdid[$tottd]=$row["id"];
		$tddate[$tottd]=$row["date"];
		$tdtitle[$tottd]=$row["title"];
		$tdwriter[$tottd]=$row["writer"];
	 } 
	$sql = "INSERT INTO threads (id, title, writer, message, date, atbk) VALUES ('".(int)($tottd+1)."','$title', '$writer', '$msg','".date("Y-m-d")."','$fby')";
	if ($conn->query($sql) === TRUE) {
    		?>
			<script>
				alert("发表成功!");
				history.go(-1);
			</script>
		<?php
	} else {
    		?>
			<script>
				alert("服务器繁忙，请稍后再试");
				history.go(-1);
			</script>
		<?php
	}
?>