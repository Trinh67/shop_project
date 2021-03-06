<?php 
    
	require_once('models/Product.php');
	class ProductController{
		var $prod_model;

		function __construct(){
			$this->prod_model = new Product();
		}
		
		public function list(){
			$products = array();
			$products = $this->prod_model->All();
			require_once('views/product/product_list.php');
		}

		public function add(){
			$prodlines = $this->prod_model->lines();
			$product = $this->prod_model->maxIdPro();
			require_once('views/product/product_add.php');
		}

		public function store(){
			$data = array();
			$data['productCode'] = (int)$_POST['productCode'];
			$data['productName'] = $_POST['productName'];
		    $data['productLineNumber'] = (int)$_POST['productLineNumber'];
		    $data['productDescription'] = $_POST['productDescription'];
		    $data['quantityOfStock'] = (int)$_POST['quantityOfStock'];
			$data['price'] = (int)$_POST['price'];
			$data['image'] = $_POST['image'];
			$data['modelNumber'] = $_POST['modelNumber'];
			$data['yearOfManufacture'] = (int)$_POST['yearOfManufacture'];

			if($data['quantityOfStock'] == 0) $data['status'] = 0;
			else $data['status'] = 1;

		    $status = $this->prod_model->store($data);

		    setcookie('msg', $status,time()+1);
		    header('Location: ?mod=product&act=add');
		}

		public function update(){
			$id = isset($_GET['id'])?$_GET['id']:0;
			$product = $this->prod_model->find($id);
			$prodlines = $this->prod_model->lines();
			require_once('views/product/product_update.php');		
		}

		public function edit(){
			$data = array();
			$data['productCode'] = (int)$_POST['productCode'];
			$data['productName'] = $_POST['productName'];
		    $data['productLineNumber'] = (int)$_POST['productLineNumber'];
		    $data['productDescription'] = $_POST['productDescription'];
		    $data['quantityOfStock'] = (int)$_POST['quantityOfStock'];
			$data['price'] = (int)$_POST['price'];
			$data['image'] = $_POST['image'];
			$data['modelNumber'] = $_POST['modelNumber'];
			$data['yearOfManufacture'] = (int)$_POST['yearOfManufacture'];

			if($data['quantityOfStock'] == 0) $data['status'] = 0;
			else $data['status'] = 1;

		    $status = $this->prod_model->edit($data);

			if($status == true){
		    	setcookie('msg','Update successful',time()+1);
		    }
		    else {
		    	setcookie('msg','Update failed',time()+1);
			}
		    header('Location: ?mod=product&act=update&id='.$data['productCode']);
		}

		public function delete(){
			$id = isset($_GET['id'])?$_GET['id']:0;

		    $status = $this->prod_model->delete($id);

		    setcookie('msg', $status,time()+1);
		    header('Location: ?mod=product');
		}
	}
 ?>