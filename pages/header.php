<?php
	session_start();
	require("include/smenu.php");
?>
<div class="ui fixed borderless menu" style="position: fixed; ">
        <div class="ui container">
<a class="header item" href="<?php echo $Web_Root;?>"><img src="<?php echo $logo;?>" style="width: 90px; height: 30px; "></a>
<!--a class="header item" href="<?php echo $Web_Root;?>"><img src="/logo-20180616.svg" style="width: 90px; height: 30px; "></a-->
	<?php
		for ($i=1;$i<=$totmn;++$i) {
	?>
            <a class="item" href="<?php echo $Web_Root.$mnlink[$i];?>"><i class="<?php echo $mnicon[$i];?>"></i> <?php echo $mnname[$i];?></a>
            <?php }
	?>
            
            <div class="right menu">
              
              <?php if ($_SESSION["username"]) { ?>
	<a href="/user/1787" style="color: inherit; ">
              <div class="ui simple dropdown item">
                yemaster <i class="dropdown icon"></i>
                <div class="menu">
                  <a class="item" href="/user/1787/edit"><i class="edit icon"></i>修改资料</a>
                  
                  <a class="item" href-post="/logout?url=%2Fdiscussion%2Fglobal"><i class="power icon"></i>注销</a>
                </div>
	<?php }else { ?>
	<div class="item">
                    <a class="ui button" style="margin-right: 0.5em; " href="login.php">
                        登录
                    </a>
                    <a class="ui primary button" href="reg.php">
                        注册
                    </a>
                </div>
	<?php }?>
              </div>
              </a>
                
            </div>
        </div>
    </div>