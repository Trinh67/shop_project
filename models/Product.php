<?php 
    require_once("Model.php");
	class product extends Model{
		function increase($data){
        	// Cau lenh truy van co so du lieu
        	$query = "UPDATE products SET views = ".$data["views"]." WHERE productCode ='".$data['productCode']."'";
			//print($query); die;
		    // Thuc thi cau lenh truy van co so du lieu
		    return $this->connection->query($query);
        }
	}
 ?>