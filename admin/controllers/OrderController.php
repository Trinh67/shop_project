<?php 
	require_once('models/Order.php');
	class OrderController{
		var $order_model;

		function __construct(){
			$this->order_model = new order();
		}
		
		public function list(){
			$data = array();
			$data = $this->order_model->All();
			require_once('views/order/order_list.php');
		}

		public function update(){
			$data = array();
			$data['ordNum'] = isset($_GET['id'])?$_GET['id']:0;
			$data['status'] = isset($_GET['val'])?$_GET['val']:null;

			$status = $this->order_model->update($data);

			if($status == true){
		    	setcookie('msg','Cập nhật thành công',time()+1);
		    	header('Location: ?mod=order');
		    }
		    else {
		    	setcookie('msg','Cập nhật không thành công',time()+1);
		    	header('Location: ?mod=order');
		    }
		}
	}
 ?>