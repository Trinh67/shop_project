<?php 
	if(isset( $_SESSION['cart']))
		$products = $_SESSION['cart'];
	else $products = null;
?>
<!doctype html>
<html class="no-js" lang="">
    <?php require_once('views/include/head.php') ?>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header section start -->
		<?php require_once('views/include/header.php') ?>
        <!-- header section end -->
        <!-- pages-title-start -->
		<div class="pages-title section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="pages-title-text text-center">
							<h2>Cart</h2>
							<ul class="text-left">
								<li><a href="?mod=page&act=home">Home </a></li>
								<li><span> // </span>Cart</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pages-title-end -->
		<!-- cart content section start -->
		<section class="pages cart-page section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="table-responsive padding60">
							<table class="wishlist-table text-center">
								<thead>
									<tr>
										<th>Product</th>
										<th>Price</th>
										<th>Quantity</th>
										<th>Total Price</th>
										<th>Remove</th>
									</tr>
								</thead>
								<tbody>
								    <?php 
										$sum_amount = 0;
										if($products != null)
									    foreach ($products as $product) { 
											$sum_amount += (($product['buyPrice']*(100 - $product['sales_percent'])/100)*$product['SoLuong']);
									?>
									<tr>
										<td class="td-img text-left">
											<a href="?mod=product&act=detail&id=<?= $product['productCode'] ?>" ><img src=<?= $product['image'] ?> alt="Add Product" /></a>
											<div class="items-dsc">
												<h5><a href="?mod=product&act=detail&id=<?= $product['productCode'] ?>"><?= $product['productName'] ?></a></h5>
												<p class="itemcolor">Color : <span>Blue</span></p>
												<p class="itemcolor">Size   : <span>SL</span></p>
											</div>
										</td>
										<td><?= number_format(($product['buyPrice']*(100 - $product['sales_percent'])/100)) ?> VND</td>
										<td>
											<form action="#" method="POST">
												<div class="plus-minus">
													<a href="?mod=cart&act=add&id=<?= $product['productCode'] ?>" class="inc qtybutton">+</a>
													<input type="text" value="<?= $product['SoLuong'] ?>"name="qtybutton" class="plus-minus-box">
													<a href="?mod=cart&act=delete&id=<?= $product['productCode'] ?>" class="dec qtybutton">-</a>
												</div>
											</form>
										</td>
										<td>
											<strong><?= number_format(($product['buyPrice']*(100 - $product['sales_percent'])/100)*$product['SoLuong']) ?> VND</strong>
										</td>
										<td><a href="?mod=cart&act=delete&del=2&id=<?= $product['productCode'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa mặt hàng này?');"><i class="mdi mdi-close" title="Remove this product"></i></td>
									</tr>
									<?php } ?>
									<?php if(isset($_SESSION['cart'])) { ?>
									<thead>
										<tr>
											<td colspan="3" align="left"><h4>Sum Amount</h4></td>
											<td align="center"><h4><?= number_format($sum_amount) ?></h4> VND</td>
											<td align="center"><a href="?mod=cart&act=mail" class="btn btn-success">Order</a></td>
										</tr>
									</thead>
								    <?php $_SESSION['sum'] = $sum_amount;}?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row margin-top">
					<div class="col-sm-6">
						<div class="single-cart-form padding60">
							<div class="log-title">
								<h3><strong>coupon discount</strong></h3>
							</div>
							<div class="cart-form-text custom-input">
								<p>Enter your coupon code if you have one!</p>
								<form action="mail.php" method="post">
									<input type="text" name="subject" placeholder="Enter your code hereviews." />
									<div class="submit-text coupon">
										<button type="submit">apply coupon </button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="single-cart-form padding60">
							<div class="log-title">
								<h3><strong>payment details</strong></h3>
							</div>
							<div class="cart-form-text pay-details table-responsive">
								<table>
									<tbody>
										<tr>
											<th>Cart Subtotal</th>
											<td><?= number_format($sum_amount) ?>VND</td>
										</tr>
										<tr>
											<th>Shipping and Handing</th>
											<td>30,000 VND</td>
										</tr>
										<tr>
											<th>Vat (5%)</th>
											<td><?= number_format($sum_amount*0.05) ?>VND</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th class="tfoot-padd">Order total</th>
											<td class="tfoot-padd"><?= number_format($sum_amount*1.05 + 30000) ?>VND</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- cart content section end -->
        <!-- footer section start -->
		<?php require_once('views/include/footer.php') ?>        
		<!-- footer section end -->
        
		<!-- all js here -->
		<!-- jquery latest version -->
        <?php require_once('views/include/jquery.php') ?>
    </body>
</html>
