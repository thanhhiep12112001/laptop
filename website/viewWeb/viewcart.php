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
            <h1>Gio hang ne</h1>
            <a href="laptop.php" class="btn btn-primary" style="margin-bottom: 10px;">tiep tuc mua hang</a>

            <table class="table table-bordered ">
                <tr>
                    <td>ma sp</td>
                    <td>ten</td>
                    <td>hinh</td>
                    <td>gia</td>
                    <td colspan="2">sl</td>
                    <td>thanhtien</td>
                    <td>🤞</td>
                </tr>

                <?php
                $tong = 0;
                $dem = 1;
                foreach ($dataCart as $id => $val) {
                    $tong += $val['price'] * $val['qty'];
                ?>
                    <tr>
                        <?php $dem++ ?>
                        <td><?php echo $id ?></td>
                        <td><?php echo $val['name'] ?></td>
                        <td><img src="<?php echo '../images/' . $val['img'] ?>" style="width: 75px;"></td>
                        <td><?php echo number_format($val['price']) ?></td>
                        <form action="cart.php" method="post">
                            <td><input type="number" name="gia" value="<?php echo $val['qty'] ?>"></td>
                            <td>
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <input type="hidden" name="action" value="luu">
                                <input type="submit" name="luu" class="btn btn-danger" value="luu">
                            </td>
                        </form>
                        <td><?php echo number_format($val['price'] * $val['qty']) ?></td>
                        <td>
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <input type="hidden" name="action" value="xoa">
                                <input type="submit" class="btn btn-danger" value="xoa">
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <td colspan="6"></td>
                    <td colspan="2">
                        <?php echo number_format($tong)  ?>
                    </td>
                </tr>

            </table>
            <form action="cart2.php" method="POST">  
                <?php
                if (count($dataCart) > 0) {
                ?>
                    <input type="hidden" name="action" value="thanhtoan">
                    <input type="submit" value="thanh toan" class="add-to-cart-btn">
                <?php
                }
                ?>
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