<?php 
	require_once('models/Product.php');
	class ProductController{
		var $cate_model;

		function __construct(){
			$this->cate_model = new Product();
		}

		public function list(){
			$data = array();
			$line = $_GET['line'];
			$data = $this->cate_model->All($line, 1, 8);

			require_once('views/product/product_list.php');
		}

		public function detail(){
			$views = array();
			$views['productCode'] = isset($_GET['id'])?$_GET['id']:0;
			$views['line'] = isset($_GET['line'])?$_GET['line']:0;
		    $data = array();
			$data = $this->cate_model->find($views['productCode']);
			$data = $data[0];
		    $related_products = array();
			$related_products = $this->cate_model->getRelatedProducts($views['line']);

			require_once('views/product/product_detail.php');
		}
	}
 ?>