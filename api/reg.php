<?php
	require("../include/config.php");
	$uname=$_POST["username"];
	$passwd=$_POST["password"];
	$rpass=$_POST["rpass"];
	if (strlen($passwd)<6) {
		?>
		<script>alert("密码不能少于6位!");history.go(-1);</script>
		<?php
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
	$sql = "SELECT id, name, password FROM users";
  	$result = $conn->query($sql);
  	$totus=(int)(0);
	while ($row = $result -> fetch_assoc()) {
		++$totus;
		$usid[$totus]=$row["id"];
		$usname[$totus]=$row["name"];
	 }
  	$sql = "SELECT `id`, `icon` FROM `users` WHERE `name`='$uname'";
  	$result = $conn->query($sql);
  	$totbk=(int)(0);
  	if ($result->num_rows > 0) { 
	?>
	<script>
	alert("用户名已经存在!");
	history.back(-1);
	</script>
	<?php
	}
	else {
		$passwd = md5($passwd);
		$sql = "INSERT INTO users (id, name, icon, password) VALUES ('".(int)($totus+1)."','$uname', '/image/user/u".(int)($totus+1).".jpg', '$passwd')";
		if ($conn->query($sql) === TRUE) {
			session_start();
			$_SESSION["username"]=$uname;
			$_SESSION["id"]=(int)($totus+1);
    			?>
				<script>
					alert("注册成功!");
					history.go(-2);
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
	}
?>