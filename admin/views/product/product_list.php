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
        <h2 align="center">Products</h2>
        <a href="?mod=product&act=add" class="btn btn-primary">Add</a><br/>
          <?php if(isset($_COOKIE['msg'])){ ?>
            <div class="alert alert-success">
              <strong><?= $_COOKIE['msg'] ?></strong>
            </div>
          <?php }?>
          <br/>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                          <th>ID</th>
                          <th>Product Name</th>
                          <th>Category</th>
                          <th>Price</th>
                          <th>Stock</th>
                          <th>Status</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($products as $product) { ?>              
                    <tr>
                          <td><?= $product['productCode'] ?></td>
                          <td style="max-width: 270px"><?= $product['productName'] ?></td>
                          <td><?= $product['productLine'] ?></td>
                          <td align="right"><?= number_format($product['price']) ?> VND</td>
                          <td align="right"><?= $product['quantityOfStock'] ?></td>
                          <td><?php $status = array("0" => "Out of stock", "1" => "Available");
                                echo $status[$product['status']]
                          ?></td>
                          <td><img src="<?= $product['image'] ?>" width="150px" hight="200px" alt="Image"></td>
                          <td><a href="../?mod=product&act=detail&id=<?= $product['productCode'] ?>&line=<?= $product['productLineNumber'] ?>" class="btn btn-success">Detail</a> 
                          <a href="?mod=product&act=update&id=<?= $product['productCode'] ?>" class="btn btn-warning">Update</a>  
                          <a href="?mod=product&act=delete&id=<?= $product['productCode'] ?>" onclick="return confirm('Are you sure you want to Delete?');" class="btn btn-danger">Delete</a></td>
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
