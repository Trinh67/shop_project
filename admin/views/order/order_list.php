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
                    <th>Order_Number</th>
                    <th>Product_Name</th>
                    <th>Quantity</th>
                    <th>Total_Price (VND)</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $order) { ?>              
              <tr>
                    <td><?= $order['orderNumber'] ?></td>
                    <td><?= $order['productName'] ?></td>
                    <td><?= $order['quantityOrdered'] ?></td>
                    <td><?= number_format($order['quantityOrdered'] * $order['priceEach']) ?></td>
                    <td><img src="<?= $order['image'] ?>" width="150px" hight="200px"></td>
                    <td><a href="?mod=order&act=detail&id=<?= $order['orderNumber'] ?>" class="btn btn-success">Detail</a> 
                    <!-- <a href="?mod=order&act=update&id=<?= $order['orderNumber'] ?>" class="btn btn-warning">Update</a>   -->
                    <!-- <a href="?mod=order&act=delete&id=<?= $order['orderNumber'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa?');" class="btn btn-danger">Delete</a></td> -->
                  </tr>
            <?php } ?>
            </tbody>
          </table>
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php require_once('public/require/footer.php') ?>
      <!-- End of Footer -->

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
