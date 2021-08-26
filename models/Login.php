<?php 
	require_once('Connection.php');
	class login{
		var $connection;

		function __construct(){
			$conn_obj = new Connection();
			$this->connection = $conn_obj->conn;
		}
        
        function find($email, $password){
        	// Cau lenh truy van co so du lieu
		    $query = "SELECT
				  *
				FROM
				  customers 
				WHERE email = '".$email."' AND password = '".md5($password)."'";
				
		    // Thuc thi cau lenh truy van co so du lieu

		    return $data = $this->connection->query($query)->fetch_assoc();
		}
		
		function register($data){
			$f = "";
        	$v = "";
        	foreach ($data as $key => $value) {
        		$f .= $key.",";
        		$v .= "'".$value."',";
        	}

        	$f = trim($f,",");
        	$v = trim($v,",");
        	
        	// Cau lenh truy van co so du lieu
        	$query = "INSERT INTO customers(".$f.") VALUES (".$v.");";
		    //print($query); die;
		    // Thuc thi cau lenh truy van co so du lieu
		    return $this->connection->query($query);
		}
		
		function edit($data){
			$v = "";
			foreach ($data as $key => $value) {
				$v .= $key."='".$value."',";
			}
			$v = trim($v,",");
			// Cau lenh truy van co so du lieu
			$query = "UPDATE customers SET ".$v." WHERE customerNumber =".$data['customerNumber'];
			//print($query); die;
			// Thuc thi cau lenh truy van co so du lieu
			return $this->connection->query($query);
		}

	}
 ?>