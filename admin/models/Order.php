<?php 
    require_once("Model.php");
	class Order extends Model{
		var $table = 'order';

		function update($data){
        	$curl = curl_init();
			$data_array = array(
				"ordNum" => $data['ordNum'],
				"status" => $data['status']
			);
			
			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://trinh67uet.et.r.appspot.com/order/update-status',
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