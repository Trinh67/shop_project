<?php 
    require_once("Model.php");
	class Cart extends Model{
		
		function insert_order($data){
			// Call data from API
			$curl = curl_init();
			$data_array = array(
				"orderNumber" => $data['orderNumber'],
				"email" => $data['email'],
				"customerName" => $data['customerName'],
				"address" => $data['address'],
				"phoneNumber" => $data['phoneNumber'],
				"status" => $data['status'],
				"sumAmount" => $data['sumAmount'],
				"customerNumber" => $data['customerNumber']
			);
			
			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://project-shop-324808.as.r.appspot.com/order/',
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

		function insert_orderDetail($datas, $orderNumber){
			// Call data from API
			$curl = curl_init();
			foreach ($datas as $data){
				$data_array = array(
					"orderNumber" => $orderNumber,
					"productCode" => $data[0]["productCode"],
					"quantityOrdered" => $data["quantity"],
				);

				curl_setopt_array($curl, array(
				CURLOPT_URL => 'https://project-shop-324808.as.r.appspot.com/orderDetail/',
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
			}

			curl_close($curl);
			return $response;
		    
        }		

		function maxId() {
		    // Call data from API
			$response = file_get_contents('https://project-shop-324808.as.r.appspot.com/order/maxId');
			
		    return $response + 1;
		}
	}
 ?>