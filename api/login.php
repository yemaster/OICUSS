<?php
	require("../include/config.php");
	$uname=$_POST["username"];
	$passwd=$_POST["password"];
	$passwd=md5($passwd);
	require("../include/connect.php");
	mysqli_query($conn,"SET NAMES utf8");
  	$sql = "SELECT `id`, `icon` FROM `users` WHERE `name`='$uname' and `password`='$passwd'";
  	$result = $conn->query($sql);
  	$totbk=(int)(0);
  	if ($result->num_rows > 0) { 
		session_start();
		while ($row = $result->fetch_assoc())
			$_SESSION["id"]=$row["id"];
		$_SESSION["username"]=$uname;
	?>
	<script>
	alert("登陆成功!");
	history.back(-2);
	</script>
	<?php
	}
	else {
	?>
	<script>
	alert("用户名或密码错误!");
	history.back(-1);
	</script>
	<?php
	}
?>