<!DOCTYPE html>
<html>
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
        <div class="container-fluid">

          <!-- Page Heading -->
            <h3 align="center">Customer Detail</h3>
            <hr>
            <table class="table">
                <th style="width: 400px">#</th>
                <th>Thông tin</th>
                <tbody>
                  <tr><h2><td>Tên hiển thị:</td><td><?php echo $cus["customerName"] ?></td></h2></tr>
                  <tr><h2><td>Họ tên:</td><td><?php echo $cus["fullName"] ?></td></h2></tr>
                  <tr><h2><td>ID quốc gia:</td><td><?php echo $cus["nationalId"] ?></td></h2></tr>
                  <tr><h2><td>Địa chỉ:</td><td><?php echo $cus["address"] ?></td></h2></tr>
                  <tr><h2><td>Email:</td><td><?php echo $cus["email"] ?></td></h2></tr>
                  <tr><h2><td>Số điện thoại:</td><td><?php echo $cus["phoneNumber"] ?></td></h2></tr>
                  <tr><h2><td>Số đơn hàng hoàn thành:</td><td><?php echo $cus["numOfSuccessOrder"] ?></td></h2></tr>
                </tbody>
            </table>
            <a href="?mod=customer&act=list" type="button" class="btn btn-primary">Back</a>
        </div>
        </div>
    </div>
</body>
</html>