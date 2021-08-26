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
            <h2 align="center">Orders Detail</h2>
            <hr>
            <table class="table">
                <th>Order_Number:</th>
                <th>Product_Name:</th>
                <th>Quantity_Ordered:</th>
                <th>Total_Price:</th>
                <th>Image:</th>
                <?php foreach($orders as $order) { ?>
                <tr><td><?= $order['orderNumber'] ?></td>
                    <td><?= $order['productName'] ?></td>
                    <td><?= $order['quantityOrdered'] ?></td>
                    <td><?= number_format($order['quantityOrdered'] * $order['priceEach']) ?> VND</td>
                    <td><img src="<?= $order['image'] ?>" width="150px" hight="200px"></td></tr>
                <?php } ?>
            </table>
            <a href="?mod=order&act=list" type="button" class="btn btn-primary">Back</a>
        </div>
        <br/>
    </div>
</body>
</html>