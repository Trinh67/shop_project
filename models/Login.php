<?php 
	require_once('Connection.php');

	class Login{
		var $connection;

		function __construct(){
			$conn_obj = new Connection();
			$this->connection = $conn_obj->conn;
		}
        
        function find($email, $password){
			$curl = curl_init();
			$data_array = array(
				'email' => $email,
				'password' => md5($password)
			);

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://trinh67uet.et.r.appspot.com/customer/login',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => json_encode($data_array),
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/json'
			),
			));

			$response = curl_exec($curl);
			$response = json_decode($response, true);
			curl_close($curl);
			return $response[0];
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