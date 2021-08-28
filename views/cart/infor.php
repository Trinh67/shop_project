<?php 
	if(isset( $_SESSION['cart']))
		$products = $_SESSION['cart'];
	else $products = null;
 ?>
<!doctype html>
<html class="no-js" lang="">
    <?php require_once('views/include/head.php') ?>
        <!-- header section start -->
		<?php require_once('views/include/header.php') ?>
        <!-- header section end -->
        <!-- pages-title-start -->
		<div class="pages-title section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="pages-title-text text-center">
							<h2>Thông tin đặt hàng</h2>
							<ul class="text-left">
                                <div class="product-breadcroumb">
									<a href="?mod=page&act=home">Trang chủ </a></li>
									<a>Thông tin đặt hàng</a>
								</div>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pages-title-end -->
		<!-- Begin Page Content -->
        <div class="container-fluid" style="margin: 5%">
            <form style="width: 60%; height: 60%; margin-left: 20%; font-size: 20px" action="?mod=cart&act=order" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" required id="" aria-describedby="emailHelp" placeholder="" value = "<?php if(isset($_SESSION['customer']['email'])) echo $_SESSION['customer']['email']; 
											else if(isset($_SESSION['admin']['email'])) echo $_SESSION['admin']['email'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Họ tên</label>
                  <input type="text" class="form-control" required id="" placeholder="" name="name" value = "<?php if(isset($_SESSION['customer']['contactLastName'])) echo $_SESSION['customer']['contactLastName']; 
											else if(isset($_SESSION['admin']['lastName'])) echo $_SESSION['admin']['lastName'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone Number</label>
                  <input type="numberic" class="form-control" required id="" placeholder="" value = "<?php if(isset($_SESSION['customer']['phone'])) echo $_SESSION['customer']['phone'] ?>" name="phone">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" required id="" placeholder="" value = "<?php if(isset($_SESSION['customer']['addressLine1'])) { ?> <?=$_SESSION['customer']['addressLine1'] ?>, <?= $_SESSION['customer']['city'] ?>, <?= $_SESSION['customer']['country'] ?> <?php } ?>" name="address">
                </div>
                <a type="button" class="btn btn-warning" href="?mod=cart&act=list">Cart</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <!-- /.container-fluid -->
        <!-- footer section start -->
		<?php require_once('views/include/footer.php') ?>        
		<!-- footer section end -->
        
		<!-- all js here -->
		<!-- jquery latest version -->
        <?php require_once('views/include/jquery.php') ?>
    </body>
</html>
