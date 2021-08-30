<?php 
    
	require_once('models/product.php');
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
			require_once('views/product/product_add.php');		
		}

		public function store(){
			$data = array();
			$data['productCode'] = $_POST['id'];
			$data['productName'] = $_POST['productName'];
		    $data['buyPrice'] = $_POST['price'];
		    $data['productDescription'] = $_POST['productDescription'];
		    $data['quantityInStock'] = $_POST['quantityInStock'];
			$data['productLineCode'] = $_POST['productLineCode'];

		    $data['image'] = $_POST['thumbnail'];

		    $status = $this->prod_model->create($data);

		    if($status == true){
		    	setcookie('msg','Thêm mới thành công',time()+1);
		    	header('Location: ?mod=product');
		    }
		    else {
		    	setcookie('msg','Thêm mới không thành công',time()+1);
		    	header('Location: ?mod=product&act=add');
		    }
		}

		public function update(){
			$id = isset($_GET['id'])?$_GET['id']:0;
			$product = $this->prod_model->find($id);
			$prodlines = $this->prod_model->lines();
			require_once('views/product/product_update.php');		
		}

		public function edit(){
			$data = array();
			$data['productCode'] = $_POST['id'];
			$data['productName'] = $_POST['productName'];
		    $data['buyPrice'] = (int)$_POST['price'];
		    $data['productDescription'] = $_POST['productDescription'];
		    $data['quantityInStock'] = $_POST['quantityInStock'];
		    $data['productLineCode'] = $_POST['productLine'];
             
            $data['image'] = $_POST['image'];

		    $status = $this->prod_model->edit($data);

		    if($status == true){
		    	setcookie('msg','Cập nhật thành công',time()+1);
		    	header('Location: ?mod=product');
		    }
		    else {
		    	setcookie('msg','Cập nhật không thành công',time()+1);
		    	header('Location: ?mod=product&act=update&id='.$data['productCode']);
		    }
		}

		public function delete(){
			$id = isset($_GET['id'])?$_GET['id']:0;

		    $status = $this->prod_model->delete($id);
		    if($status == true){
		    	setcookie('msg','Xóa thành công',time()+1);
		    }
		    else 
		    	setcookie('msg','Xóa không thành công',time()+1);
		    header('Location: ?mod=product');
		}
	}
 ?>