<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PETRUK - Pengaduan Infrastruktur</title>
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <link rel="shortcut icon" href="../img/logoTab.jpg">


  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="../lib/animate/animate.min.css" rel="stylesheet" />
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="../css/stylel.css" rel="stylesheet" />

</head>
<!-- Navbar end-->

<body class="">
  <div class="container-fluid ">
    <div class="row justify-content-center py-lg-4 ">
      <div class="col-lg-6 py-lg-5">
        <!-- <div class="card"> -->
        <div class="card-body-login px-4 py-4 bg-light wow fadeIn">
          <!-- <div class="row"> -->
          <div class="col-lg">

            <div class="header">
              <h5 class="text-center pt-lg-5">Welcome to</h5>
              <div class="pb-lg-5 d-flex justify-content-center">
                <img class="logo" src="../img/logoBlack.png" alt="">
              </div>
            </div>
            <form action="../controller/logincontroller.php" method="post" class="user">
              <div class="form-group">
                <?php if (isset($_GET['error'])) { ?>
                  <p class="gagal"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <label for="username">Username :</label>
                <input type="text" class="form-control form-control-user" name="uname" placeholder="Enter Username..." required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
                <span class="error">
                </span>
              </div>
              <div class="form-group d-flex justify-content-center">
                <button type="submit">Login</button>
              </div>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
                <br>
                <a class="small" href="signin.php">Create an Account!</a>
              </div>
            </form>

          </div>
          <!-- </div> -->
        </div>
        <!-- </div> -->
      </div>
    </div>
  </div>


  <!-- Footer Start -->
  <div class="container-fluid bg-dark footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-8 col-md-6 wow fadeInUp">
          <img class="pb-sm-3" src="../img/logoWhite.png" alt="Logo Pelan" width="150px">
          <p>
            FINAL PROJECT WEB PROGRAMMING
          </p>
          <div class="d-flex pt-2">
            <a class="btn btn-square btn-outline-primary me-1" href="">
              <i class="fab fa-twitter"></i>
            </a>
            <a class="btn btn-square btn-outline-primary me-1" href="">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a class="btn btn-square btn-outline-primary me-1" href="">
              <i class="fab fa-youtube"></i>
            </a>
            <a class="btn btn-square btn-outline-primary me-1" href="">
              <i class="fab fa-whatsapp"></i></a>
          </div>
        </div>

        <div class="col-lg-0 col-md-4 wow fadeInUp">
          <p>Supported By:</p>
          <h4 class="text-light">UNIVERSITAS AMIKOM YOGYAKARTA</h4>
          <a href="timCreative.php"> CREATIVE TIM </a>
        </div>
      </div>
    </div>

    <div class="container-fluid copyright">
      <div class="container justify-content-center">
        <div class="row">
          <div class="col-md-12 text-center mb-3 mb-md-0">
            <a>copyright </a> &copy; <a href="#">PETRUK - Pengaduan Infrastruktur</a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="../js/main.js"></script>
</body>

</html>