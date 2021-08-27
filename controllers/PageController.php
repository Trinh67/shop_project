<?php 
	require_once('models/Model.php');
	class PageController{
		var $page_model;

		function __construct(){
			$this->page_model = new Model();
		}

		public function home(){
			$data_hot = array();
			$data_hot = $this->page_model->Hot(1, 8);
			require_once('views/page/home.php');
		}

		public function search(){
			$line = $_POST['line']?:0;
			$min = $_POST['min']?:0;
			$max = $_POST['max']?:9999999999;
			$name = $_POST['name']?:"null";
			$name = str_replace(' ', '%20', $name);
			$data_search = array();
			$data_search = $this->page_model->Search($line, $min, $max, $name, 1, 8);
			require_once('views/page/search.php');
		}

		public function account(){
			require_once('views/page/my-account.php');
		}
	}
 ?>