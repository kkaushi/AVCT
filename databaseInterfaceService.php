<?php
		require_once 'config.php';
		
		class InterfaceService{
			private $tablename='basetable';
			private $connection;
			
			public function __construct(){
				$this->connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
				$this->throwExceptionOnError($this->connection);
				if($this->connection){
// 					echo'u r connected';
				}		
			}
			//show all rows
			public function getAllInterface(){
				$stmt=mysqli_prepare($this->connection,"SELECT * from $this->tablename");
				$this->throwExceptionOnError();
			}
			
			//close db connection
			public function closeConnection(){
				mysqli_close($this->connection);
			}
			
			//session time
			public function insertSessionTime($eid,$startTimeValue,$field3){
// 				echo $field3;
// 				echo $startTimeValue;
// 				echo $eid;
// 				mysqli_query($this->connection,"UPDATE basetable SET global_clk='5.4' WHERE Email='pop'");
				mysqli_query($this->connection,"UPDATE basetable SET $field3='$startTimeValue' WHERE Email='$eid'");
			}
			
			//insert global and stofhla times
			public function insertTimeFields($eid,$TimeValue,$field3){
 				$minutes=floor($TimeValue/60);
 				$hours=floor($TimeValue/3600);
 				$seconds=$TimeValue-($hours*3600+$minutes*60);
 				$TimeTotal="$hours:$minutes:$seconds";
 				mysqli_query($this->connection,"UPDATE basetable SET $field3='$TimeTotal' WHERE Email='$eid'");
 			}
			
			
			//insert email field
			public function insertEmail($emailId){
				mysqli_query($this->connection,"INSERT INTO $this->tablename (Email)
					VALUES ('$emailId')");
			}
			
			//insert stofhla fields
			public function insertStofhlaResponses($field1,$eid,$field3){
				mysqli_query($this->connection,"UPDATE basetable SET $field3='$field1' WHERE Email='$eid'");				
			}
			
			//insert ss fields
			public function insertSsResponses($field1,$eid,$field3){
				mysqli_query($this->connection,"UPDATE basetable SET $field3='$field1' WHERE Email='$eid'");
			}
			
			//insert bph fields
			public function insertBPHResponses($field1,$eid,$field3){
				mysqli_query($this->connection,"UPDATE basetable SET $field3='$field1' WHERE Email='$eid'");
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
	?>