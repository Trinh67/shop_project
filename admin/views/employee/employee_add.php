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
        <h3 align="center">Add New Employee</h3>
        <hr>
            <?php if(isset($_COOKIE['msg'])){ ?>
            <div class="alert alert-warning">
            <strong>Thất bại! </strong> Thêm mới không thành công !!!
            </div>
            <?php }?>
            <form action="?mod=employee&act=store" method="POST" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Employee Number</label>
                    <input type="text" class="form-control" required id="" placeholder="" name="id" value="">
                </div>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" required id="" placeholder="" name="name" value="">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" required id="" placeholder="" name="email" value="">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" required id="" placeholder="" name="password" value="">
                </div>
                <div class="form-group">
                    <label for="">Job</label>
                    <input type="text" class="form-control" required id="" placeholder="" name="position" value="">
                </div>
                <div class="form-group">
                    <label for="">Start_Date</label>
                    <input type="datetime-local" class="form-control" required id="" placeholder="" name="startDate" value="">
                </div>
                <div class="form-group">
                    <label for="">Age</label>
                    <input type="text" class="form-control" id="" placeholder="" name="age" value="">
                </div>
                <div class="form-group">
                    <label for="">Salary</label>
                    <input type="text" class="form-control" required id="" placeholder="" name="salary" value="">
                </div>
                <div  align="center">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="?mod=employee" type="button" class="btn btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>
    <br/>
    <div  align="center"> Nhóm 33 - Trịnh Xuân Trình - Nguyễn Văn Xuân </div><br/>
</div>
</body>
</html>