<!--important link source from "https://bootsnipp.com/snippets/vl4R7"-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
  <title>Register Page</title>
  <!--Made with love by Mutiullah Samim -->

  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <style>
    @import url('https://fonts.googleapis.com/css?family=Numans');

    html,
    body {
      background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      height: 100%;
      font-family: 'Numans', sans-serif;
    }

    .container {
      height: 100%;
      align-content: center;
    }

    .card {
      height: 520px;
      margin-top: auto;
      margin-bottom: auto;
      width: 400px;
      background-color: rgba(0, 0, 0, 0.5) !important;
    }

    .social_icon span {
      font-size: 60px;
      margin-left: 10px;
      color: #FFC312;
    }

    .social_icon span:hover {
      color: white;
      cursor: pointer;
    }

    .card-header h3 {
      color: white;
    }

    .social_icon {
      position: absolute;
      right: 20px;
      top: -45px;
    }

    .input-group-prepend span {
      width: 50px;
      background-color: #FFC312;
      color: black;
      border: 0 !important;
    }

    input:focus {
      outline: 0 0 0 0 !important;
      box-shadow: 0 0 0 0 !important;

    }


    .btn-reg {
      color: black;
      background-color: #FFC312;
      width: 100px;
    }

    .btn-reg:hover {
      color: black;
      background-color: white;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header">
          <h3>Sign Up</h3>
          <a href="/web/website/ControllerLogin/login.php">Trở về</a>
        </div>
        <div class="card-body">
          <form action="reg_store.php" method="post">
            <input type="hidden" name="action" value="dangky">
            <!-- ------------------------------------------------------------------------ -->
            <div class="input-group">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Họ tên" name="hoten">
            </div>
            <!-- ------------------------------------------------------------------------ -->
            <div class="input-group">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
              <input type="email" class="form-control" placeholder="Email" name="email">
            </div>
            <!-- ------------------------------------------------------------------------ -->
            <div class="input-group">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <!-- ------------------------------------------------------------------------ -->
            <div class="input-group">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" class="form-control" placeholder="Confirm password" name="password2">
            </div>
            <!-- ------------------------------------------------------------------------ -->
            <div class="input-group">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
              </div>
              <input type="tel" class="form-control" placeholder="Phone" name="sdt">
            </div>
            <!-- ------------------------------------------------------------------------ -->
            <div class="input-group">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-address-book"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Address" name="diachi">
            </div>
            <!-- ------------------------------------------------------------------------ -->
            <div class="form-group">
              <input type="submit" value="Đăng ký" class="btn float-right btn-reg" name="btn-reg">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>