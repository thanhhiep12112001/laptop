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

                            <h4 class="mb-4">Quản lý sản phẩm</h4>
                            <h6> Số sản phảm là: <?php echo $n ?></h6>
                            <div class="row">
                                <form action="product.php" method='get' class="d-none d-md-flex">
                                    <div class="col-md-5">
                                        <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                                        <input class="form-control" type="text" name="keyword" id="keyword" value="">
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-4">
                                        <label for="exampleInputEmail1" class="form-label">Danh mục</label>
                                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="idcat" id="idcat">
                                            <option value="">All</option>
                                            <?php foreach ($datacat as $item) { ?>
                                                <option value="<?php echo $item['idcat'] ?>"><?php echo $item['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="submit" value="Tìm kiếm" class="btn btn-primary ms-5 mt-4 ">
                                    </div>
                                </form>
                            </div>
                            <div>
                                <a href="product_create.php" class="btn btn-primary">Them</a>
                            </div>
                            <table class="table" id="tb">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Tên </th>
                                        <th scope="col">Mô Tả</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Img</th>
                                        <th scope="col">Danh mục</th>
                                        <th scope="col">Giá Giảm</th>
                                        <th scope="col">Sp news</th>
                                        <th scope="col">Best sell</th>
                                        <th scope="col">#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $item) {
                                    ?>
                                        <tr>
                                            <td><?php echo $item['idproduct'] ?></td>
                                            <td><?php echo $item['ten'] ?></td>
                                            <td><?php echo $item['mota'] ?></td>
                                            <td><?php echo $item['gia'] ?></td>
                                            <td>
                                                <img src="../images/<?php echo $item['img'] ?>" alt="">
                                            </td>
                                            <td><?php echo $item['idcat'] ?></td>
                                            <td><?php echo $item['gia_km'] ?></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <a href="product_edit.php?id=<?php echo $item['idproduct'] ?>" class="btn btn-primary">sửa</a>
                                            </td>
                                            <td>
                                                <a href="product_delete.php?id=<?php echo $item['idproduct'] ?>" class="btn btn-danger">xóa</a>
                                            </td>
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