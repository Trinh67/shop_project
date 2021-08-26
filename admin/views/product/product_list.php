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
        <h2 align="center">List Products</h2>
        <a href="?mod=product&act=add" class="btn btn-primary">Add</a><br/>
          <?php if(isset($_COOKIE['msg'])){ ?>
            <div class="alert alert-success">
              <strong><?= $_COOKIE['msg'] ?></strong>
            </div>
          <?php }?>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables List Products</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                          <th>ProductLine</th>
                          <th>Name</th>
                          <th>Price Each</th>
                          <th>Quality</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($products as $product) { ?>              
                    <tr>
                          <td><?= $product['productLine'] ?></td>
                          <td><?= $product['productName'] ?></td>
                          <td><?= number_format($product['buyPrice']) ?> VND</td>
                          <td><?= $product['quantityInStock'] ?></td>
                          <td><img src="<?= $product['image'] ?>" width="150px" hight="200px"></td>
                          <td><a href="../?mod=product&act=detail&id=<?= $product['productCode'] ?>" class="btn btn-success">Detail</a> 
                          <a href="?mod=product&act=update&id=<?= $product['productCode'] ?>" class="btn btn-warning">Update</a>  
                          <a href="?mod=product&act=delete&id=<?= $product['productCode'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa?');" class="btn btn-danger">Delete</a></td>
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
