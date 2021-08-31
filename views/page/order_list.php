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
							<h2>Đơn hàng</h2>
							<ul class="text-left">
								<div class="product-breadcroumb">
									<a href="?mod=page&act=home">Trang chủ </a></li>
									<a>Đơn hàng</a>
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
				<?php if(isset($_COOKIE['msg'])){ ?>
					<div class="alert alert-info">
						<strong><?= $_COOKIE['msg'] ?></strong>
					</div>
				<?php }?>
				<div class="row">
					<div class="col-xs-12">
						<div class="table-responsive padding60">
							<table class="wishlist-table text-center">
								<thead>
									<tr>
										<th>#</th>
										<th>ID</th>
										<th>Email</th>
										<th>Họ tên</th>
										<th>Địa chỉ</th>
										<th>Số điện thoại</th>
										<th>Tổng tiền</th>
										<th>Trạng thái</th>
										<th>Hủy đơn</th>
									</tr>
								</thead>
								<tbody>
								    <?php 
									    foreach ($datas as $product) { 
									?>
									<tr>
										<td>
											<a href="?mod=page&act=orderDetail&id=<?= $product['orderNumber'] ?>" class="btn btn-success">Chi tiết</a> 	
										</td>
										<td><?= $product['orderNumber'] ?></td>
										<td><?= $product['email'] ?></td>
										<td><?= $product['customerName'] ?></td>
										<td><?= $product['address'] ?></td>
										<td><?= $product['phoneNumber'] ?></td>
										<td><strong><?= number_format($product['sumAmount']) ?> VND</strong></td>
										<td>
											<?php $status = array('-1' => '<span class="badge-pill badge-danger">Đã hủy</span>', '0' => '<span class="badge-pill badge-warning">Bị từ chối</span>', '1' => '<span class="badge-pill badge-info">Chờ xác nhận</span>',
											'2' => '<span class="badge-pill badge-primary">Đã xác nhận</span>', '3' => '<span class="badge-pill badge-info">Đang giao hàng</span>', '4' => '<span class="badge-pill badge-success">Đã hoàn thành</span>');
											echo $status[$product['status']] ?>
										</td>
										<?php if($product['status'] == 1) { ?>
											<td>
												<a href="?mod=order&act=cancel&id=<?= $product['orderNumber'] ?>" onclick="return confirm('Bạn chắc chắn muốn hủy đơn hàng này?');"><i class="mdi mdi-close" title="Remove this Order"></i>
											</td>
										<?php } else echo '<td></td>'?>
									</tr>
									<?php } ?>
								</tbody>
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
