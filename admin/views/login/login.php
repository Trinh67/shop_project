<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="public/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="public/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="public/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="public/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="public/img/dev67.png" alt="IMG" width="360px" height="260px">
				</div>

				<form class="login100-form validate-form" action="?mod=login&act=login_action" method="POST" role="form" enctype="multipart/form-data">
					<span class="login100-form-title" style="font-size: 36px;">
						Đăng nhập
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid username is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Tên đăng nhập">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					    <?php if(isset($_COOKIE['msg'])){ ?>
                            <div class="alert alert-danger">
								<strong>Thất bại! </strong><?= $_COOKIE['msg'] ?>
							</div>
                        <?php }?>  
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Đăng nhập
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Quên mật khẩu?
						</span>
					</div>

					<div class="text-center p-t-136">
						<div>
							<a class="txt2" href="../?mod=page&act=home">
								<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
								Trang bán hàng
							</a>
					    </div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

		
	<script src="public/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="public/vendor/bootstrap/js/popper.js"></script>
	<script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="public/vendor/select2/select2.min.js"></script>
	<script src="public/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="public/js/main.js"></script>

</body>
</html>