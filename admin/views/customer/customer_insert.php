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
       
          
      <!-- Page Heading -->
      <div class="container-fluid">
        <h2 align="center">Add Customer</h2>
        <hr>
        <?php if(isset($_COOKIE['msg'])){ ?>
        <div class="alert alert-info">
          <strong>Failed! </strong> <?= $_COOKIE['msg'] ?>
        </div>
        <?php }?>
        <form action="?mod=customer&act=store" method="POST">
            <div class="form-group">
                <label for="">ID *</label>
                <input type="text" class="form-control" required disabled id="" placeholder="" name="customerNumber" value="<?= $customer['customerNumber'] ?>">
                <input type="text" class="form-control" required hidden id="" placeholder="" name="customerNumber" value="<?= $customer['customerNumber'] ?>">
            </div>
            <div class="form-group">
                <label for="">User Name *</label>
                <input type="text" class="form-control" required id="" placeholder="" name="customerName" value="<?= $customer['customerName'] ?>">
            </div>
            <div class="form-group">
                <label for="">Full Name *</label>
                <input type="text" class="form-control" required id="" placeholder="" name="fullName" value="<?= $customer['fullName'] ?>">
            </div>
            <div class="form-group">
                <label for="">National Id *</label>
                <input type="text" class="form-control" required id="" placeholder="" name="nationalId" value="<?= $customer['nationalId'] ?>">
            </div>
            <div class="form-group">
                <label for="">Address *</label>
                <input type="text" class="form-control" required id="" placeholder="" name="address" value="<?= $customer['address'] ?>">
            </div>
            <div class="form-group">
                <label for="">Email *</label>
                <input type="email" class="form-control" required id="" placeholder="" name="email" value="<?= $customer['email'] ?>">
            </div>
            <div class="form-group">
                <label for="">Phone Number *</label>
                <input type="text" class="form-control" required id="" placeholder="" name="phoneNumber" value="<?= $customer['phoneNumber'] ?>">
            </div>
            <div class="form-group">
                <label for="">Password *</label>
                <input type="text" class="form-control" required id="" placeholder="" name="password" value="">
            </div>
            <a href="?mod=customer" type="button" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
        <br/><br/>
    </div>
    <script>
    $(document).ready(function() {
        $('#contents').summernote({
          height: 300,                 // set editor height
          minHeight: null,             // set minimum height of editor
          maxHeight: null,             // set maximum height of editor
          focus: true                  // set focus to editable area after initializing summernote
        });
    });
    </script>
</body>
</html>