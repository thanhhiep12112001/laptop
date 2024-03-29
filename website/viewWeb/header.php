<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
            </ul>
            <ul class="header-links pull-right">
                <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>

                <?php
                if (isset($_SESSION['user'])) {
                ?><li><a href="#"><i class="fa fa-user-o"></i><?php echo $_SESSION['user']['hoten']; ?></a></li>
                    <li><a href="/web/website/ControllerLogin/logout.php">Dang xuat</a></li><?php
                        }else {
                        ?><li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
                    <li>
                        <a href="ControllerLogin/login.php"><?php echo 'Dang nhap';
                        } ?></a>
                    </li>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="index.php" class="logo">
                            <img src="./view/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form>
                            <select class="input-select">
                                <option value="0">All Categories</option>
                                <option value="1">Category 01</option>
                                <option value="1">Category 02</option>
                            </select>
                            <input class="input" placeholder="Search here">
                            <button class="search-btn">Search</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        <div>
                            <a href="#">
                                <i class="fa fa-heart-o"></i>
                                <span>Your Wishlist</span>
                                <div class="qty">2</div>
                            </a>
                        </div>
                        <!-- /Wishlist -->

                        <!-- Cart -->
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Your Cart</span>
                                <div class="qty">
                                    <?php
                                    if (isset($_SESSION['cart'])) {
                                        $tam = 0;
                                        foreach ($_SESSION['cart'] as $dem) {
                                            $tam += $dem['qty'];
                                        }
                                        echo $tam;
                                    } else {
                                        echo 0;
                                    }
                                    ?>
                                </div>
                            </a>
                            <div class="cart-dropdown">
                                <div class="cart-list">
                                    <?php
                                    $tong = 0;
                                    if (isset($_SESSION['cart'])) {
                                        foreach ($_SESSION['cart'] as $item) {
                                            $tong += $item['qty'] * $item['price'];
                                            //print_r($item);
                                    ?>
                                            <div class="product-widget">
                                                <div class="product-img">
                                                    <img src="<?php echo './images/' . $item['img'] ?>" alt="">
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name"><a href="#"><?php echo $item['name'] ?></a></h3>
                                                    <h4 class="product-price"><span class="qty"><?php echo $item['qty']; ?>x</span><?php echo number_format($item['price']) ?>Đ</h4>
                                                </div>
                                                <button class="delete"><i class="fa fa-close"></i></button>
                                            </div>
                                    <?php }
                                    } ?>
                                </div>
                                <div class="cart-summary">
                                    <small><?php
                                            if (isset($_SESSION['cart'])) {
                                                $tam = 0;
                                                foreach ($_SESSION['cart'] as $dem) {
                                                    $tam += $dem['qty'];
                                                }
                                                echo $tam;
                                            } else {
                                                echo 0;
                                            }
                                            ?> Item(s) selected</small>
                                    <h5>SUBTOTAL: <?php echo number_format($tong) ?>Đ</h5>
                                </div>
                                <div class="cart-btns">
                                    <form action="/web/website/ControllerWeb/cart.php">
                                        <input type="submit" value="View Cart" class="add-to-cart-btn">
                                    </form>
                                    <form action="/web/website/ControllerWeb/cart2.php" method="POST">
                                        <input type="hidden" name="action" value="thanhtoan">
                                        <input type="submit" value="Checkout" class="add-to-cart-btn">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>