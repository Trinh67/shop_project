<?php 
    require_once("Model.php");
	class Customer extends Model{
		var $table = "customer";
		
		function maxIdCus(){
        	$data = array();
		    // Thuc thi cau lenh truy van co so du lieu
			$data["customerNumber"] = file_get_contents('https://project-shop-324808.as.r.appspot.com/customer/maxId') + 1;
			$data["customerName"] = null;
			$data["fullName"] = null;
			$data["nationalId"] = null;
			$data["address"] = null;
			$data["phoneNumber"] = null;
			$data["email"] = null;
			$data["password"] = null;
			$data["numOfSuccessOrder"] = 0;
			
		    return $data;
        }

		function store($data){
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