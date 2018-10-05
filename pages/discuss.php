<!DOCTYPE html>
<html lang="zh-CN">
<head data-csrf-token="">
<meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=1200">
    <link rel="icon" href="/logoIcon.png">
    <title>论坛 - OICUSS</title>
    <link href="https://cdnjs.loli.net/ajax/libs/semantic-ui/2.3.3/semantic.min.css" rel="stylesheet">
    <link href="tomorrow.css" rel="stylesheet">
    <link href="mathjax.css" rel="stylesheet">
    <link href="https://cdnjs.loli.net/ajax/libs/KaTeX/0.9.0/katex.min.css" rel="stylesheet">
    <link href="https://cdnjs.loli.net/ajax/libs/morris.js/0.5.1/morris.css" rel="stylesheet">
    <link href="style.css?20180925" rel="stylesheet">
    <link href="https://fonts.loli.net/css?family=Fira+Mono" rel="stylesheet">
    <link href="https://fonts.loli.net/css?family=Lato:400,700,400italic,700italic&subset=latin" rel="stylesheet">
    <link href="https://fonts.loli.net/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext" rel="stylesheet">
    <script async="" src="https://www.google-analytics.com/analytics.js"></script><script src="https://cdnjs.loli.net/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-75865916-2', 'auto');
      ga('send', 'pageview');

    </script>
    <style>
      bktitle {
        color:#000000;
      }
    </style>


</head>
<body>
    <?php require("pages/header.php");?>
    <div class="ui main container">

<h4 class="ui top attached block header">板块列表</h4>
        <div class="ui bottom attached segment">
            <div style="height: 15px; "></div>
            <div class="ui two column center aligned padded grid">
	<table class="ui very basic table">
	  <thead>
		<tr>
		  <th width=100>标题</th>	
		  <th></th>
		</tr>
	  </thead>
	<tbody>
		<?php
			for ($i=1;$i<=$totbk;++$i) {
				?>
				<tr>
					<td><img src="<?php echo $Web_Root.$bkicon[$i];?>" /></td>
					<td><a href="bankuai.php?id=<?php echo $bkid[$i];?>"><?php echo $bkname[$i];?></a></td>
				</tr>
				<?php
			}
		?>
	</tbody>
	</table>
                <!--<table class="ui very basic table">
          <thead>
            <tr>
              <th width=50>编程交流</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            
                <tr>
                    <td><div style="float:left"><img src="images/bankuai/b1.gif" /></div></td>
                    <td><div style="float:left"><a class="bktitle" href="bk.php?id=1"><b>程序交流</b></a><br>版主: 1911003108</div></td>
                </tr>
                <tr>
                    <td><div class="float:left"><img src="images/bankuai/b2.gif" /></div></td>
                    <td><div class="float:left"><a class="bktitle" href="bk.php?id=2"><b>OI问题与题解</b></a></div></td>
                </tr>
                <tr>
                    <td><div class="float:left"><img src="images/bankuai/b3.gif" /></div></td>
                    <td><div class="float:left"><a class="bktitle" href="bk.php?id=3"><b>网页相关</b></a><br>版主: officeyutong</div></td>
                </tr>
            
          </tbody>
        </table>
                <table class="ui very basic table">
          <thead>
            <tr>
              <th width=50>论坛事务</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            
                <tr>
                    <td><div style="float:left"><img src="images/bankuai/b4.gif" /></div></td>
                    <td><div style="float:left"><a class="bktitle" href="bk.php?id=4"><b>公告版</b></a></div></td>
                </tr>
                <tr>
                    <td><div class="float:left"><img src="images/bankuai/b5.gif" /></div></td>
                    <td><div class="float:left"><a class="bktitle" href="bk.php?id=5"><b>建议与申请</b></a></div></td>
                </tr>
                <tr>
                    <td><div class="float:left"><img src="images/bankuai/b6.gif" /></div></td>
                    <td><div class="float:left"><a class="bktitle" href="bk.php?id=6"><b>管理事务</b></a></div></td>
                </tr>
            
          </tbody>
        </table>
                <table class="ui very basic table">
          <thead>
            <tr>
              <th width=50>日常交流</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            
                <tr>
                    <td><div style="float:left"><img src="images/bankuai/b7.gif" /></div></td>
                    <td><div style="float:left"><a class="bktitle" href="bk.php?id=7"><b>程序交流</b></a><br>版主: howtolearn</div></td>
                </tr>
                <tr>
                    <td><div class="float:left"><img src="images/bankuai/b8.gif" /></div></td>
                    <td><div class="float:left"><a class="bktitle" href="bk.php?id=8"><b>OI问题与题解</b></a><br>版主: 白离离</div></td>
                </tr>
                <tr>
                    <td><div class="float:left"><img src="images/bankuai/b9.gif" /></div></td>
                    <td><div class="float:left"><a class="bktitle" href="bk.php?id=9"><b>膜人专区</b></a><br>版主: newworld</div></td>
                </tr>
            
          </tbody>
        </table>
                <table class="ui very basic table">
          <thead>
            <tr>
              <th width=50>编程交流</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            
                <tr>
                    <td><div style="float:left"><img src="images/bankuai/b10.gif" /></div></td>
                    <td><div style="float:left"><a class="bktitle" href="bk.php?id=10"><b>oierbbs大赛</b></a></div></td>
                </tr>
            
          </tbody>
        </table>-->
            </div>
        </div>



</div>
</div>
<?php require("pages/footer.php");?>

<script src="https://cdnjs.loli.net/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
<script src="https://cdnjs.loli.net/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="/script.js?20180718"></script>
</body>
</html>




