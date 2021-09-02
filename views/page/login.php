<!doctype html>
<html class="no-js" lang="">
    <?php require_once('views/include/head.php') ?>
    <body>
        <!-- header section start -->
		<?php require_once('views/include/header.php') ?>
        <!-- header section end -->
        <!-- pages-title-start -->
		<div class="pages-title section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="pages-title-text text-center">
							<h2>Login - Register</h2>
							<ul class="text-left">
								<div class="product-breadcroumb">
									<a href="?mod=page&act=home">Home </a>
									<a>Login - Register</a>
								</div>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pages-title-end -->
		<!-- login content section start -->
		<section class="pages login-page section-padding"> 
			<div class="container">
				<?php if(isset($_COOKIE['msg'])){ ?>
					<div class="alert alert-danger">
						<strong>Failed! </strong><?= $_COOKIE['msg'] ?>
					</div>
				<?php }?>
				<div class="row">
					<div class="col-sm-6">
						<div class="main-input padding60">
							<div class="log-title">
								<h3><strong>Login</strong></h3>
							</div>
							<div class="login-text">
								<div class="custom-input">
									<form action="?mod=login&act=login_action" method="POST">
										<input type="text" required name="username" placeholder="User Name" />
										<input type="password" required name="password" placeholder="Password" />
										<a class="forget" href="#">Forget Password?</a>
										<div>
										    <button type="submit" class=" submit-text btn btn-primary">Login</button>
									    </div>
									</form>
								</div>
								<div class="submit-text coupon">
							<a href="admin/?mod=page&act=dashboard">Admin Page</a>
						</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="main-input padding60 new-customer">
							<div class="log-title">
								<h3><strong>Register</strong></h3>
							</div>
							<div class="custom-input">
								<form action="?mod=login&act=register" method="post">
									<input type="text" required name="customerName" placeholder="User Name.." />
									<input type="text" required name="fullName" placeholder="Full Name.." />
									<input type="text" required name="nationalId" placeholder="National Id.." />
									<input type="text" required name="address" placeholder="Address.." />
									<input type="text" required name="phoneNumber" placeholder="Phone Number.." />
									<input type="text" required name="email" placeholder="Email" />
									<input type="password" required name="password" placeholder="Password.." />
									<div>
										<button type="submit" class=" submit-text btn btn-primary">Register</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- login content section end -->
        <!-- footer section start -->
		<?php require_once('views/include/footer.php') ?>        
		<!-- footer section end -->
        
		<!-- all js here -->
		<!-- jquery latest version -->
        <?php require_once('views/include/jquery.php') ?>
    </body>
</html>
