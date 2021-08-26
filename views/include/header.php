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
									<select name="category" class="form-control category-filter">
										<option value="0" selected>Chọn danh mục</option>
										<option value="1">Điện thoại</option>
										<option value="2">Laptop</option>
										<option value="3">Apple Watch</option>
									</select>
									<input type="number" min="1" max="999999999"placeholder="Giá min" name = "min" class ="form-control price-filter"/>
									<input type="number" min="1" placeholder="Giá max" name = "max" class ="form-control price-filter"/>
									<input type="text" placeholder="Tên sản phẩm..." name = "data" class ="form-control name-filter"/>
									<button type="submit" class="btn btn-success"><i class="mdi mdi-magnify">Tìm kiếm</i></button>
								</form>
							</div>
							<div class="mainmenu">
								<nav>
									<ul>
										<li><a href="?mod=page&act=home">Trang chủ</a></li>
										<li><a href="?mod=product&line=1&type=Phone">Phone</a></li>
										<li><a href="?mod=product&line=2&type=Laptop">Laptop</a></li>
										<li><a href="?mod=product&line=3&type=Apple">Apple Watch</a></li>
										<li><a href="?mod=page&act=home"><i class="mdi mdi-account"></i></a>
											<h5><?php if(isset($_SESSION['customer']['contactLastName'])) echo $_SESSION['customer']['contactLastName']; 
											else if(isset($_SESSION['admin']['lastName'])) echo $_SESSION['admin']['lastName'];?></h5>
											<ul> 
												<?php if(isset($_SESSION['customer']) or isset($_SESSION['admin'])) { ?>												
												<li><a href="?mod=login&act=logout">Đăng xuất</a></li>
												<li><a href="?mod=page&act=account">Tài khoản</a></li>
												<li><a href="?mod=page&act=order">Đơn hàng</a></li>
												<li><a href="?mod=cart&act=list">Giỏ hàng</a></li>
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
										<?php if(isset($_SESSION['customer']) or isset($_SESSION['admin'])) { ?>
											<ul>
												<li><a href="?mod=page&act=account">Tài khoản</a></li>
												<li><a href="?mod=page&act=order">Đơn hàng</a></li>
												<li><a href="?mod=cart&act=list">Giỏ hàng</a></li>
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
								<?php if(isset($_SESSION['cart'])) echo count($_SESSION['cart']); else echo '0';?> sản phẩm:  <strong><?php if(isset($_SESSION['sum'])) echo number_format($_SESSION['sum']); else echo '0';?> VND</strong>
							</a>
							<?php if(isset($_SESSION['customer']) or isset($_SESSION['admin'])) { ?>
							<div class="cartdrop">
								<a class="out-menu" href="?mod=cart&act=list">Giỏ hàng</a>
							</div>
						    <?php }?>
						</div>
					</div>
				</div>
			</div>
		</header>