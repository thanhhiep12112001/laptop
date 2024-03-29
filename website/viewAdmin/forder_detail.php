<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/web/website/viewAdmin/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/web/website/viewAdmin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/web/website/viewAdmin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/web/website/viewAdmin/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="/web/website/viewAdmin/css/style.css" rel="stylesheet">
    <style>
        table#tb img {
            width: 100px;
        }
    </style>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->

        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php
        include 'side3.php';
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
            include 'nav3.php';
            ?>
            <!-- Navbar End -->


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bg-light rounded h-100 p-4">
                            <a href="/web/website/ControllerOrder/orders.php" class="btn btn-primary">Trở về</a>
                            <h4 class="mb-4">Đơn hàng</h4>
                            <div class="row">
                            </div>
                            <?php
                            foreach ($data as $item) {
                            ?>
                                <p>ID Order: <?php echo $item['idorder'] ?></p>
                                <p>Email: <?php echo $item['email'] ?></p>
                                <p>Ngày đặt: <?php echo $item['ngaydat'] ?></p>
                                <p>Ngày giao: <?php echo $item['ngaygiao'] ?></p>
                                <p>Tên người nhận: <?php echo $item['tennguoinhan'] ?></p>
                                <p>SĐT: <?php echo $item['sdt'] ?></p>
                                <p>Địa chỉ người nhận: <?php echo $item['diachinguoinhan'] ?></p>
                                <p>Tổng tiền: <?php echo number_format($item['thanhtoan']) ?>Đ</p>
                                <p>Trạng thái: <?php echo $item['trangthai'] ?></p>
                            <?php
                            }
                            ?>
                            <table class="table" id="tb">
                                <thead>
                                    <tr>
                                        <th scope="col">ID sản phẩm</th>
                                        <th scope="col">Sô lượng </th>
                                        <th scope="col">Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($dataDetail as $tam) {
                                    ?>
                                        <tr>
                                            <td><?php echo $tam['idproduct']; ?></td>
                                            <td><?php echo $tam['soluong']; ?></td>
                                            <td><?php echo $tam['gia']; ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Table End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php
    include 'script.php';
    ?>
</body>

</html>