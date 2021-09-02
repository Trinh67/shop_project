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
										<option value="0">Category</option>
										<option value="1">Phone</option>
										<option value="2">Laptop</option>
										<option value="3">Apple Watch</option>
									</select>
									<input type="number" min="0" max="9999999999" placeholder="Price min" name = "min" class ="form-control price-filter"/>
									<input type="number" min="1" max="9999999999" placeholder="Price max" name = "max" class ="form-control price-filter"/>
									<input type="text" placeholder="Product Name..." name = "name" class ="form-control name-filter"/>
									<button type="submit" class="btn btn-success"><i class="mdi mdi-magnify">Search</i></button>
								</form>
							</div>
							<div class="mainmenu">
								<nav>
									<ul>
										<li><a href="?mod=page&act=home">Home</a></li>
										<li><a href="?mod=product&line=1&type=Phone">Phone</a></li>
										<li><a href="?mod=product&line=2&type=Laptop">Laptop</a></li>
										<li><a href="?mod=product&line=3&type=Apple">Apple Watch</a></li>
										<li>
											<a href="?mod=page&act=home"><i class="mdi mdi-account">
												<h5><?php if(isset($_SESSION['customer']['customerName'])) echo $_SESSION['customer']['customerName'];?></h5>
											</i></a>
											<ul> 
												<?php if(isset($_SESSION['customer'])) { ?>												
												<li class="dropdown-item"><a href="?mod=login&act=logout">Logout</a></li>
												<li class="dropdown-item"><a href="?mod=page&act=account">My account</a></li>
												<li class="dropdown-item"><a href="?mod=order&act=list">Orders</a></li>
												<li class="dropdown-item"><a href="?mod=cart&act=list">Cart</a></li>
											    <?php }else{ ?>
												<li class="dropdown-item"><a href="?mod=login&act=login">Login</a></li>
											    <?php } ?>	
											</ul>
										</li>
										<li>
											<a href="#"><i class="mdi mdi-settings"></i></a>
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
								<?php if(isset($_SESSION['cart'])) echo count($_SESSION['cart']); else echo '0';?> Product
							</a>
							<?php if(isset($_SESSION['customer']) || isset($_SESSION['admin'])) { ?>
							<div class="cartdrop">
								<a class="out-menu" href="?mod=cart&act=list">Cart</a>
							</div>
						    <?php }?>
						</div>
					</div>
				</div>
			</div>
		</header>