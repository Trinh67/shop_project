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
        <h2 align="center">Thêm sản phẩm</h2>
        <hr>
        <?php if(isset($_COOKIE['msg'])){ ?>
        <div class="alert alert-warning">
          <strong><?= $_COOKIE['msg'] ?></strong>
        </div>
    <?php }?>
        <form action="?mod=product&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="" name="productName">
            </div>
            <div class="form-group">
                <label for="">Danh mục</label>
                <select name="productLineNumber" class="form-control">
                <?php foreach ($prodlines as $prls) {?>  
                  <option value="<?= $prls['productLineNumber'] ?>"><?= $prls['textDescription'] ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Giá (VND)</label>
                <input type="text" class="form-control" id="" placeholder="" name="price">
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea rows = "8" class="form-control" id="contents" placeholder="" name="productDescription"></textarea>
            </div>
            
            <div class="form-group">
                <label for="">Kho</label>
                <input type="number" class="form-control" id="" placeholder="" name="quantityOfStock">
            </div>
            <div class="form-group">
                <label for="">Đường dẫn ảnh</label>
                <input type="text" class="form-control" id="" placeholder="" name="image">
            </div>
            <div class="form-group">
                <label for="">Model</label>
                <input type="text" class="form-control" id="" placeholder="" name="modelNumber">
            </div>
            <div class="form-group">
                <label for="">Năm sản xuất</label>
                <input type="number" class="form-control" id="" placeholder="" name="yearOfManufacture">
            </div>
            <a href="?mod=product" type="button" class="btn btn-danger">Hủy</a>
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </form>
        <br/>
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