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
										<th>ID</th>
										<th>email</th>
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
										<td><?= $product['orderNumber'] ?></td>
										<td><?= $product['email'] ?></td>
										<td><?= $product['customerName'] ?></td>
										<td><?= $product['address'] ?></td>
										<td><?= $product['phoneNumber'] ?></td>
										<td><strong><?= number_format($product['sumAmount']) ?> VND</strong></td>
										<td><span class="badge badge-pill badge-success"><?php $status = array('-1' => 'Đã hủy', '0' => 'Bị từ chối', '1' => 'Chờ xác nhận', '2' => 'Đang giao hàng', '3' => 'Đã hoàn thành');
										 echo $status[$product['status']] ?></span></td>
										<?php if($product['status'] == 1) { ?>
											<td><a href="?mod=order&act=cancel&id=<?= $product['orderNumber'] ?>" onclick="return confirm('Bạn chắc chắn muốn hủy đơn hàng này?');"><i class="mdi mdi-close" title="Remove this Order"></i></td>
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
