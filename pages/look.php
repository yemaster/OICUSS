




<!DOCTYPE html>
<html lang="zh-CN">
<head data-csrf-token="">
<meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=1200">
    <link rel="icon" href="/logoIcon.png">
    <title><?php echo $tdtitle[$thisid];?> - OICUSS</title>
<!-- loj.ac -->
<!-- new.loj.ac:52800 -->

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
    <?php require("pages/header.php");?>
    <div class="ui main container">


<style type="text/css" xmlns:style="http://www.w3.org/1999/xhtml">
.small{
  font-size: 0.7em;
}
</style>
<div class="padding">
  <div class="ui breadcrumb">
    <div class="section">讨论</div>
    <i class="right angle icon divider"></i>
    
      <a href="/discussion/global" class="section"><?php echo $bkname[$tdatbk[$thisid]];?></a>
    
  </div>
  <h1><?php echo $tdtitle[$thisid];?></h1>
 	<p style="font_size: 0.7em"><img style="vertical-align: middle;" src="<?php echo $Web_Root.$usicon[$tdwriter[$thisid]];?>" width="32" height="32">
 		<a href="/user/7572"><?php echo $usname[$tdwriter[$thisid]];?></a> 于 <?php echo $tddate[$thisid];?>发表
        
 	</p>
  <div class="ui existing segment">
	  <div id="content" class="font-content"><div style="position: relative; overflow: hidden; "><p><?php echo $tdmessage[$thisid];?></p>
</div></div>
  </div>
  
  <!--<div class="ui comments" style="max-width: none;">
    <h3 class="ui dividing header">共 2 条回复</h3>
    
      <div class="comment">
        <a class="avatar">
          <img src="//gravatar.loli.net/avatar/c757dd2ceba214444963484733a25c79?s=120&amp;d=mm">
        </a>
        <div class="content">
          <a class="author" href="/user/4827">AristocratMarser</a>
          <div class="metadata">
            <span class="date">2018-09-28 15:37:33</span>
          </div>
          <div class="text font-content"><div style="position: relative; overflow: hidden; "><p>&#x4F3C;&#x4E4E;&#x628A;lantern&#x5173;&#x6389;&#x5C31;&#x53EF;&#x4EE5;&#x4E86;qwq</p>
</div></div>
          
        </div>
      </div>
    
      <div class="comment">
        <a class="avatar">
          <img src="//gravatar.loli.net/avatar/68c6c07b0244c55d483fd2b0d744850a?s=120&amp;d=mm">
        </a>
        <div class="content">
          <a class="author" href="/user/4696">StudyingFather</a>
          <div class="metadata">
            <span class="date">2018-09-27 23:16:29</span>
          </div>
          <div class="text font-content"><div style="position: relative; overflow: hidden; "><p>+1 &#x4F3C;&#x4E4E;&#x62A5;&#x4E86;521</p>
</div></div>
          
        </div>
      </div>
    
  </div>-->
  <div style="margin-bottom: 50px; ">
    
<div style="text-align: center; ">
  <div class="ui pagination menu" style="box-shadow: none; ">
    <a class=" disabled icon item" id="page_prev">
      <i class="left chevron icon"></i>
    </a>
    

    

    

    

    <a class="active item" href="/article/888?page=1">1</a>

    

    

    

    <a class=" disabled icon item" id="page_next">
      <i class="right chevron icon"></i>
    </a>
  </div>
</div>



  </div>
  
   
   <form class="ui reply form" method="post" action="/article/888/comment">
      <div class="field">
        <textarea name="comment"></textarea>
      </div>
      <button type="submit" class="ui labeled submit icon button">
        <i class="icon edit"></i> 回复
      </button>
   </form>
   
</div>
</div>
    <div class="ui vertical footer segment">
      <div class="ui center aligned container">
        <span style="color: #999;">CopyRight &copy; <?php echo date("Y");?> <a href="<?php echo $Web_Root;?>">OICUSS</a></span>
      </div>
    </div>

<script src="https://cdnjs.loli.net/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
<script src="https://cdnjs.loli.net/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="/script.js?20180718"></script>
</body>
</html>




