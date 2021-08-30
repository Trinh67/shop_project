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
        <h2 align="center">List Orders</h2>
          <?php if(isset($_COOKIE['msg'])){ ?>
            <div class="alert alert-success">
              <strong><?= $_COOKIE['msg'] ?></strong>
            </div>
          <?php }?>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables List Orders</h6>
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
                    <td><?= number_format($order['sumAmount']) ?></td>
                    <td><?php $status = array('-1' => '<span class="badge badge-pill badge-danger">Đã hủy</span>', '0' => '<span class="badge badge-pill badge-warning">Bị từ chối</span>', '1' => '<span class="badge badge-pill badge-info">Chờ xác nhận</span>',
                        '2' => '<span class="badge badge-pill badge-primary">Đã xác nhận</span>', '3' => '<span class="badge badge-pill badge-info">Đang giao hàng</span>', '4' => '<span class="badge badge-pill badge-success">Đã hoàn thành</span>');
										 echo $status[$order['status']] ?></td>
                    <td><a href="?mod=order&act=detail&id=<?= $order['orderNumber'] ?>" class="btn btn-success">Chi tiết</a> 
                    <div class="dropdown dropleft float-right">
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Action
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item text-warning" href="#"><i class="fas fa-times-circle"></i> Từ chối</a>
                        <a class="dropdown-item text-primary" href="#"><i class="fas fa-check-circle"></i> Xác nhận</a>
                        <a class="dropdown-item text-info" href="#"><i class="fas fa-times"></i> Đang giao</a>
                        <a class="dropdown-item text-success" href="#"><i class="fas fa-check-square"></i> Hoàn thành</a>
                      </div>
                    </div>
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
