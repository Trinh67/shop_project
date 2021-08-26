<?php 
	require_once('models/Login.php');
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	class LoginController{
		var $login_model;

		function __construct(){
			$this->login_model = new login();
		}

		public function login(){
			require_once('views/page/login.php');
		}

		public function login_action(){
			$email = $_POST['email'];
            $password = $_POST['password'];

			$status = $this->login_model->find($email, $password);

			if($status == true){
				$_SESSION['isLogin'] = true;
	            $_SESSION['customer'] = $status;
		    	setcookie('msg','Đăng nhập thành công',time()+1);
		    	header('Location: ?mod=page&act=home');
		    }
		    else {
		    	setcookie('msg','Đăng nhập không thành công',time()+1);
		    	header('Location: ?mod=login&act=login');
		    }
		}


		public function logout(){
			session_start();
			unset($_SESSION['cart']);
            unset($_SESSION['sum']);
		    session_destroy();
		    header('Location: ?mod=page&act=home');	
		}

		public function store(){
			$data = array();
			$data['customerNumber'] = '1';
			$data['contactFirstName'] = $_POST['firstName'];
			$data['contactLastName'] = $_POST['lastName'];
			$data['customerName'] = $data['contactLastName'];
		    $data['email'] = $_POST['email'];
		    $data['password'] = md5($_POST['password']);
		    $data['phone'] = $_POST['phone'];
		    $data['addressLine1'] = $_POST['addressLine1'];
		    $data['city'] = $_POST['city'];
		    $data['country'] = $_POST['country'];

		    $status = $this->login_model->register($data);

		    if($status == true){
				$_SESSION['isLogin'] = true;
	            $_SESSION['customer'] = $data;
		    	setcookie('msg','Đăng kí thành công',time()+1);
		    	header('Location: ?mod=page&act=home');
		    }
		    else {
				//setcookie('msg','Đăng kí không thành công',time()+1);
				//print("failed"); die;
		    	header('Location: ?mod=page');
		    }
		}

		public function edit(){
			$data = array();
			$data['customerNumber'] = $_SESSION['customer']['customerNumber'];
			$data['contactFirstName'] = $_POST['firstName'];
			$data['contactLastName'] = $_POST['lastName'];
			$data['email'] = $_POST['email'];
			$data['phone'] = $_POST['phone'];
			$data['addressLine1'] = $_POST['address'];
			$data['city'] = $_POST['city'];
			$data['country'] = $_POST['country'];

		    $status = $this->login_model->edit($data);

		    if($status == true){
				setcookie('msg','Cập nhật thành công',time()+1);
				unset($_SESSION['customer']);
		    	header('Location: ?mod=page&act=home');
		    }
		    else {
		    	setcookie('msg','Cập nhật không thành công',time()+1);
		    	header('Location: ?mod=page&act=home');
		    }
		}
	}
 ?>