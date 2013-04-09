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
			<form class="form-horizontal">
			  <fieldset>
			    <legend>记账</legend>
			    <div class="control-group">
				    <label class="control-label" for="inputEmail">日期</label>
				    <div class="controls">
							<select class="span2">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
							</select>	
							<select class="span2">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
							</select>	
							<select class="span2">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
							</select>	
				  	</div>
				  </div>
					<div class="control-group">
				    <label class="control-label" for="inputEmail">类型</label>
				    <div class="controls">
				      <select class="span2">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
							</select>	
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="inputEmail">消费金额</label>
				    <div class="controls">
				      <div class="input-append"> 
							  <input class="span2" type="text">
							  <span class="add-on">元</span>
							</div>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="inputEmail">描述</label>
				    <div class="controls">
				      <textarea rows="5" class="span6" id="inputEmail"></textarea>
				    </div>
				  </div> 
				  <div class="control-group">
				    <label class="control-label" for="inputEmail"></label>
				    <div class="controls">
			    			<button type="submit" class="btn btn-primary">提交</button>
				    </div>
				  </div> 
			  </fieldset>
			</form> 
		</div>
	</body> 
</html>