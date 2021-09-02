<!DOCTYPE html>
<html class="no-js" lang="">
    <?php require_once('views/include/head.php') ?>
    <?php require_once('views/include/header.php') ?>
    <body>		
		<!-- pages-title-start -->
		<div class="pages-title section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="pages-title-text text-center">
							<h2><?= $data['productName'] ?></h2>
							<ul class="text-left">
								<div class="product-breadcroumb">
									<a href="?mod=page&act=home">Home</a>
									<a href="?mod=product&line=<?= $data['productLineNumber'] ?>&type=<?= $data['textDescription'] ?>"><?= $data['textDescription'] ?></a>
									<a><?= $data['productName'] ?></a>
								</div>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pages-title-end -->	
		<div class="single-product-area">
			<div class="zigzag-bottom"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="single-sidebar">
							<h2 class="sidebar-title">Related Products</h2>
							<!-- related products -->
							<?php foreach ($related_products as $value) { ?>
							<div class="thubmnail-recent">
								<a href="?mod=product&act=detail&id=<?= $value['productCode'] ?>&line=<?= $value['productLineNumber'] ?>">
									<img src=<?= $value['image'] ?> class="recent-thumb" alt="">
									<h4><?= $value['productName'] ?></h4>
									<div class="product-sidebar-price">
										<span><?= number_format($value['price']) ?> VND</span>
									</div>
								</a>                             
							</div>
							<?php } ?>
							<!-- End related products -->
						</div>
					</div>
					
					<div class="col-md-8">
						<div class="product-content-right">						
							<div class="row">
								<div class="col-sm-6">
									<div class="product-images">
										<div class="product-main-img">
											<img src=<?= $data['image'] ?> alt="IMG">
										</div>
										
										<div class="product-gallery">
											<img src="public/img/gallery/1.jpg" alt="img1">
											<img src="public/img/gallery/2.jpg" alt="img2">
											<img src="public/img/gallery/3.jpg" alt="img3">
										</div>
									</div>
								</div>
								
								<div class="col-sm-6">
									<div class="product-inner">
										<h2 class="product-name"><?= $data['productName'] ?></h2>
										<div class="product-inner-price">
											<?= number_format($data['price']) ?> VND
										</div>    
										
										<form action="?mod=cart&act=add&id=<?= $data['productCode'] ?>" class="cart" method="post">
											<div class="quantity">
												<input type="number" size="5" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
											</div>
											<button class="add_to_cart_button" type="submit">Add to Cart</button>
										</form>   
										<div class="product-information">
											<ul class="list-group">
												<li class="list-group-item disable"><b>Information</b></li>
												<li class="list-group-item">Category: <b><?= $data['textDescription'] ?></b></li>
												<li class="list-group-item">Stock: <b><?= number_format($data['quantityOfStock']) ?></b></li>
												<li class="list-group-item">Model Number: <b><?= $data['modelNumber'] ?></b></li>
												<li class="list-group-item">Year of manufacture: <b><?= $data['yearOfManufacture'] ?></b></li>
											</ul>
										</div> 																			
									</div>
								</div>
							</div>
						</div>                    
						<div role="tabpanel">
							<ul class="product-tab" role="tablist">
								<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
								<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Evaluate</a></li>
							</ul>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home">
									<h2>Description:</h2>
									<p><?= $data['productDescription'] ?></p>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="profile">
									<h2>Evaluate, review:</h2>
									<div class="submit-review">
										<p><label for="name">Name:</label> <input name="name" type="text"></p>
										<p><label for="email">Email:</label> <input name="email" type="email"></p>
										<div class="rating-chooser">
											<p>Evaluate:</p>
											<span class="rating-wrap-post">
												<i class="mdi mdi-star"></i>
												<i class="mdi mdi-star"></i>
												<i class="mdi mdi-star"></i>
												<i class="mdi mdi-star"></i>
												<i class="mdi mdi-star-half"></i>
											</span>
										</div>
										<p><label for="review">Review:</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
										<p><input type="submit" value="Submit"></p>
									</div>
								</div>
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
