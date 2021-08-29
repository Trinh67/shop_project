<!DOCTYPE html>
<html class="no-js" lang="">
    <?php require_once('views/include/head.php') ?>
    <body onload="return <?php if(isset($_COOKIE['msg'])){ ?>
			            alert('<?= $_COOKIE['msg'] ?>. Tiếp tục mua hàng nào!!!')
			          <?php }?>">

        <!-- header section start -->
		<?php require_once('views/include/header.php') ?>
        <!-- header section end -->
        
        <!-- slider-section-start -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			<div class="item active">
				<img src="public/img/slider/1.jpg" alt="img" style="width:100%;">
			</div>

			<div class="item">
				<img src="public/img/slider/2.jpg" alt="img" style="width:100%;">
			</div>
			
			<div class="item">
				<img src="public/img/slider/3.jpg" alt="img" style="width:100%;">
			</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- slider section end -->
        <!-- featured-products section start -->
		<section class="pages products-page section-padding text-center extra-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title text-center">
							<h2>Sản phẩm mới nhất!</h2>
						</div>
					</div>
				</div>
				<div class="wrapper">
					<ul class="load-list load-list-one">
						<li>
							<div class="row text-center">
								<div class="grid-content">
								<?php foreach ($data_hot as $value) { ?>
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
						</li>
					</ul>
					<!-- Pagination -->
					<?php require_once('views/include/home_pagination.php') ?>
					<!-- End Pagination -->
				</div>
			</div>
		</section>
		<!-- featured-products section end -->
        <!-- service section start -->
		<section class="service-area section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title text-center">
							<h2>Dịch vụ nổi bật</h2>
						</div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-sm-4">
						<div class="service-text">
							<i class="mdi mdi-truck"></i>
							<h4>Free ship</h4>
							<p>Miễn phí giao hàng tận nhà(Thời gian giao có thể phụ thuộc vào khoảng cách địa lí)</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="service-text">
							<i class="mdi mdi-lock"></i>
							<h4>Bảo mật Thanh Toán</h4>
							<p>Mọi thông tin thanh toán đều được đảm bảo bảo mật. Vì vậy bạn hãy an tâm sử dụng!</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="service-text">
							<i class="mdi mdi-rotate-left"></i>
							<h4>15 ngày hoàn trả</h4>
							<p>Bạn có thể trả lại sản phẩm sau khi mua 15 ngày nếu thấy sản phẩm không phù hợp</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- service section end -->
        <!-- footer section start -->
		<?php require_once('views/include/footer.php') ?>
        <!-- footer section end -->
        
		<!-- all js here -->
		<!-- jquery latest version -->
        <?php require_once('views/include/jquery.php') ?>
    </body>
	<script>
		$(document).ready(function() {
			$('#records-limit').change(function() {
				$('form').submit();
			});
		});
	</script>
</html>
