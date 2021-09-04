<?php 
    require_once("Model.php");
	class Product extends Model {
        function getRelatedProducts($line){
			// Call data from API
			$response = file_get_contents('https://project-shop-324808.as.r.appspot.com/product/filter?pageNum=1&pageSize=5&name=null&line='.$line.'&min=0&max=1000000000');
			$data = json_decode($response, true);
		    return $data;
		}
    }
?>