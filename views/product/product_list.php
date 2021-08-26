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
							<h2><?php if(isset($_GET['type'])) echo $_GET['type']; ?></h2>
							<ul class="text-left">
								<div class="product-breadcroumb">
									<a href="?mod=page&act=home">Trang chủ</a>
									<a><?php if(isset($_GET['type'])) echo $_GET['type']; ?></a>
								</div>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pages-title-end -->
		<!-- shop content section start -->
		<div class="pages products-page section-padding text-center">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="right-products">
							<div class="row">
								<div class="grid-content">
									<?php foreach ($data as $value) { ?>
									<div class="col-xs-12 col-sm-6 col-md-3">
										<div class="single-product">
											<div class="product-img">
												<div class="pro-type">
													<span>new</span>
												</div>
												<a href="#"><img src=<?= $value['image'] ?> alt="Product Title" width="270px" height="340px"/></a>
												<div class="actions-btn">
													<a href="?mod=cart&act=add&id=<?= $value['productCode'] ?>"><i class="mdi mdi-cart"></i></a>
													<a href="?mod=product&act=detail&id=<?= $value['productCode'] ?>&line=<?= $value['productLineNumber'] ?>"><i class="mdi mdi-eye"></i></a>
													<a href="#"><i class="mdi mdi-heart"></i></a>
												</div>
											</div>
											<div class="product-dsc">
												<p><a href="?mod=product&act=detail&id=<?= $value['productCode'] ?>&line=<?= $value['productLineNumber'] ?>"><?= $value['productName'] ?></a></p>
												<div class="rating">
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star-half"></i>
												</div>
												<span class="product-price"><?= number_format($value['price'])?> VND</span>
											</div>
										</div>
									</div>
								    <?php } ?>
									<!-- single product end -->
								</div>
							</div>
							<div class="row">
								<!-- Pagination -->
								<nav aria-label="Page navigation example">
									<ul class="pagination pagination-lg">
										<li class="page-item"><a class="page-link" href="#">Previous</a></li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">Next</a></li>
									</ul>
								</nav>
								<!-- End Pagination -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- footer section start -->
		<?php require_once('views/include/footer.php') ?>        
		<!-- footer section end -->
        
		<!-- all js here -->
		<!-- jquery latest version -->
        <?php require_once('views/include/jquery.php') ?>
    </body>
</html>
