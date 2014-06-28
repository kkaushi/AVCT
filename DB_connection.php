<?php
require_once 'config.php';

class InterfaceService{
	private $tablename='basetable';
	private $connection;
	
	public function __construct(){
		$this->connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		$this->throwExceptionOnError($this->connection);
		if($this->connection){
			echo'u r connected';
		}		
	}
	public function getAllInterface(){
		
	}
	
	private function throwExceptionOnError($link=null){
		if($link==null){
			$link=$this->connection;
		}
		if(mysqli_error($link)){
			$msg=mysqli_errno($link).":".mysqli_error($link);
			throw new Exception('MySql Error - '.$msg);
		}
	}
}
$avctDB=new InterfaceService();
$avctDB->getAllInterface();


?>