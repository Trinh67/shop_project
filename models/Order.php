<?php 
    require_once("Model.php");
	class Order extends Model {

        function GetOrderList($cusNum){
			// Thuc thi cau lenh truy van co so du lieu
			$response = file_get_contents('https://trinh67uet.et.r.appspot.com/order/filter/'.$cusNum);
			$data = json_decode($response, true);
		    return $data;
		}

        function CancelOrder($ordNum){
            // Thuc thi cau lenh truy van co so du lieu
			$response = file_get_contents('https://trinh67uet.et.r.appspot.com/order/filter/'.$ordNum);
			$data = json_decode($response, true);
		    return $data;
        }
    }
?>