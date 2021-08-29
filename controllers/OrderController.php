<?php 
	require_once('models/Order.php');
	class OrderController{
		var $order_model;

		function __construct(){
			$this->order_model = new Order();
		}

		public function list(){
			$cusNum = isset($_SESSION['customer'])? $_SESSION['customer']['customerNumber'] :0;
			$datas = array();
			$datas = $this->order_model->GetOrderList($cusNum);
			require_once('views/page/order_list.php');
		}

		public function cancel(){
			$ordNum = isset($_GET['id'])? $_GET['id'] :0;
			$status = $this->order_model->CancelOrder($ordNum);

			if($status == true){
		    	setcookie('msg','Hủy đơn hàng thành công!!!',time()+2);
		    	header('Location: ?mod=order&act=list');
		    }
		    else {
		    	setcookie('msg','Hủy đơn hàng thất bại!!!',time()+2);
		    	header('Location: ?mod=order&act=list');
		    }
		}
	}
 ?>