




<!DOCTYPE html>
<html lang="zh-CN">
<head data-csrf-token="">
<meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=1200">
    <link rel="icon" href="/logoIcon.png">
    <title>首页 - OICUSS</title>

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


<div class="padding">
  <div class="ui three column grid">
    <div class="eleven wide column">
      <h4 class="ui top attached block header">最新公告</h4>
      <div class="ui bottom attached segment">
        <table class="ui very basic table">
          <thead>
            <tr>
              <th>标题</th>
              <th>时间</th>
            </tr>
          </thead>
          <tbody>
            <?php
		for ($i = $tottd; $i>=max(1,$tottd-9);--$i) {
	?><tr>
		<td><a href="look.php?id=<?php echo $tdid[$i];?>"><?php echo $tdtitle[$i];?></a></td>
		<td><?php echo $tddate[$i];?></td></tr>
	<?php
		}
	?>
            
          </tbody>
        </table>
      </div>
      <h4 class="ui top attached block header">排名</h4>
      <div class="ui bottom attached segment">
        <table class="ui very basic center aligned table" style="table-layout: fixed; ">
          <thead>
            <tr>
	            <th style="width: 50px; ">#</th>
	            <th style="width: 170px; ">用户名</th>
	            <th>个性签名</th>
            </tr>
          </thead>
          <script>
          var lineHeight = 0;
          (function () {
            var div = document.createElement('div');
            div.style.position = 'fixed';
            div.style.left = -10000;
            div.style.visibility = 'hidden';
            div.innerText = '测试，Test.';
            document.body.appendChild(div);
            lineHeight = div.clientHeight;
          })();
          </script>
          <tbody>
            
                <tr>
                    <td>1</td>
                    <td><a href="/user/1017">cz_xuyixuan</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-1">
                      (function () {
                        var html = "<div style=\"position: relative; overflow: hidden; \"><p>&#x7BA1;&#x7406;&#x5458;&#x600E;&#x4E48;&#x628A;&#x81EA;&#x5DF1;&#x4ECE;&#x6392;&#x884C;&#x699C;&#x4E0A;&#x5220;&#x6389;&#x554A;&#xFF1F;</p>\n</div>";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-1');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>2</td>
                    <td><a href="/user/186">kczno1</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-2">
                      (function () {
                        var html = "";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-2');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>3</td>
                    <td><a href="/user/424">Stalker</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-3">
                      (function () {
                        var html = "";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-3');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>4</td>
                    <td><a href="/user/447">Marco_L_T</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-4">
                      (function () {
                        var html = "<div style=\"position: relative; overflow: hidden; \"><p>AFO</p>\n</div>";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-4');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>5</td>
                    <td><a href="/user/2576">JOHNKRAM</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-5">
                      (function () {
                        var html = "";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-5');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>6</td>
                    <td><a href="/user/698">infinityedge</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-6">
                      (function () {
                        var html = "<div style=\"position: relative; overflow: hidden; \"><h3>AFO</h3>\n</div>";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-6');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>7</td>
                    <td><a href="/user/27">zhouyuyang</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-7">
                      (function () {
                        var html = "<div style=\"position: relative; overflow: hidden; \"><h3>SZBAKNOI2018</h3>\n</div>";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-7');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>8</td>
                    <td><a href="/user/172">zx2003</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-8">
                      (function () {
                        var html = "<div style=\"position: relative; overflow: hidden; \"><p>&#x6211;&#x5C45;&#x7136;&#x8FD8;&#x5728;rank&#x699C;&#x7B2C;&#x4E00;&#x9875;</p>\n</div>";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-8');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>9</td>
                    <td><a href="/user/1020">FoolMike</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-9">
                      (function () {
                        var html = "";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-9');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>10</td>
                    <td><a href="/user/510">LzyRapx</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-10">
                      (function () {
                        var html = "<div style=\"position: relative; overflow: hidden; \"><p><font color=\"red\" size=\"3.5\"><a href=\"https://github.com/LzyRapx\">https://github.com/LzyRapx</a></font></p>  </div>";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-10');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>11</td>
                    <td><a href="/user/207">Cydiater</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-11">
                      (function () {
                        var html = "<div style=\"position: relative; overflow: hidden; \"><p>Nope</p>\n</div>";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-11');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>12</td>
                    <td><a href="/user/1325">Zrj</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-12">
                      (function () {
                        var html = "<div style=\"position: relative; overflow: hidden; \"><p>srand(19260817)</p>\n</div>";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-12');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>13</td>
                    <td><a href="/user/2909">YMDragon</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-13">
                      (function () {
                        var html = "";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-13');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>14</td>
                    <td><a href="/user/71">__stdcall</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-14">
                      (function () {
                        var html = "<div style=\"position: relative; overflow: hidden; \"><p>(&#x273F;&#x25D5;&#x203F;&#x25D5;&#x273F;)</p>\n</div>";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-14');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>15</td>
                    <td><a href="/user/53">Gunbuster</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-15">
                      (function () {
                        var html = "<div style=\"position: relative; overflow: hidden; \"><p>orz<a href=\"http://codeforces.com/profile/jumpmelon\"><font color=\"black\" size=\"3\" style=\"font-weight:bold;\">j</font><font color=\"red\" size=\"3\" style=\"font-weight:bold;\">umpmelon</font></a>AK&#x6E05;&#x534E;&#x96C6;&#x8BAD;2018</p>\n</div>";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-15');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>16</td>
                    <td><a href="/user/2149">dlhham</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-16">
                      (function () {
                        var html = "<div style=\"position: relative; overflow: hidden; \"><p>&#x8FD8;&#x6709;&#x8FD9;&#x79CD;&#x64CD;&#x4F5C;&#xFF1F;&#x6253;&#x4E00;&#x573A;&#x6BD4;&#x8D5B;&#x5C31;&#x80FD;&#x4E0A;&#x4E3B;&#x9875;</p>\n</div>";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-16');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>17</td>
                    <td><a href="/user/2781">fateice</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-17">
                      (function () {
                        var html = "";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-17');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>18</td>
                    <td><a href="/user/13">wjh</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-18">
                      (function () {
                        var html = "<div style=\"position: relative; overflow: hidden; \"><p style=\"text-align:center; height:1.5em;\">\n<a href=\"https://blog.wjh.moe/\" style=\"font-size:1.3em; color:#fff; text-shadow:0px 0px 2px rgba(246, 135, 235, 1), 0px 0px 7px rgba(246, 135, 235, 1), 0px 0px 11px rgba(246, 135, 235, 1);\">Next Dream...</a>\n</p></div>";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-18');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>19</td>
                    <td><a href="/user/1848">qiaoranliqu</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-19">
                      (function () {
                        var html = "";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-19');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
                <tr>
                    <td>20</td>
                    <td><a href="/user/1726">onion_cyc</a></td>
                    <td style="font-content">
                      <script id="user-infomation-script-20">
                      (function () {
                        var html = "<div style=\"position: relative; overflow: hidden; \"><p>CYC never dies&#xFF01;</p>\n</div>";
                        var elem = document.createElement('div');
                        elem.style = 'overflow: hidden; width: 100%; position: relative; ';
                        elem.style.maxHeight = lineHeight + 'px';
                        elem.innerHTML = html;
                        var imgs = Array.prototype.slice.call(elem.getElementsByTagName('img'));
                        for (var i in imgs) imgs[i].parentNode.removeChild(imgs[i]);
                        var script = document.getElementById('user-infomation-script-20');
                        script.parentNode.replaceChild(elem, script);
                      })();
                      </script>
                    </td>
                </tr>
             
          </tbody>
        </table>
      </div>
    </div>
    <div class="right floated five wide column">
        <h4 class="ui top attached block header">一言（ヒトコト）</h4>
        <div class="ui bottom attached center aligned segment">
          <div class="ui active centered inline loader" id="hitokoto-loader"></div>
          <script>
          $.get('https://sslapi.hitokoto.cn/?c=a', function (data) {
            if (typeof data === 'string') data = JSON.parse(data);
            $('#hitokoto-loader').removeClass('active');
            $('#hitokoto-content').css('display', '').text(data.hitokoto);
            if (data.from) {
              $('#hitokoto-from').css('display', '').text('——' + data.from);
            }
          });
          </script>
          <div style="font-size: 1em; line-height: 1.5em; display: none; " id="hitokoto-content"></div>
          <div style="text-align: right; margin-top: 15px; font-size: 0.9em; color: #666; display: none; " id="hitokoto-from"></div>
        </div>
      <h4 class="ui top attached block header">最近更新</h4>
      <div class="ui bottom attached segment">
	<table class="ui very basic center aligned table">
          <thead>
            <tr>
              <th>题目</th>
              <th>更新时间</th>
            </tr>
	  </thead>
	  <tbody>
	    
	    <tr>
	      <td><a href="/problem/6492">队列</a></td>
	      <td>4 天前</td>
	    </tr>
	    
	    <tr>
	      <td><a href="/problem/132">树状数组 3 ：区间修改，区间查询</a></td>
	      <td>1 周前</td>
	    </tr>
	    
	    <tr>
	      <td><a href="/problem/2666">「NOI2013」小 Q 的修炼</a></td>
	      <td>1 周前</td>
	    </tr>
	    
	    <tr>
	      <td><a href="/problem/2865">「IOI2018」狼人</a></td>
	      <td>1 周前</td>
	    </tr>
	    
	    <tr>
	      <td><a href="/problem/2864">「IOI2018」排座位</a></td>
	      <td>2 周前</td>
	    </tr>
	    
	  </tbody>
	</table>
      </div>
    
        
      <h4 class="ui top attached block header">搜索帖子</h4>
      <div class="ui bottom attached segment">
        <form action="/problems/search" method="get">
          <div class="ui search" style="width: 100%; ">
            <div class="ui left icon input" style="width: 100%; ">
              <input class="prompt" style="width: 100%; " type="text" placeholder="ID / 主题名 …" name="keyword">
              <i class="search icon"></i>
            </div>
            <div class="results" style="width: 100%; "></div>
          </div>
        </form>
      </div>
      <h4 class="ui top attached block header">近期比赛</h4>
      <div class="ui bottom attached segment">
        
        <table class="ui very basic center aligned table">
          <thead>
            <tr>
              <th>比赛名称</th>
              <th>开始时间</th>
            </tr>
          </thead>
          <tbody>
            
            <tr>
              
                
              
              <td><a href="/contest/35">Anniversary Cup #1 Day 3（LibreOJ Round #11） <span class="ui header"><div class="ui mini grey label">已结束</div></span></a></td>
              <td>2018-08-26 18:00:00</td>
            </tr>
            
            <tr>
              
                
              
              <td><a href="/contest/33">Anniversary Cup #1 Day 2（LibreOJ Round #10） <span class="ui header"><div class="ui mini grey label">已结束</div></span></a></td>
              <td>2018-06-24 18:00:00</td>
            </tr>
            
            <tr>
              
                
              
              <td><a href="/contest/32">Anniversary Cup #1 Day 1（LibreOJ Round #9） <span class="ui header"><div class="ui mini grey label">已结束</div></span></a></td>
              <td>2018-06-17 18:00:00</td>
            </tr>
            
            <tr>
              
                
              
              <td><a href="/contest/31">集训队互测 2018 同步赛 （Day 5）  <span class="ui header"><div class="ui mini grey label">已结束</div></span></a></td>
              <td>2018-04-15 13:00:00</td>
            </tr>
            
            <tr>
              
                
              
              <td><a href="/contest/30">集训队互测 2018 同步赛 （Day 4） <span class="ui header"><div class="ui mini grey label">已结束</div></span></a></td>
              <td>2018-04-14 13:00:00</td>
            </tr>
            
          </tbody>
        </table>
        
      </div>
      
      <h4 class="ui top attached block header font-content">友情链接</h4>
      <div class="ui bottom attached segment">
        <ul style="margin: 0; padding-left: 20px; ">
          
            <li><a href="http://uoj.ac/">Universal Online Judge</a></li>
          
        </ul>
      </div>
      
    </div>
  </div>
</div>
<script>
$(function () {
  $('.ui.search').search({
    debug: true,
    apiSettings: {
      url: '/api/v2/search/problems/{query}',
      cache: false
    },
    fields: {
      title: 'name'
    }
  });
});
</script>
</div>
    <?php require("pages/footer.php");?>

<script src="https://cdnjs.loli.net/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
<script src="https://cdnjs.loli.net/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="/script.js?20180718"></script>
</body>
</html>




