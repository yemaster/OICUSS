





<!DOCTYPE html>
<html lang="zh-CN">
<head data-csrf-token="">
<meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=1200">
    <link rel="icon" href="/logoIcon.png">
    <title>登录 - LibreOJ</title>
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


<div class="ui error message" id="error" hidden></div>
<div class="ui middle aligned center aligned grid">
  <div class="row">
    <div class="column" style="max-width: 450px">
      <h2 class="ui image header">
        <div class="content">
          登录
        </div>
      </h2>
      <form class="ui large form" method="post" action="api/login.php">
        <div class="ui existing segment">
          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input name="username" placeholder="用户名" type="text" id="username" required />
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input name="password" placeholder="密码" type="password" id="password" required />
            </div>
          </div>
          <input type="submit" value="登陆" class="ui fluid large submit button" id="login" />
        </div>

        <div class="ui error message"></div>

      </form>

      <div class="ui message">
        <a href="reg.php">注册</a>
        <a href="forget.php">忘记密码</a>
      </div>
    </div>
  </div>
</div>
<script src="/libs/blueimp-md5/js/md5.min.js"></script>
</div>
    <?php require("pages/footer.php");?>

<script src="https://cdnjs.loli.net/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
<script src="https://cdnjs.loli.net/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="/script.js?20180718"></script>
</body>
</html>