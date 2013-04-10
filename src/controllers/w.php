<?php
class w extends Controller{
	function i()
	{
			$types = Db::getRows("select * from gjp_type");
      $this->loadView('index',array('types'=>$types));
	} 
	function add(){
		$year = $_POST['year'];
		$month = $_POST['month'];
		$day = $_POST['day'];
		$type = $_POST['type'];
		$money = $_POST['money'];
		$remark = $_POST['remark'];
		$add_time = $year.$month.$day;
		$yearmonth = $year.$month;
		$yearmonthlike = $year."-".$month;
		if($_COOKIE['USERID']==100){$userid = 1;}else{$userid = 2;}
			if(!empty($type)&&!empty($add_time)&&!empty($money)){
			$sql = "insert into gjp_detail (userid,type,money,remark,add_time,realtime) values ('".$userid."','".$type."','".$money."','".$remark."','".$add_time."',now())";
			$re = Db::execute($sql);
			if($re){
				$sql = "replace into gjp_collect_day (userid,money,add_time) select userid,sum(money),add_time from gjp_detail where add_time = '".$add_time."' and userid = '".$userid."'";
				Db::execute($sql); 
				$sql = "replace into gjp_collect_month (userid,money,month) select userid,sum(money),'".$yearmonth."' from gjp_detail where add_time like '".$yearmonthlike."%' and userid = '".$userid."'";
				Db::execute($sql);
				$sql = "replace into gjp_collect_type (userid,money,type) select userid,sum(money),type from gjp_detail where type = '".$type."' and userid = '".$userid."'";
				Db::execute($sql);
			}
		}
		header("location:/w/d");
	}
	function d()
	{
			$userid = $_GET['uid'];
			$types = Db::getRows("select * from gjp_type");
			$typess = array();
			foreach($types as $one){
				$typess[$one['id']]=$one['name'];
			}
			if(!empty($userid)){
				$dyn = ' and userid = '.intval($userid);
			}
			$datas = Db::getRows("select sum(money) as money,add_time from gjp_collect_day where 1 = 1 ".$dyn." group by add_time");
			foreach($datas as &$one){
				$one['detail'] = Db::getRows("select * from gjp_detail where add_time = '".$one['add_time']."'".$dyn);
			} 
      $this->loadView('detail',array('types'=>$typess,'datas'=>$datas,'userid'=>$userid));
	} 
	function o()
	{ 	$type = empty($_GET['t'])?1:$_GET['t']; 
			$data1 = array();
			$data2 = array();
			$data3 = array();
			$data4 = array();
			if($type==3){
				$types = Db::getRows("select * from gjp_type");
				foreach($types as $one){
					$data1[] = Db::getRow("select sum(money) as money from gjp_collect_type where type = ".$one['id']);
					$data2[] = Db::getRow("select sum(money) as money from gjp_collect_type where userid = 1 and type = ".$one['id']);
					$data3[] = Db::getRow("select sum(money) as money from gjp_collect_type where userid = 2 and type = ".$one['id']);
					$data4[] = "'".$one['name']."'";
				} 
			}else if($type==1){
				$month = date('m');
				$year = date('Y');
				for($i=0;$i<12;$i++){
					$monthnow = $month-$i;
					if($monthnow<=0){
						$yearmonth = ($year-1).str_pad((12+$monthnow),2,0,STR_PAD_LEFT);
					}else{
						$yearmonth = $year.str_pad($monthnow,2,0,STR_PAD_LEFT);
					}
					$data1[] = Db::getRow("select sum(money) as money from gjp_collect_month where month = ".$yearmonth);
					$data2[] = Db::getRow("select sum(money) as money from gjp_collect_month where userid = 1 and month = ".$yearmonth);
					$data3[] = Db::getRow("select sum(money) as money from gjp_collect_month where userid = 2 and month = ".$yearmonth);
					$data4[] = "'".$yearmonth."'";
				}
			}else if($type==2){
				for($i=0;$i<30;$i++){
					$data = date('Y-m-d',time()-$i*3600*24);  
					$data1[] = Db::getRow("select sum(money) as money from gjp_collect_day where add_time = '".$data."'");
					$data2[] = Db::getRow("select sum(money) as money from gjp_collect_day where userid = 1 and add_time = '".$data."'");
					$data3[] = Db::getRow("select sum(money) as money from gjp_collect_day where userid = 2 and add_time = '".$data."'");
					$data4[] = "'".substr($data,8)."'"; 
				}
			}
			$str1 = "";
			$str2 = "";
			$str3 = "";
			$str4 = "";
			$i=0;
			$len = count($data1);
			for($i=0;$i<$len;$i++){
				if($i!=0){$str1.=",";$str2.=",";$str3.=",";$str4.=",";}
				$str1 .= intval($data1[$i]['money']);
				$str2 .= intval($data2[$i]['money']);
				$str3 .= intval($data3[$i]['money']);
				$str4 .= $data4[$i]; 
			} 
      $this->loadView('overview',array('str1'=>$str1,'str2'=>$str2,'str3'=>$str3,'str4'=>$str4,'type'=>$type));
	} 
	function s()
	{
			$this->loadView('setting');
	} 
}