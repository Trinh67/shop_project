<?php 
	class Model{

		function All($line, $pageNum, $pageSize){
		    $data = array();
		    // Call data from API
			$response = file_get_contents('https://project-shop-324808.as.r.appspot.com/product/filter?pageNum='.$pageNum.'&pageSize='.$pageSize.'&name=null&line='.$line.'&min=0&max=1000000000');
			$data = json_decode($response, true);
			
		    return $data;
		}

		function Search($line, $min, $max, $name, $pageNum, $pageSize){
		    $data = array();
		    // Call data from API
			$response = file_get_contents('https://project-shop-324808.as.r.appspot.com/product/filter?pageNum=1&pageSize=24&name='.$name.'&line='.$line.'&min='.$min.'&max='.$max);
			$data = json_decode($response, true);
			
		    return $data;
		}
		
		function Hot($pageNum, $pageSize){
		    // Call data from API
			$response = file_get_contents('https://project-shop-324808.as.r.appspot.com/product/filter?pageNum='.$pageNum.'&pageSize='.$pageSize.'&name=null&line=0&min=0&max=1000000000');
			$data = json_decode($response, true);
			
		    return $data;
		}
		
		function Count($name, $line, $min, $max){
		    // Call data from API
			$data = file_get_contents('https://project-shop-324808.as.r.appspot.com/product/count-filter?name='.$name.'&line='.$line.'&min='.$min.'&max='.$max);
			
		    return $data;
		}
		
        function find($id){
		    // Call data from API
			$response = file_get_contents('https://project-shop-324808.as.r.appspot.com/product/'.$id);
			$data = json_decode($response, true);
		    return $data;
        }

		function GetOrderDetail($id){
			// Call data from API
			$curl = curl_init();
			$data_array = array(
				"orderNum" => $id,
			);
			
			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://project-shop-324808.as.r.appspot.com/orderDetail/filter?orderNum='.$id,
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
		    return json_decode($response, true);;
		}
	}
?>