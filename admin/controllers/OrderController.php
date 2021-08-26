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

		public function detail(){
			$id = isset($_GET['id'])?$_GET['id']:0;
			$orders = array();
			$orders = $this->order_model->find($id);
			require_once('views/order/order_detail.php');
		}


		//public function update(){
		// 	$id = isset($_GET['id'])?$_GET['id']:0;
		// 	$order = $this->order_model->find($id);
		// 	require_once('views/order/order_update.php');		
		//}

		// public function edit(){
		// 	$data = array();
		// 	$data['id'] = $_POST['id'];
		// 	$data['priceEach'] = $_POST['priceEach']; 
		//     $data['quantityOrdered'] = $_POST['quantityOrdered'];

		//     $status = $this->order_model->edit($data);
		    
		//     if($status == true){
		//     	setcookie('msg','Cập nhật thành công',time()+1);
		//     	header('Location: ?mod=order');
		//     }
		//     else {
		//     	setcookie('msg','Cập nhật không thành công',time()+1);
		//     	header('Location: ?mod=order&act=update');
		//     }
		// }

		// public function delete(){
		// 	$id = isset($_GET['id'])?$_GET['id']:0;

		//     $status = $this->order_model->delete($id);
		//     if($status == true){
		//     	setcookie('msg','Xóa thành công',time()+1);
		//     }
		//     else 
		//     	setcookie('msg','Xóa không thành công',time()+1);
		//     header('Location: ?mod=order');
		// }
	}
 ?>