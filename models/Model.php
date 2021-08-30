<?php 
	class Model{

		function All($line, $pageNum, $pageSize){
		    $data = array();
		    // Thuc thi cau lenh truy van co so du lieu
			$response = file_get_contents('https://trinh67uet.et.r.appspot.com/product/filter?pageNum='.$pageNum.'&pageSize='.$pageSize.'&name=null&line='.$line.'&min=0&max=1000000000');
			$data = json_decode($response, true);
			
		    return $data;
		}

		function Search($line, $min, $max, $name, $pageNum, $pageSize){
		    $data = array();
		    // Thuc thi cau lenh truy van co so du lieu
			$response = file_get_contents('https://trinh67uet.et.r.appspot.com/product/filter?pageNum='.$pageNum.'&pageSize='.$pageSize.'&name='.$name.'&line='.$line.'&min='.$min.'&max='.$max);
			$data = json_decode($response, true);
			
		    return $data;
		}
		
		function Hot($pageNum, $pageSize){
		    // Thuc thi cau lenh truy van co so du lieu
			$response = file_get_contents('https://trinh67uet.et.r.appspot.com/product/filter?pageNum='.$pageNum.'&pageSize='.$pageSize.'&name=null&line=0&min=0&max=1000000000');
			$data = json_decode($response, true);
			
		    return $data;
		}
		
		function Count($name, $line, $min, $max){
		    // Thuc thi cau lenh truy van co so du lieu
			$data = file_get_contents('https://trinh67uet.et.r.appspot.com/product/count-filter?name='.$name.'&line='.$line.'&min='.$min.'&max='.$max);
			
		    return $data;
		}
		
        function find($id){
		    // Thuc thi cau lenh truy van co so du lieu
			$response = file_get_contents('https://trinh67uet.et.r.appspot.com/product/'.$id);
			$data = json_decode($response, true);
		    return $data;
        }
	}
?>