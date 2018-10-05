




<!DOCTYPE html>
<html lang="zh-CN">
<head data-csrf-token="">
<meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=1200">
    <link rel="icon" href="/logoIcon.png">
    <title>发表主题 - OICUSS</title>

    <link href="https://cdnjs.loli.net/ajax/libs/semantic-ui/2.3.3/semantic.min.css" rel="stylesheet">
    <link href="tomorrow.css" rel="stylesheet">
    <link href="mathjax.css" rel="stylesheet">
    <link href="https://cdnjs.loli.net/ajax/libs/KaTeX/0.9.0/katex.min.css" rel="stylesheet">
    <link href="https://cdnjs.loli.net/ajax/libs/morris.js/0.5.1/morris.css" rel="stylesheet">
    <link href="style.css?20180925" rel="stylesheet">
    <link href="https://fonts.loli.net/css?family=Fira+Mono" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/editormd.css" />
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


<style type="text/css">
    .am-panel-title{
    font-size: 1.6em;
    }
</style>
<div class="padding">
  <div id="layout">
            <header>
	<h1>新主题</h1>
	<form action="api/newpost.php" method="post" class="ui form">
	
	<div style="float:left;width:50%"><input type="text" name="title" id="tt" placeholder="标题" /><input type="hidden" name="message" id="msg"/></div>
	<div style="float:left;width:20%"><select name="fby" id="fby"><?php 
for($i=1;$i<=$totbk;$i++) {
?>
	<option value="<?php echo $i;?>" <?php if ($i==$thisid) echo "selected";?>><?php echo $bkname[$i];?></option>
<?php
}
?></select></div>
	<div style="float:left;width:30%">
	<button class="ui labeled submit icon button" onclick="msg.value=testEditor.getHTML()" /><i class="icon edit"></i>提交</button></div>
	</form>
            </header>
            <div id="test-editormd">
                <textarea style="display:none;">
## 这是我的新主题
内容
```cpp
#include <iostream>

using namespace std;

int main() {
	cout << "Hello, World!";
	return 0;
}
```
</textarea>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/editormd.min.js"></script>
        <script type="text/javascript">
			var testEditor;

            $(function() {
                testEditor = editormd("test-editormd", {
                    width   : "90%",
                    height  : 640,
	saveHTMLToTextarea: true,
	    tex : true,
                    syncScrolling : "single",
                    path    : "editor/lib/"
                });
                
                /*
                // or
                testEditor = editormd({
                    id      : "test-editormd",
                    width   : "90%",
                    height  : 640,
                    path    : "editor/lib/"
                });
                */
            });
        </script>
</div>

<script type="text/javascript">
$(function () {
    function render(output, input) {
      $.post('/api/markdown', { s: input.val(), _csrf: document.head.getAttribute('data-csrf-token') }, function (s) {
        // console.log(s);
        output.html(s);
      });
    }
    $("#preview_tab").click(function () {
      $("#pv-title").text($("#title").val());
      $("#pv-content").text('Loading...');
      render($("#pv-content"), $("#content"));
    });
    $('.tabular.menu .item').tab();
})
</script>
</div>
    <?php require("pages/footer.php");?>

<script src="https://cdnjs.loli.net/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
<script src="https://cdnjs.loli.net/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="script.js?20180718"></script>
</body>
</html>