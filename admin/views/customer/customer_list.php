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
        <h2 align="center">Customer</h2>
        <a href="?mod=customer&act=add" class="btn btn-primary">Add</a><br/>
          <?php if(isset($_COOKIE['msg'])){ ?>
            <div class="alert alert-info">
              <strong><?= $_COOKIE['msg'] ?></strong>
            </div>
          <?php }?>
          <br/>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Customer List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Orders</th>
                    <th>Action</th>
                  </tr>
            </thead>
            <tbody>
            <?php foreach ($customers as $cus) { ?>              
              <tr>
                    <td><?= $cus['customerNumber'] ?></td>
                    <td><?= $cus['customerName'] ?></td>
                    <td><?= $cus['email'] ?></td>
                    <td><?= $cus['phoneNumber'] ?></td>
                    <td><?= $cus['address'] ?></td>
                    <td align="center"><?= $cus['numOfSuccessOrder'] ?></td>
                    <td><a href="?mod=customer&act=detail&id=<?= $cus['customerNumber'] ?>" class="btn btn-success">Detail</a> 
                    <a href="?mod=customer&act=update&id=<?= $cus['customerNumber'] ?>" class="btn btn-warning">Update</a>
                    <a href="?mod=customer&act=delete&id=<?= $cus['customerNumber'] ?>" onclick="return confirm('You definitely want to delete?');" class="btn btn-danger">Delete</a></td>
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
