<?php 
	class Login{
        
        function find($username, $password){
			$curl = curl_init();
			$data_array = array(
				'username' => $username,
				'password' => md5($password)
			);

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://project-shop-324808.as.r.appspot.com/customer/login',
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

		function maxId() {
		    // Thuc thi cau lenh truy van co so du lieu
			$response = file_get_contents('https://project-shop-324808.as.r.appspot.com/customer/maxId');
			
		    return $response + 1;
		}
		
		function register($data){
			$curl = curl_init();
			$data_array = array(
				"customerNumber" => $data['customerNumber'],
				"customerName" => $data['customerName'],
				"fullName" => $data['fullName'],
				"nationalId" => $data['nationalId'],
				"address" => $data['address'],
				"phoneNumber" => $data['phoneNumber'],
				"email" => $data['email'],
				"password" => $data['password'],
				"numOfSuccessOrder" => $data['numOfSuccessOrder']
			);
			
			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://project-shop-324808.as.r.appspot.com/customer/',
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
			curl_close($curl);
			return $response;
		}
		
		function edit($data){
			$curl = curl_init();
			$data_array = array(
				"customerNumber" => $data['customerNumber'],
				"customerName" => $data['customerName'],
				"fullName" => $data['fullName'],
				"nationalId" => $data['nationalId'],
				"address" => $data['address'],
				"phoneNumber" => $data['phoneNumber'],
				"email" => $data['email'],
				"password" => $data['password'],
				"numOfSuccessOrder" => $data['numOfSuccessOrder']
			);
			
			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://project-shop-324808.as.r.appspot.com/customer/',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS => json_encode($data_array),
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/json'
			),
			));

			$response = curl_exec($curl);
			curl_close($curl);
			return $response;
		}

	}
 ?>