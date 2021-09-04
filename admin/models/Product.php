<?php 
    require_once("Model.php");
	class Product extends Model{
		var $table = 'product';

		function maxIdPro(){
        	$data = array();
		    // Call data from API
			$data["productCode"] = file_get_contents('https://project-shop-324808.as.r.appspot.com/product/maxId') + 1;
			$data["productName"] = null;
			$data["productLineNumber"] = null;
			$data["productDescription"] = null;
			$data["quantityOfStock"] = 0;
			$data["price"] = 1000000;
			$data["image"] = null;
			$data["modelNumber"] = null;
			$data["yearOfManufacture"] = 0;
			$data['status'] = 0;

		    return $data;
        }

		function store($data){
			// Call data from API
			$curl = curl_init();
			$data_array = array(
				"productCode" => $data['productCode'],
				"productName" => $data['productName'],
				"productLineNumber" => $data['productLineNumber'],
				"productDescription" => $data['productDescription'],
				"quantityOfStock" => $data['quantityOfStock'],
				"price" => $data['price'],
				"image" => $data['image'],
				"modelNumber" => $data['modelNumber'],
				"yearOfManufacture" => $data['yearOfManufacture'],
				"status" => $data['status']
			);
			
			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://project-shop-324808.as.r.appspot.com/product/',
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
			// Call data from API
			$curl = curl_init();
			$data_array = array(
				"productCode" => $data['productCode'],
				"productName" => $data['productName'],
				"productLineNumber" => $data['productLineNumber'],
				"productDescription" => $data['productDescription'],
				"quantityOfStock" => $data['quantityOfStock'],
				"price" => $data['price'],
				"image" => $data['image'],
				"modelNumber" => $data['modelNumber'],
				"yearOfManufacture" => $data['yearOfManufacture'],
				"status" => $data['status']
			);
			
			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://project-shop-324808.as.r.appspot.com/product/',
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