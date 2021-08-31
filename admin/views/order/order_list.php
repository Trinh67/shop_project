<!DOCTYPE html>
<html lang="en">
<?php require_once('public/require/head.php') ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php require_once('public/require/sidebar.php') ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php require_once('public/require/header.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
       
          
      <!-- Page Heading -->
      <div class="container-fluid">
        <h2 align="center">Đơn hàng</h2>
          <?php if(isset($_COOKIE['msg'])){ ?>
            <div class="alert alert-success">
              <strong><?= $_COOKIE['msg'] ?></strong>
            </div>
          <?php }?>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Danh sách đơn hàng</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                    <th>ID</th>
                    <th>Tên khách hàng</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Tổng đơn hàng</th>
                    <th>Trạng thái</th>
                    <th>Action</th>
                  </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $order) { ?>              
              <tr>
                    <td><?= $order['orderNumber'] ?></td>
                    <td><?= $order['customerName'] ?></td>
                    <td><?= $order['address'] ?></td>
                    <td><?= $order['email'] ?></td>
                    <td><?= $order['phoneNumber'] ?></td>
                    <td align="right"><?= number_format($order['sumAmount']) ?> VND</td>
                    <td><?php $status = array('-1' => '<span class="badge badge-pill badge-danger">Đã hủy</span>', '0' => '<span class="badge badge-pill badge-warning">Bị từ chối</span>', '1' => '<span class="badge badge-pill badge-info">Chờ xác nhận</span>',
                        '2' => '<span class="badge badge-pill badge-primary">Đã xác nhận</span>', '3' => '<span class="badge badge-pill badge-info">Đang giao hàng</span>', '4' => '<span class="badge badge-pill badge-success">Đã hoàn thành</span>');
										 echo $status[$order['status']] ?></td>
                    <td>
                      <a href="../?mod=page&act=orderDetail&id=<?= $order['orderNumber'] ?>" class="btn btn-success">Chi tiết</a> 
                      <?php if($order['status'] > 0 && $order['status'] < 4) { ?>
											  <div class="dropdown dropleft float-right">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Action
                          </button>
                          <div class="dropdown-menu">
                            <?php if($order['status'] == 1) { ?>
                              <a class="dropdown-item text-warning" href="?mod=order&act=update&val=0&id=<?= $order['orderNumber'] ?>"><i class="fas fa-times-circle"></i> Từ chối</a>
                              <a class="dropdown-item text-primary" href="?mod=order&act=update&val=2&id=<?= $order['orderNumber'] ?>"><i class="fas fa-check-circle"></i> Xác nhận</a>
                            <?php } else if($order['status'] == 2) { ?>
                              <a class="dropdown-item text-info" href="?mod=order&act=update&val=3&id=<?= $order['orderNumber'] ?>"><i class="fas fa-check"></i> Đang giao</a>
                            <?php } else if($order['status'] == 3) { ?>
                              <a class="dropdown-item text-success" href="?mod=order&act=update&val=4&id=<?= $order['orderNumber'] ?>"><i class="fas fa-check-square"></i> Hoàn thành</a>
                            <?php } ?>
                          </div>
                        </div>
										  <?php } ?>
                    </td>
                  </tr>
            <?php } ?>
            </tbody>
          </table>
      </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php require_once('public/require/logout_modal.php') ?>;

  <?php require_once('public/require/js.php') ?>;

</body>

</html>
