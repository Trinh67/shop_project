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
                <label for="">ID</label>
                <input type="text" class="form-control" disabled id="" placeholder="" name="id" value="<?= $product['productCode'] ?>">
                <input type="text" required class="form-control" hidden id="" placeholder="" name="productCode" value="<?= $product['productCode'] ?>">
            </div>
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" required class="form-control" id="" placeholder="" name="productName" value="<?= $product['productName'] ?>">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select name="productLineNumber" class="form-control">
                <?php foreach ($prodlines as $prls) {?>  
                  <option <?= ($prls['productLineNumber'] == $product['productLineNumber'])?'selected':"" ?> value="<?= $prls['productLineNumber'] ?>"><?= $prls['productLine'] ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Price (VND)</label>
                <input type="number" required class="form-control" id="" placeholder="" name="price" value="<?= $product['price'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea rows = "8" required class="form-control" id="contents" placeholder="" name="productDescription"><?= $product['productDescription'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="">Kho</label>
                <input type="number" required class="form-control" id="" placeholder="" name="quantityOfStock" value="<?= $product['quantityOfStock'] ?>">
            </div>
            <div class="form-group">
                <label for="">Link image:</label>
                <input type="text" required class="form-control" id="" placeholder="" name="image" value="<?= $product['image'] ?>">
            </div>
            <div class="form-group">
                <label for="">Model</label>
                <input type="text" required class="form-control" id="" placeholder="" name="modelNumber" value="<?= $product['modelNumber'] ?>">
            </div>
            <div class="form-group">
                <label for="">Year of manufacture</label>
                <input type="number" required class="form-control" id="" placeholder="" name="yearOfManufacture" value="<?= $product['yearOfManufacture'] ?>">
            </div>
            <a href="?mod=product" type="button" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary">Add</button>
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