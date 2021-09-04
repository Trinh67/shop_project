 <?php 
	class Model{
		
		function All(){
		    $data = array();
		    // Call data from API
			$response = file_get_contents('https://project-shop-324808.as.r.appspot.com/'.$this->table.'/');
			$data = json_decode($response, true);
			
		    return $data;
		}

		function lines(){
		    $data = array();
		    // Call data from API
			$response = file_get_contents('https://project-shop-324808.as.r.appspot.com/productLine/');
			$data = json_decode($response, true);
			
		    return $data;
		}
        
        function find($id){
        	$data = array();
		    // Call data from API
			$response = file_get_contents('https://project-shop-324808.as.r.appspot.com/'.$this->table.'/'.$id);
			$data = json_decode($response, true);
			
		    return $data[0];
        }

        function delete($id){
		    // Call data from API
			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://project-shop-324808.as.r.appspot.com/'.$this->table.'/'.$id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'DELETE',
			));

			$response = curl_exec($curl);
			curl_close($curl);

			return $response;
		}
		
		function Count(){
			$data = array();
		    // Call data from API
			$data[1] = file_get_contents('https://project-shop-324808.as.r.appspot.com/customer/count');
			$data[2] = file_get_contents('https://project-shop-324808.as.r.appspot.com/productLine/count');
			$data[3] = file_get_contents('https://project-shop-324808.as.r.appspot.com/order/count');
			$data[4] = file_get_contents('https://project-shop-324808.as.r.appspot.com/product/count');
			
		    return $data;
		}
	}
 ?>