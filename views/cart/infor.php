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
                  <input type="email" class="form-control" required name="email" value = "<?php if(isset($_SESSION['customer']['email'])) echo $_SESSION['customer']['email']; 
											else if(isset($_SESSION['admin']['email'])) echo $_SESSION['admin']['email'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Họ tên</label>
                  <input type="text" class="form-control" required name="fullName" value = "<?php if(isset($_SESSION['customer']['fullName'])) echo $_SESSION['customer']['fullName']; 
											else if(isset($_SESSION['admin']['fullName'])) echo $_SESSION['admin']['fullName'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Số điện thoại</label>
                  <input type="text" class="form-control" required name="phoneNumber" value = "<?php if(isset($_SESSION['customer']['phoneNumber'])) echo $_SESSION['customer']['phoneNumber'] ?>" name="phone">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Địa chỉ</label>
                    <input type="text" class="form-control" required id="" placeholder="" value = "<?php if(isset($_SESSION['customer']['address'])) { ?> <?=$_SESSION['customer']['address'] ?> <?php } ?>" name="address">
                </div>
                <button class="btn btn-info"><a href="?mod=cart&act=list"><- Giỏ hàng</a></button>
                <button type="submit" class="btn btn-success">Gửi</button>
            </form>
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
