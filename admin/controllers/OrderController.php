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

			setcookie('msg', $status,time()+1);
			header('Location: ?mod=order');
		}

		public function delete(){
			$id = isset($_GET['id'])?$_GET['id']:0;

		    $status = $this->order_model->delete($id);
		    if($status == true){
		    	setcookie('msg','Delete successful',time()+1);
		    }
		    else 
		    	setcookie('msg','Delete failed',time()+1);
		    header('Location: ?mod=order');
		}
	}
?>