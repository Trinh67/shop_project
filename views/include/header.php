<?php
	if (isset($_POST['records-limit'])) {
		$_SESSION['records-limit'] = $_POST['records-limit'];
	}
?>
<header class="header-one">
			<div class="container-fluid text-center">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo">
							<a href="?mod=page&act=home"><img src="public/img/dev67.png" alt="Shop" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="header-middel">
							<div class="middel-top clearfix">
								<form action="?mod=page&act=search" method="POST" class="filter">
									<select name="line" class="form-control category-filter" >
										<option value="0">Chọn danh mục</option>
										<option value="1">Điện thoại</option>
										<option value="2">Laptop</option>
										<option value="3">Apple Watch</option>
									</select>
									<input type="number" min="0" max="9999999999" placeholder="Giá min" name = "min" class ="form-control price-filter"/>
									<input type="number" min="1" max="9999999999" placeholder="Giá max" name = "max" class ="form-control price-filter"/>
									<input type="text" placeholder="Tên sản phẩm..." name = "name" class ="form-control name-filter"/>
									<button type="submit" class="btn btn-success"><i class="mdi mdi-magnify">Tìm kiếm</i></button>
								</form>
							</div>
							<div class="mainmenu">
								<nav>
									<ul>
										<li><a href="?mod=page&act=home">Trang chủ</a></li>
										<li><a href="?mod=product&line=1&type=Điện thoại">Điện thoại</a></li>
										<li><a href="?mod=product&line=2&type=Laptop">Laptop</a></li>
										<li><a href="?mod=product&line=3&type=Apple">Apple Watch</a></li>
										<li>
											<a href="?mod=page&act=home"><i class="mdi mdi-account">
												<h5><?php if(isset($_SESSION['customer']['customerName'])) echo $_SESSION['customer']['customerName']; 
												else if(isset($_SESSION['admin']['employeeName'])) echo $_SESSION['admin']['employeeName'];?></h5>
											</i></a>
											<ul> 
												<?php if(isset($_SESSION['customer']) || isset($_SESSION['admin'])) { ?>												
												<li class="dropdown-item"><a href="?mod=login&act=logout">Đăng xuất</a></li>
												<li class="dropdown-item"><a href="?mod=page&act=account">Tài khoản</a></li>
												<li class="dropdown-item"><a href="?mod=order&act=list">Đơn hàng</a></li>
												<li class="dropdown-item"><a href="?mod=cart&act=list">Giỏ hàng</a></li>
											    <?php }else{ ?>
												<li><a href="?mod=login&act=login">Đăng nhập</a></li>
											    <?php } ?>	
											    <li><?php if(isset($_SESSION['admin']['lastName'])){ ?>
												        <a href="admin/?mod=page&act=dashboard">Admin</a>
												      </a>
												<?php } ?>
												</li>
											</ul>
										</li>
										<li><a href="#"><i class="mdi mdi-settings"></i></a>
										<?php if(isset($_SESSION['customer']) || isset($_SESSION['admin'])) { ?>
											<ul>
												
											</ul>
										<?php } ?>	
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="cart-itmes">
							<a class="cart-itme-a" href="?mod=cart&act=list">
								<i class="mdi mdi-cart"></i>
								<?php if(isset($_SESSION['cart'])) echo count($_SESSION['cart']); else echo '0';?> sản phẩm
							</a>
							<?php if(isset($_SESSION['customer']) || isset($_SESSION['admin'])) { ?>
							<div class="cartdrop">
								<a class="out-menu" href="?mod=cart&act=list">Giỏ hàng</a>
							</div>
						    <?php }?>
						</div>
					</div>
				</div>
			</div>
		</header>