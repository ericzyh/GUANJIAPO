<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" /> 
		<title>管家婆</title>	
		<?php include("common/header.php") ?>
	  	<link rel="stylesheet" href="/resource/css/demos.css" type="text/css" media="screen" /> 
	    <script src="/resource/libraries/RGraph.common.core.js" ></script>
	    <script src="/resource/libraries/RGraph.common.dynamic.js" ></script>
	    <script src="/resource/libraries/RGraph.common.tooltips.js" ></script>
	    <script src="/resource/libraries/RGraph.common.effects.js" ></script>
	    <script src="/resource/libraries/RGraph.line.js" ></script>
	    <script src="/resource/libraries/jquery.min.js" ></script>
	    <!--[if lt IE 9]><script src="../excanvas/excanvas.js"></script><![endif]-->
	</head>
	<body>
		<?php $menutype=1;
					include("common/top.php"); 
		?> 
		<div class="container"> 
				<div class="btn-group" data-toggle="buttons-radio">
				  <button type="button" onclick="location.href='/w/o?t=1'" class="btn<?php if($type==1){echo ' active';}?>">最近12月</button>
				  <button type="button" onclick="location.href='/w/o?t=2'" class="btn<?php if($type==2){echo ' active';}?>">最近30天</button>
				  <button type="button" onclick="location.href='/w/o?t=3'" class="btn<?php if($type==3){echo ' active';}?>">类型查看</button>
				</div>
			  <span class="help-block">红色:集体消费 灰色:她 绿色:他</span>
			 <canvas id="cvs"  width="900" height="450" style="margin:0px auto">[No canvas support]</canvas>
    
    <script>
         window.onload = function (e)
        {
            var line = new RGraph.Line('cvs', [<?php echo $str3;?>],[<?php echo $str2;?>],[<?php echo $str1;?>])
                .Set('fillstyle', 'rgba(255,0,0,0.3)')
                .Set('colors', ['gray', 'green', 'red'])
                .Set('linewidth', [3, 3,3])
                .Set('title', '')
                .Set('key', ['她', '他','all'])
                .Set('key.background', 'rgba(255,255,255,0.8)')
                .Set('key.rounded', true)
                .Set('labels', [<?php echo $str4;?>])
                .Set('shadow', true)
                .Set('shadow.offsetx', 0)
                .Set('shadow.offsety', 0)
                .Set('shadow.blur', 15)
                .Set('shadow.color', ['gray','green','red'])
                .Set('noaxes', true)
                .Set('yaxispos', 'right')
                .Set('gutter.left', 5)
                .Set('gutter.right', 35)
                .Set('background.grid.autofit.numvlines', 11)
                .Draw();
        }
    </script>
		</div>
	</body> 
</html> 