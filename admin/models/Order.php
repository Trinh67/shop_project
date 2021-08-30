<?php 
    require_once("Model.php");
	class Order extends Model{
		var $table = 'order';

		function find($id){
        	// Cau lenh truy van co so du lieu
			$query = "SELECT * FROM order_view WHERE orderNumber =".$id;

		    // Thuc thi cau lenh truy van co so du lieu

		    $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$data[] = $row;
		    }

		    return $data;
        }
	}

?>