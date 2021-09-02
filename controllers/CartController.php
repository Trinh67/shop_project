<?php 
	require_once('models/Cart.php');
	class CartController{
		var $cate_model;

		function __construct(){
			$this->cate_model = new Cart();
		}

		public function list(){
			$data = array();
			require_once('views/cart/cart_list.php');
		}

		public function add(){
			$id = isset($_GET['id'])?$_GET['id']:0;
			$quantity = isset($_POST['quantity'])?$_POST['quantity']:1;
			$products[$id] = $this->cate_model->find($id);

			if (isset($_SESSION['cart'][$id])) {
				// Tăng Quantity
				$_SESSION['cart'][$id]['SoLuong'] += $quantity;
			}else{
				// Chưa có trong Cart
				// B2: Lấy thông tin Product
				$product = $products[$id];
				$product['SoLuong'] = $quantity;

				// B3: Add vào Cart
				$_SESSION['cart'][$id]  = $product;
			}
			
			header('Location: ?mod=cart&act=list');
		}

		public function delete(){
			
			// B1: Lấy mã Product được chọn
			$id = isset($_GET['id'])?$_GET['id']:0;
			$del = $_GET['del'];

			// Bước 2: Kiểm tra id và Delete Product khỏi Cart
			if($del==1){
				unset($_SESSION['cart']);
				header("Location: ?mod=page&act=home");
			}
			else 
				if($del==2){
				    unset($_SESSION['cart'][$id]);
				    header("Location: ?mod=cart&act=list");
			    }
				// Kiểm tra Quantity
				else
					if($_SESSION['cart'][$id]['SoLuong'] > 1){
						// Giảm Quantity
						$_SESSION['cart'][$id]['SoLuong']--;
						header("Location: ?mod=cart&act=list");
					}else{
						// Bước 2: Delete Product khỏi Cart
						unset($_SESSION['cart'][$id]);
						header("Location: ?mod=cart&act=list");
					}
		}

		public function order(){
			if(isset( $_SESSION['cart']))
				$products = $_SESSION['cart'];
			else $products = null;
			
			$data = array();
			$data['orderNumber'] = $this->cate_model->maxId();
			$data['email'] = isset($_POST['email']) ? $_POST['email'] : $_SESSION['customer']['email'];
			$data['customerName'] = isset($_POST['fullName']) ? $_POST['fullName'] : $_SESSION['customer']['fullName'];
			$data['address'] = isset($_POST['address']) ? $_POST['address'] : $_SESSION['customer']['address'];
			$data['phoneNumber'] = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : $_SESSION['customer']['phoneNumber'];
			$data['status'] = 1;
			$data['sumAmount'] = $_SESSION['sum'];
			$data['customerNumber'] = $_SESSION['customer']['customerNumber'];

			$status_order = $this->cate_model->insert_order($data);
			$status_orderDetail = $this->cate_model->insert_orderDetail($products, $data['orderNumber']);

			if($status_order == true && $status_orderDetail == true){
		    	setcookie('msg','Order successful!!!',time()+2);
				unset($_SESSION['cart']);
				unset($_SESSION['sum']);
		    	header('Location: ?mod=page&act=home');
		    }
		    else {
		    	setcookie('msg','Order failed!!!',time()+2);
		    	header('Location: ?mod=cart&act=list');
		    }
		}

		public function mail(){
			$data = array();
			require_once('views/cart/infor.php');
		}

		public function send(){
			require_once('views/cart/informail.php');
		}
	}
 ?>