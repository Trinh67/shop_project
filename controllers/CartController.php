<?php 
    
	require_once('models/Cart.php');
	class CartController{
		var $cate_model;

		function __construct(){
			$this->cate_model = new cart();
		}

		public function list(){
			$data = array();
			require_once('views/cart/cart_list.php');
		}

		public function add(){
			$id = isset($_GET['id'])?$_GET['id']:0;
			$products[$id] = $this->cate_model->find($id);

			if (isset($_SESSION['cart'][$id])) {
				// Tăng số lượng
				$_SESSION['cart'][$id]['SoLuong']++;
			}else{
				// Chưa có trong giỏ hàng
				// B2: Lấy thông tin sản phẩm
				$product = $products[$id];
				$product['SoLuong'] = 1;

				// B3: Add vào giỏ hàng
				$_SESSION['cart'][$id]  = $product;
				
			}

			header('Location: ?mod=cart&act=list');
		}

		public function delete(){
			
			// B1: Lấy mã sản phẩm được chọn
			$id = isset($_GET['id'])?$_GET['id']:0;
			$del = $_GET['del'];

			// Bước 2: Kiểm tra id và Xóa sản phẩm khỏi giỏ hàng
			if($del==1){
				unset($_SESSION['cart']);
				header("Location: ?mod=page&act=home");
			}
			else 
				if($del==2){
				    unset($_SESSION['cart'][$id]);
				    header("Location: ?mod=cart&act=list");
			    }
				// Kiểm tra số lượng
				else
					if($_SESSION['cart'][$id]['SoLuong'] > 1){
						// Giảm số lượng
						$_SESSION['cart'][$id]['SoLuong']--;
						header("Location: ?mod=cart&act=list");
					}else{
						// Bước 2: Xóa sản phẩm khỏi giỏ hàng
						unset($_SESSION['cart'][$id]);
						header("Location: ?mod=cart&act=list");
					}
		}

		public function order(){
			if(isset( $_SESSION['cart']))
				$products = $_SESSION['cart'];
			else $products = null;

			$status = $this->cate_model->insert($products);

			if($status == true){
		    	setcookie('msg','Đặt hàng thành công!!! Tiếp tục mua hàng nào!!!',time()+2);
				unset($_SESSION['cart']);
				unset($_SESSION['sum']);
		    	header('Location: ?mod=page&act=home');
		    }
		    else {
		    	setcookie('msg','Đặt hàng thành công!!! Tiếp tục mua hàng nào!!!',time()+2);
				unset($_SESSION['cart']);
				unset($_SESSION['sum']);
		    	header('Location: ?mod=page&act=home');
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