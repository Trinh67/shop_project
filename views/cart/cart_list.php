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
									<a href="?mod=page&act=home">Home </a></li>
									<a>Cart</a>
								</div>
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
										<th>Total</th>
										<th>Remove</th>
									</tr>
								</thead>
								<tbody>
								    <?php 
										$sum_amount = 0;
										if($products != null)
									    foreach ($_SESSION['cart'] as $products) { 
											$product = $products[0];
											$sum_amount += $product['price']*$products['quantity'];
									?>
									<tr>
										<td class="td-img text-left">
											<a href="?mod=product&act=detail&id=<?= $product['productCode'] ?>&line=<?= $product['productLineNumber'] ?>" ><img src=<?= $product['image'] ?> alt="Add Product" /></a>
											<div class="items-dsc">
												<h5><a href="?mod=product&act=detail&id=<?= $product['productCode'] ?>&line=<?= $product['productLineNumber'] ?>"><?= $product['productName'] ?></a></h5>
											</div>
										</td>
										<td><?= number_format($product['price']) ?> VND</td>
										<td>
											<form action="#" method="POST">
												<div class="plus-minus">
													<?php if ($products['quantity'] > 1) { ?><a href="?mod=cart&act=delete&id=<?= $product['productCode'] ?>" class="dec qtybutton">-</a><?php } ?>
													<input type="text" value="<?= $products['quantity'] ?>" name="qtybutton" class="plus-minus-box">
													<?php if ($products['quantity'] < $product['quantityOfStock']) { ?><a href="?mod=cart&act=add&id=<?= $product['productCode'] ?>" class="inc qtybutton">+</a><?php } ?>
												</div>
											</form>
										</td>
										<td>
											<strong><?= number_format($product['price']*$products['quantity']) ?> VND</strong>
										</td>
										<td><a href="?mod=cart&act=delete&del=2&id=<?= $product['productCode'] ?>" onclick="return confirm('You definitely want to delete this item?');"><i class="mdi mdi-close" title="Remove this product"></i></td>
									</tr>
									<?php } ?>
									<?php $_SESSION['sum'] = $sum_amount;
										  if(isset($_SESSION['cart']) && $_SESSION['sum'] > 0) { ?>
									<thead>
										<tr>
											<td colspan="1" align="left"><h4>Total</h4></td>
											<td colspan="3" align="center"><h4><?= number_format($sum_amount) ?> VND</h4></td>
											<td align="center"><a href="?mod=cart&act=mail" class="btn btn-success">Order</a></td>
										</tr>
									</thead>
								    <?php }?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row margin-top">
					<div class="col-sm-8">
						<div class="single-cart-form padding60">
							<div class="log-title">
								<h3><strong>Discount code</strong></h3>
							</div>
							<div class="cart-form-text custom-input">
								<p>Use discount code now if available!</p>
								<form action="#" method="post">
									<input type="text" name="subject" placeholder="Discount code" />
									<div class="submit-text coupon">
										<button type="submit">Apply</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="logo" style="padding: 15%; text-align: center;">
							<a href="?mod=page&act=home"><img src="public/img/dev67.png" width: 150%; alt="Shop" /></a>
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
