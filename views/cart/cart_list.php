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
								<div class="product-breadcroumb">
									<a href="?mod=page&act=home">Trang chủ </a></li>
									<a>Giỏ hàng</a>
								</div>
							</ul>
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
									    foreach ($_SESSION['cart'] as $products) { 
											$product = $products[0];
											$sum_amount += $product['price']*$products['SoLuong'];
									?>
									<tr>
										<td class="td-img text-left">
											<a href="?mod=product&act=detail&id=<?= $product['productCode'] ?>" ><img src=<?= $product['image'] ?> alt="Add Product" /></a>
											<div class="items-dsc">
												<h5><a href="?mod=product&act=detail&id=<?= $product['productCode'] ?>"><?= $product['productName'] ?></a></h5>
											</div>
										</td>
										<td><?= number_format($product['price']) ?> VND</td>
										<td>
											<form action="#" method="POST">
												<div class="plus-minus">
													<a href="?mod=cart&act=add&id=<?= $product['productCode'] ?>" class="inc qtybutton">+</a>
													<input type="text" value="<?= $products['SoLuong'] ?>"name="qtybutton" class="plus-minus-box">
													<a href="?mod=cart&act=delete&id=<?= $product['productCode'] ?>" class="dec qtybutton">-</a>
												</div>
											</form>
										</td>
										<td>
											<strong><?= number_format($product['price']*$products['SoLuong']) ?> VND</strong>
										</td>
										<td><a href="?mod=cart&act=delete&del=2&id=<?= $product['productCode'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa mặt hàng này?');"><i class="mdi mdi-close" title="Remove this product"></i></td>
									</tr>
									<?php } ?>
									<?php if(isset($_SESSION['cart'])) { ?>
									<thead>
										<tr>
											<td colspan="1" align="left"><h4>Tổng tiền</h4></td>
											<td colspan="3" align="center"><h4><?= number_format($sum_amount) ?> VND</h4></td>
											<td align="center"><a href="?mod=cart&act=mail" class="btn btn-success">Đặt hàng</a></td>
										</tr>
									</thead>
								    <?php $_SESSION['sum'] = $sum_amount;
									}?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row margin-top">
					<div class="col-sm-6">
						<div class="single-cart-form padding60">
							<div class="log-title">
								<h3><strong>Mã giảm giá</strong></h3>
							</div>
							<div class="cart-form-text custom-input">
								<p>Dùng mã giảm giá ngay nếu có!</p>
								<form action="#" method="post">
									<input type="text" name="subject" placeholder="Mã giảm giá" />
									<div class="submit-text coupon">
										<button type="submit">Áp dụng mã</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="single-cart-form padding60">
							<div class="log-title">
								<h3><strong>Chi tiết đơn hàng</strong></h3>
							</div>
							<div class="cart-form-text pay-details table-responsive">
								<table>
									<tbody>
										<tr>
											<th>Tổng giá trị sản phẩm</th>
											<td><?= number_format($sum_amount) ?>VND</td>
										</tr>
										<tr>
											<th>Phí phục vụ</th>
											<td>30,000 VND</td>
										</tr>
										<tr>
											<th>Vat (5%)</th>
											<td><?= number_format($sum_amount*0.05) ?>VND</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th class="tfoot-padd">Tổng đơn hàng</th>
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
