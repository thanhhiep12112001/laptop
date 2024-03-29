<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro - HTML Ecommerce Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="/web/website/viewWeb/css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="/web/website/viewWeb/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="/web/website/viewWeb/css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="/web/website/viewWeb/css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="/web/website/viewWeb/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="/web/website/viewWeb/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <!-- HEADER -->
    <?php
    include 'header.php'
    ?>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <?php
    include 'nav3.php'
    ?>
    <!-- /NAVIGATION -->

    <!-- Cart -->
    <div class="container">
        <div class="row">
            <h1>Thanh toan</h1>
            <a href="cart.php" class="btn btn-primary" style="margin-bottom: 10px;">Trở về</a>
            <table class="table table-bordered text-center">
                <tr>
                    <td>Tên</td>
                    <td>Hình</td>
                    <td>Giá</td>
                    <td>Số lượng</td>
                    <td>Thành tiền</td>
                </tr>
                <?php $tong = 0;
                foreach ($_SESSION['cart'] as $item) {
                    $tong += $item['price'] * $item['qty'];
                ?><tr>
                        <td><?php echo $item['name'] ?></td>
                        <td><img src="<?php echo '../images/' . $item['img'] ?>" name="img1" style="width: 100px"></td>
                        <td><?php echo number_format($item['price']) ?>Đ</td>
                        <td><?php echo $item['qty'] ?></td>
                        <td><?php echo number_format($item['price'] * $item['qty']) ?>Đ</td>
                    </tr><?php }
                            ?>
                <tr>
                    <td colspan="4">####</td>
                    <td><?php echo number_format($tong) ?>Đ</td>
                </tr>
            </table>
            <div class="form-group">
                <label for="">Tên người nhận</label>
                <span class="form-control"><?php echo $hoten ?></span>
            </div>
            <div class="form-group">
                <label for="">Địa chỉ người nhận</label>
                <span class="form-control"><?php echo $diachi ?></span>
            </div>
            <div class="form-group">
                <label for="">SĐT người nhận</label>
                <span class="form-control"><?php echo $sdt ?></span>
            </div>
            <form action="checkoutXacNhan.php" method="POST">
                <input type="hidden" name="tong" value="<?php echo $tong ?>">
                <input type="hidden" name="hoten" value="<?php echo $hoten ?>">
                <input type="hidden" name="diachi" value="<?php echo $diachi ?>">
                <input type="hidden" name="sdt" value="<?php echo $sdt ?>">
                <input type="hidden" name="action" value="checkout">
                <input type="submit" value="Xác nhận thanh toán" class="btn btn-primary">
            </form>
        </div>
    </div>
    <!-- /Cart -->

    <!-- NEWSLETTER -->
    <?php
    include 'footer.php';
    ?>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <?php
    include 'script.php';
    ?>

</body>

</html>