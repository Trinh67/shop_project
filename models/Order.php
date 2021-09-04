<?php 
    require_once("Model.php");
	class Order extends Model {

        function GetOrderList($cusNum){
			// Call data from API
			$response = file_get_contents('https://project-shop-324808.as.r.appspot.com/order/filter/'.$cusNum);
			$data = json_decode($response, true);
		    return $data;
		}

        function CancelOrder($ordNum){
            // Call data from API
            $curl = curl_init();
			$data_array = array(
				"ordNum" => $ordNum,
				"status" => -1
			);
			
			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://project-shop-324808.as.r.appspot.com/order/update-status',
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
    }
?>