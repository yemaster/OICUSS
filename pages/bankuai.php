<!DOCTYPE html>
<html lang="zh-CN">
<head data-csrf-token="">
<meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=1200">
    <link rel="icon" href="/logoIcon.png">
    <title><?php echo $bkname[$thisid];?> - OICUSS</title>
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


</head>
<body>
    <?php require("pages/header.php"); ?>
    <div class="ui main container">


<div class="padding">
  <div class="ui grid">
    <div class="row">
      <div class="ten wide column">
        <div class="ui breadcrumb">
          <div class="section">OICUSS</div>
          <i class="right angle icon divider"></i>
          
            <div class="section"><?php echo $bkname[$thisid];?></div>
          
        </div>
      </div>
      <div class="six wide right aligned column">
        
          
          <a style="margin-left: 10px; " href="newpost.php" class="ui labeled icon mini button">
              <i class="write icon"></i>
              新主题
          </a>
        
      </div>
    </div>
  </div>
  <table class="ui very basic center aligned table">
    <thead>
      <tr>
        <th class="left aligned" style="width: 45%; ">标题</th>
        
        <th style="width: 10%; ">作者</th>
        <th style="width: 10%; ">回复数</th>
        <th style="width: 15%; ">发表于</th>
      </tr>
    </thead>
    <tbody>
        <?php 
	for ($i=1;$i<=$tottd;++$i) {
        ?>
        <tr>
            <td class="left aligned"><a href="look.php?id=<?php echo $tdid[$i];?>"><?php echo $tdtitle[$i];?></a></td>
            
            <td><a href="user.php?id=<?php echo $tdwriter[$i];?>"><?php echo $usname[$tdwriter[$i]];?></a></td>
            <td>10</td>
            <td><?php echo $tddate[$i];?></td>
        </tr>
    	<?php } ?>
    </tbody>
  </table>
  <br>
    
<div style="text-align: center; ">
  <div class="ui pagination menu" style="box-shadow: none; ">
    <a class=" disabled icon item" id="page_prev">
      <i class="left chevron icon"></i>
    </a>
    

    

    

    

    <a class="active item" href="/discussion/global?page=1">1</a>
    

    
      <div class="disabled item">...</div>
    

    
    <a class="item" href="/discussion/global?page=21">21</a>
    

    <a class=" icon item" href="/discussion/global?page=2" id="page_next">
      <i class="right chevron icon"></i>
    </a>
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




