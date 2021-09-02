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
							<h2>Detail Orders</h2>
							<ul class="text-left">
								<div class="product-breadcroumb">
									<a href="?mod=page&act=home">Home </a></li>
									<a>Detail Orders</a>
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
									</tr>
								</thead>
								<tbody>
								    <?php 
										$sum_amount = 0;										
									    foreach ($orders as $product) { 
											$sum_amount += $product['price']*$product['quantityOrdered'];
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
											<div class="plus-minus">
												<h5><?= $product['quantityOrdered'] ?></h5>
											</div>
										</td>
										<td>
											<strong><?= number_format($product['price']*$product['quantityOrdered']) ?> VND</strong>
										</td>
									</tr>
									<?php } ?>
								</tbody>
								<thead>
									<tr>
										<td colspan="3" align="left"><h3 style="color:green">Total</h3></td>
										<td colspan="1" align="right"><h3><?= number_format($sum_amount) ?> VND</h3></td>
									</tr>
								</thead>
							</table>
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
