<?php 
    require_once("Model.php");
	class order extends Model{
		var $table = 'orderdetails';

		function All(){
		    // Cau lenh truy van co so du lieu
		    // $query = "SELECT
			// 			od.*, p.productName, p.image, (p.buyPrice*(100 - s.sales_percent)/100) as priceEach
			// 		FROM
			// 			orderdetails od LEFT JOIN orders o ON od.orderNumber = o.orderNumber
			// 			LEFT JOIN products p ON od.productCode = p.productCode
			// 			LEFT JOIN sales s ON s.productCode = p.productCode ";
			$query = "SELECT * FROM order_view";
		    $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$data[] = $row;
		    }

		    return $data;
		}

		function find($id){
        	// Cau lenh truy van co so du lieu
			// $query = "SELECT
			// 	od.*, p.productName, p.image, (p.buyPrice*(100 - s.sales_percent)/100) as priceEach
			// FROM
			// 	orderdetails od LEFT JOIN orders o ON od.orderNumber = o.orderNumber
			// 	LEFT JOIN products p ON od.productCode = p.productCode
			// 	LEFT JOIN sales s ON s.productCode = p.productCode
			// 	WHERE
			// 		od.orderNumber =".$id;
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