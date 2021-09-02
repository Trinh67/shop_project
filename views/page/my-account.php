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
							<h2>My account</h2>
							<ul class="text-left">
								<div class="product-breadcroumb">
									<a href="?mod=page&act=home">Home </a>
									<a>My account</a>
								</div>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pages-title-end -->
		<!-- My account content section start -->
		<section class="pages my-account-page section-padding">
			<div class="container">
				<?php if(isset($_COOKIE['msg'])){ ?>
					<div class="alert alert-info">
						<strong><?= $_COOKIE['msg'] ?></strong>
					</div>
				<?php }?>
				<div class="row">
				    <div class="col-xs-12 col-sm-2"></div>
					<div class="col-xs-12 col-sm-8">
						<div class="padding60">
							<div class="log-title" align="center">
								<h3><strong>Thông tin My account</strong></h3>
							</div>
							<div class="prament-area main-input">
								<ul class="panel-group" id="accordion">
									<li class="panel">
										<div id="collapse1" class="panel-collapse collapse in">
											<div class="single-log-info">
												<div class="custom-input">
													<form action="?mod=login&act=edit" method="post" style="color: black">
														<div class="row">
															<div class="col-md-6" >
																<label>User Name *:</label>
																<input style="color: black" type="text" required name="customerName" value="<?php if(isset($_SESSION['customer']['customerName'])) echo $_SESSION['customer']['customerName'];?>" />
															</div>
															<div class="col-md-6">
																<label>Full Name *:</label>
																<input style="color: black" type="text" required name="fullName" value="<?php if(isset($_SESSION['customer']['fullName'])) echo $_SESSION['customer']['fullName']; ?>"/>
															</div>
														</div>
														<label>National Id *:</label>
														<input style="color: black" type="text" required name="nationalId" value="<?php if(isset($_SESSION['customer']['nationalId'])) echo $_SESSION['customer']['nationalId'] ?> "/>
														<label>Address *:</label>
														<input style="color: black" type="text" required name="address" value="<?php if(isset($_SESSION['customer']['address'])) echo $_SESSION['customer']['address'] ?> "/>
														<label>Phone Number *:</label>
														<input style="color: black" type="text" required name="phoneNumber" value="<?php if(isset($_SESSION['customer']['phoneNumber'])) echo $_SESSION['customer']['phoneNumber']; ?>"/>
														<label>Email *:</label>
														<input style="color: black" type="email" required name="email" value="<?php if(isset($_SESSION['customer']['email'])) echo $_SESSION['customer']['email']; ?>"/>
														<label>Password:</label>
														<input style="color: black" type="text" name="password" placeholder="Password mới.." />
														<label>Num of success Order:</label>
														<input style="color: black" type="text" disabled name="numOfSuccessOrder" value="<?php if(isset($_SESSION['customer']['numOfSuccessOrder'])) echo $_SESSION['customer']['numOfSuccessOrder'] ?> "/>
														<button type="submit" class="btn btn-primary">Save</button>
													</form>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- my account content section end -->
        <!-- footer section start -->
		<?php require_once('views/include/footer.php') ?>        
		<!-- footer section end -->
        
		<!-- all js here -->
		<!-- jquery latest version -->
        <?php require_once('views/include/jquery.php') ?>    
    </body>
</html>
