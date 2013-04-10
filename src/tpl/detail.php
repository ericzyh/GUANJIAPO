<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" /> 
		<title>管家婆</title>	
		<?php include("common/header.php") ?>
	</head>
	<body>
		<?php $menutype=2;
					include("common/top.php"); 
		?>
		<div class="container">
			<p>
				<div class="btn-group" data-toggle="buttons-radio">
				  <button type="button" onclick="location.href='/w/d?uid=2'" class="btn<?php if($userid==2){echo ' active';}?>">她</button>
				  <button type="button" onclick="location.href='/w/d'" class="btn<?php if(empty($userid)){echo ' active';}?>">ALL</button>
				  <button type="button" onclick="location.href='/w/d?uid=1'" class="btn<?php if($userid==1){echo ' active';}?>">他</button>
				</div>
			</p>
			<?php foreach($datas as $one){?>
			<div class="row-fluid item">
				<div class="span12">
				    <div class="span2">  
				    	<div class="riqi"><?php echo $one['add_time']?></div>
				    	<div class="money"><?php echo $one['money']?></div>
				    </div>
				    <div class="span10"> 
				    	<table class="table  table-bordered">
  							<tr><th>谁</th><th>消费类型</th><th>消费金额</th><th>备注</th></tr>
  							<?php foreach($one['detail'] as $two){?>
  							<tr><td><?php echo $two['userid']==2?"她":"他";?></td><td><?php echo $types[$two['type']]?></td><td><?php echo $two['money']?></td><td><?php echo $two['remark']?></td></tr>
  							<?php }?>
						</table>
				    </div>
				</div>
			</div>
			<?php }?>
		</div>
	</body> 
</html>
<script type="text/javascript">
$(".item").hover(function(){$(this).find("table").addClass("hover");},function(){$(this).find("table").removeClass("hover");})
</script>