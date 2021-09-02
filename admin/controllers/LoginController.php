<?php 
	require_once('models/Login.php');
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	class LoginController{
		var $login_model;

		function __construct(){
			$this->login_model = new login();
		}

		public function login(){
			require_once('views/login/login.php');
		}

		public function login_action(){
			$username = $_POST['username'];
            $password = $_POST['password'];

			$status = $this->login_model->find($username, $password);

			if($status == true){
				$_SESSION['isLoginAdmin'] = true;
	            $_SESSION['admin'] = $status;
		    	setcookie('msg','Login successful',time()+1);
		    	header('Location: ?mod=page&act=dashboard');
		    }
		    else {
		    	setcookie('msg','Login failed',time()+1);
		    	header('Location: ?mod=login&act=login');
		    }
		}


		public function logout(){
			session_start();
			unset($_SESSION['isLoginAdmin']);
			unset($_SESSION['admin']);
		    header('Location: ?mod=login&act=login');	
		}

	}
 ?>