<?php 
    if(isset( $_SESSION['cart']))
        $products = $_SESSION['cart'];
    else $products = null;
?>
<?php 
    require_once('views/cart/mail.php');

    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $contents = '<i>Thông tin khách hàng</i><p>Name: </p>'.$name.'<br/><p>SĐT: </p>'.$phone.'<br/><p>Email: </p>'.$email.'<br/><p>Địa chỉ: </p>'.$address.'<br/><i>Thông tin đơn hàng</i>';
    $subject = 'Chi tiết đơn hàng';
    send_email($email,$name,$contents,$subject);
    header("Location: ?mod=page&act=home");
?>