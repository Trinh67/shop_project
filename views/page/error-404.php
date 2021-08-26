<!doctype html>
<html class="no-js" lang="">
    <?php require_once('views/include/head.php') ?>
    <body>
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
							<h2>404</h2>
							<ul class="text-left">
								<li><a href="index.php">Home </a></li>
								<li><span> // </span>404</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pages-title-end -->
		<!-- 404 content section start -->
		<div class="pages error-page section-padding">
			<div class="container text-center">
				<div class="error-content">
					<img src="public/img/error.png" alt="" />
					<h4>Ooops.... Error 404</h4>
					<p>Sorry, But the page you are looking for does't exist</p>
					<form action="#" method="get">
						<input type="text" placeholder="Search within these results..." />
						<button type="submit"><i class="mdi mdi-magnify"></i></button>
					</form>
					<h5>or</h5>
					<a href="index.php">go to home page</a>
				</div>
			</div>
		</div>
		<!-- 404 content section end -->
        <!-- footer section start -->
		<?php require_once('views/include/footer.php') ?>
		<!-- footer section end -->
        
		<!-- all js here -->
		<!-- jquery latest version -->
        <?php require_once('views/include/jquery.php') ?>
    </body>
</html>
