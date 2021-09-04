<?php 
	require_once('models/Model.php');
	class PageController{
		var $page_model;

		function __construct(){
			$this->page_model = new Model();
		}

		public function home(){
			$pageNum = isset($_GET['page'])? $_GET['page'] :1;
			$pageSize = isset($_POST['records-limit']) ? $_POST['records-limit'] : (isset($_SESSION['records-limit']) ? $_SESSION['records-limit'] : 8);
			$data_hot = array();
			$data_hot = $this->page_model->Hot($pageNum, $pageSize);
			$_SESSION['total-records'] = $this->page_model->Count('null', 0, 0, 999999999);
			require_once('views/page/home.php');
		}

		public function search(){
			$line = $_POST['line']?:0;
			$min = $_POST['min']?:0;
			$max = $_POST['max']?:9999999999;
			$name = $_POST['name']?:"null";
			$name = str_replace(' ', '%20', $name);
			$data_search = array();
			$data_search = $this->page_model->Search($line, $min, $max, $name, 1, 100);
			require_once('views/page/search.php');
		}

		public function orderDetail(){
			$id = isset($_GET['id'])?$_GET['id']:0;
			$orders = array();
			$orders = $this->page_model->GetOrderDetail($id);
			require_once('views/page/order_detail.php');
		}

		public function account(){
			require_once('views/page/my-account.php');
		}
	}
 ?>