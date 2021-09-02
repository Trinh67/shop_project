<?php 
	class Login{

        function find($username, $password){
			$curl = curl_init();
			$data_array = array(
				'username' => $username,
				'password' => md5($password)
			);

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://trinh67uet.et.r.appspot.com/employee/login',
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
	}
 ?>