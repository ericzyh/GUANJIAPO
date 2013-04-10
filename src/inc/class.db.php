<?php 
//������
class Db 
{	
 
	public function escape($sql){
		$mysql = new SaeMysql();  
		return $mysql->escape( $sql ) ;
	}
	
	public function execute($sql, $args = array())
	{		
		$mysql = new SaeMysql();  
		if($args){
			$mysql -> setAppname($args['appname']);
			$mysql -> setAuth($args['username'],$args['password']);
			$mysql -> setPort($args['port']);
		} 
 		$mysql->runSql( $sql ); 
		$mysql->closeDb();
		if($mysql->errno()==0){ 
			return 1;
		}
	}	 
 
	public function executeInsert($sql, $args = array())
	{
		$mysql = new SaeMysql();  
		if($args){
			$mysql -> setAppname($args['appname']);
			$mysql -> setAuth($args['username'],$args['password']);
			$mysql -> setPort($args['port']);
		}
 		$mysql->runSql( $sql ); 
		$id = $mysql->lastId();  
		$mysql->closeDb(); 
		return $id;
	}
 
	public function getRow($sql, $args = array())	
	{		
		$mysql = new SaeMysql();
		if($args){
			$mysql -> setAppname($args['appname']);
			$mysql -> setAuth($args['username'],$args['password']);
			$mysql -> setPort($args['port']);
		}
		$data = $mysql->getLine( $sql ); 
		$mysql->closeDb(); 
		return $data;
	}
	
	public function getRows($sql, $args = array())	
	{		
		$mysql = new SaeMysql();  
		if($args){ 
			$mysql -> setAppname($args['appname']);
			$mysql -> setAuth($args['username'],$args['password']);
			$mysql -> setPort($args['port']);
		}
		$data = $mysql->getData( $sql ); if(!$data){$data=array();}
		$mysql->closeDb(); 
		return $data;
	}
}  
?>