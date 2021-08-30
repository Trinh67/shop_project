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
							<h2>Đăng nhập - Đăng kí</h2>
							<ul class="text-left">
								<div class="product-breadcroumb">
									<a href="?mod=page&act=home">Trang chủ </a>
									<a>Đăng nhập - Đăng kí</a>
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
						<strong>Thất bại! </strong><?= $_COOKIE['msg'] ?>
					</div>
				<?php }?>
				<div class="row">
					<div class="col-sm-6">
						<div class="main-input padding60">
							<div class="log-title">
								<h3><strong>Đăng nhập</strong></h3>
							</div>
							<div class="login-text">
								<div class="custom-input">
									<form action="?mod=login&act=login_action" method="POST">
										<input type="email" required name="email" placeholder="Email" />
										<input type="password" required name="password" placeholder="Password" />
										<a class="forget" href="#">Quên mật khẩu?</a>
										<div>
										    <button type="submit" class=" submit-text btn btn-primary">Đăng nhập</button>
									    </div>
									</form>
								</div>
								<div class="submit-text coupon">
							<a href="admin/?mod=page&act=dashboard">Trang quản trị Admin</a>
						</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="main-input padding60 new-customer">
							<div class="log-title">
								<h3><strong>Đăng kí</strong></h3>
							</div>
							<div class="custom-input">
								<form action="?mod=login&act=register" method="post">
									<input type="text" required name="customerName" placeholder="User name.." />
									<input type="text" required name="fullName" placeholder="Full name here.." />
									<input type="text" required name="nationalId" placeholder="Id quốc gia.." />
									<input type="text" required name="address" placeholder="Địa chỉ.." />
									<input type="text" required name="phoneNumber" placeholder="Số điện thoại.." />
									<input type="text" required name="email" placeholder="Email" />
									<input type="password" required name="password" placeholder="Mật khẩu.." />
									<div>
										<button type="submit" class=" submit-text btn btn-primary">Đăng kí</button>
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
