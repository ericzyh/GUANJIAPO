<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" /> 
		<title>管家婆</title>	
		<link href="./css/bootstrap.css" rel="stylesheet"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="./css/bootstrap-responsive.css" rel="stylesheet"> 
		<link href="./css/louqiong.css" rel="stylesheet"> 
	  <script src="./js/jquery.js"></script>
	  <script src="./js/bootstrap.js"></script> 
	</head>
	<body>
		<div class="navbar navbar-inverse">
		  <div class="navbar-inner"> 
		    <ul class="nav">
		      <li><a href="#">概况</a></li>
		      <li><a href="#">明细</a></li>
		      <li><a href="#">记账</a></li>
		      <li><a href="#">设置</a></li>
		    </ul>
		  </div>
		</div>
		<div class="container">
			<p>
				<div class="btn-group" data-toggle="buttons-radio">
				  <button type="button" class="btn">她</button>
				  <button type="button" class="btn">ALL</button>
				  <button type="button" class="btn">他</button>
				</div>
			</p>
			<div class="row-fluid item">
				<div class="span12">
				    <div class="span2">  
				    	<div class="riqi">2013-04-19</div>
				    	<div class="money">300.30</div>
				    </div>
				    <div class="span10"> 
				    	<table class="table  table-bordered">
  							<tr><th>时间</th><th>类型</th><th>金额</th><th>备注</th></tr>
  							<tr><td>上午</td><td>日常</td><td>100</td><td>备注</td></tr>
  							<tr><td>下午</td><td>爱情</td><td>300</td><td>备注</td></tr>
  							<tr><td>晚上</td><td>结果</td><td>2</td><td>备注</td></tr>
						</table>
				    </div>
				</div>
			</div>
			<div class="row-fluid item">
				<div class="span12">
				    <div class="span2 no">  
				    	<div class="riqi">2013-04-19</div>
				    	<div class="money">300.30</div>
				    </div>
				    <div class="span10"> 
				    	<table class="table  table-bordered">
  							<tr><th>时间</th><th>类型</th><th>金额</th><th>备注</th></tr>
  							<tr><td>上午</td><td>日常</td><td>100</td><td>备注</td></tr>
  							<tr><td>下午</td><td>爱情</td><td>300</td><td>备注</td></tr>
  							<tr><td>晚上</td><td>结果</td><td>2</td><td>备注</td></tr>
						</table>
				    </div>
				</div>
			</div>
		</div>
	</body> 
</html>
<script type="text/javascript">
$(".item").hover(function(){$(this).find("table").addClass("hover");},function(){$(this).find("table").removeClass("hover");})
</script>