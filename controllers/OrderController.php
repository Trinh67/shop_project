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
			$data = $this->order_model->CancelOrder($ordNum);
			require_once('views/page/order_list.php');
		}
	}
 ?>