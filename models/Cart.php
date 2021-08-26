<?php 
    require_once("Model.php");
	class cart extends Model{
		function insert($datas){
			$query = "";
			foreach ($datas as $data){
				$f = "orderNumber,";
				$v = "10014,";
				$order = array();
				$order['productCode'] = $data['productCode'];
				$order['quantityOrdered'] = $data['SoLuong'];
				foreach ($order as $key => $value) {
					$f .= $key.",";
					$v .= "'".$value."',";
				}
	
			$f = trim($f,",");
			$v = trim($v,",");

        	// Cau lenh truy van co so du lieu
			$query .= "INSERT INTO orderdetails(".$f.") VALUES (".$v.");";
		
			}
			if(isset($_SESSION['customer']["customerNumber"])) $c = $_SESSION['customer']["customerNumber"];
			else $c = $_SESSION['employee']["employeeNumber"];
			$query .= "INSERT INTO orders(orderNumber,statusOrder,customerNumber) VALUES (10014,'In Process',".$c.");";
			//print($query); die;
		    // Thuc thi cau lenh truy van co so du lieu
		    return $this->connection->query($query);
        }		
	}
 ?>