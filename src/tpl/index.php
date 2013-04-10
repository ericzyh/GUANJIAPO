<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" /> 
		<title>管家婆</title>	 
		<?php include("common/header.php") ?>
	</head>
	<body>
		<?php $menutype=3;
					include("common/top.php");
					//控件数据初始化
					$year = date('Y');
					$month = date('m');
					$day = date('d');
		?>
		<div class="container">
			<form class="form-horizontal" action="/w/add" method="post">
			  <fieldset>
			    <legend>记账</legend>
			    <div class="control-group">
				    <label class="control-label" for="inputEmail">日期</label>
				    <div class="controls">
							<select class="span2" name="year">
							  <?php for($i=2012;$i<=$year;$i++){?><option <?php if($i==$year){echo "selected";}?> value="<?php echo $i?>"><?php echo $i?>年</option><?php }?>
							</select>	
							<select class="span2" name="month">
							  <?php for($i=1;$i<=12;$i++){?><option <?php if($i==$month){echo "selected";}?> value="<?php echo str_pad($i,2,0,STR_PAD_LEFT)?>"><?php echo $i?>月</option><?php }?>
							</select>	
							<select class="span2" name="day">
							  <?php for($i=1;$i<=31;$i++){?><option <?php if($i==$day){echo "selected";}?> value="<?php echo str_pad($i,2,0,STR_PAD_LEFT)?>"><?php echo $i?>日</option><?php }?>
							</select>	
				  	</div>
				  </div>
					<div class="control-group">
				    <label class="control-label" for="inputEmail">消费类型</label>
				    <div class="controls">
				    	<div class="btn-group" data-toggle="buttons-radio">
				    		<?php for($i=0;$i<5;$i++){$one=$types[$i];?>
							  	<a class="btn" value="<?php echo $one['id'];?>"><?php echo $one['name'];?></a>
								<?php }?>
							</div>
				      <select class="span2" name="type" id="type">
				      	<?php foreach($types as $one){?>
							  	<option value="<?php echo $one['id'];?>"><?php echo $one['name'];?></option>
								<?php } ?>
							</select>	
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="inputEmail">消费金额</label>
				    <div class="controls">
				      <div class="input-append"> 
							  <input class="span2" type="text" name="money">
							  <span class="add-on">元</span>
							</div>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="inputEmail">描述</label>
				    <div class="controls">
				      <textarea rows="5" class="span6" id="inputEmail" name="remark"></textarea>
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
<script>
	$(".btn-group .btn").click(function(){var v=$(this).attr("value");$("#type").val(v);});
</script>