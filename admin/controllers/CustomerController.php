<?php 
    
	require_once('models/Customer.php');
	class CustomerController{
		var $cus_model;

		function __construct(){
			$this->cus_model = new customer();
		}

		public function list(){
			$data = array();
			$customers = $this->cus_model->All();
			require_once('views/customer/customer_list.php');
		}

		public function detail(){
			$id = isset($_GET['id'])?$_GET['id']:0;

			$cus = $this->cus_model->find($id);
			require_once('views/customer/customer_detail.php');
		}

		public function add(){
			$title = "Thêm mới Khách hàng";
			$customer = $this->cus_model->maxIdCus();
			require_once('views/customer/customer_insert.php');		
		}

		public function store(){
			$data = array();
			$data['customerNumber'] = $_POST['customerNumber'];
			$data['customerName'] = $_POST['customerName'];
			$data['fullName'] = $_POST['fullName'];
			$data['nationalId'] = $_POST['nationalId'];
		    $data['address'] = $_POST['address'];
		    $data['phoneNumber'] = $_POST['phoneNumber'];
		    $data['email'] = $_POST['email'];
		    $data['password'] = md5($_POST['password']);
		    $data['numOfSuccessOrder'] = 0;

		    $status = $this->cus_model->store($data);

		    if($status == true){
				setcookie('msg','Thêm mới khách hàng thành công',time()+1);
		    	header('Location: ?mod=customer&act=list');
		    }
		    else {
		    	setcookie('msg','Cập nhật thông tin không thành công',time()+1);
		    	header('Location: ?mod=customer&act=add');
		    }
		}

		public function update(){
			$id = isset($_GET['id'])?$_GET['id']:0;
			$title = "Cập nhập Khách hàng";
			$customer = $this->cus_model->find($id);
			require_once('views/customer/customer_update.php');		
		}

		public function edit(){
			$data = array();
			$data['customerNumber'] = $_POST['customerNumber'];
			$data['customerName'] = $_POST['customerName'];
			$data['fullName'] = $_POST['fullName'];
			$data['nationalId'] = $_POST['nationalId'];
		    $data['address'] = $_POST['address'];
		    $data['phoneNumber'] = $_POST['phoneNumber'];
		    $data['email'] = $_POST['email'];
			if($_POST['password'] != '' && $_POST['password'] != null) 
				$data['password'] =  md5($_POST['password']);
			else $data['password'] = $_POST['password_old'];
		    $data['numOfSuccessOrder'] = $_POST['numOfSuccessOrder'];

		    $status = $this->cus_model->edit($data);

		    if($status == true){
				setcookie('msg','Cập nhật thông tin thành công',time()+1);
		    	header('Location: ?mod=customer&act=list');
		    }
		    else {
		    	setcookie('msg','Cập nhật thông tin không thành công',time()+1);
		    	header('Location: ?mod=customer&act=update&id='.$_POST['customerNumber']);
		    }
		}

		public function delete(){
			$id = isset($_GET['id'])?$_GET['id']:0;

		    $status = $this->cus_model->delete($id);
		    if($status == true){
		    	setcookie('msg','Xóa khách hàng thành công',time()+1);
		    }
		    else 
		    	setcookie('msg','Xóa khách hàng không thành công',time()+1);
		    header('Location: ?mod=customer');
		}
	}
 ?>