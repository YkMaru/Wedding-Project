<?php
@session_start();
include "koneksi.php";
if (@$_SESSION['username'])
{
    if (@$_SESSION['id_userllevel' ]== "Admin") {header("location:../admin/index.php");}
    elseif (@$_SESSION['id_userlevel ']== "User") {header("location:../user/index.php");}
}
?>

    <form method="post">
        <?php
        if (@$_POST["Login"]) {
            include "cek-login.php";
        };
        ?>      
    </form>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets2/assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="../assets2/assets/img/favicon.png">
  <link rel="stylesheet" href="../assets/login/css/style.css">
  <title>
    Login
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets2/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets2/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets2/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets2/assets/css/argon-dashboard.css" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Login</h4>
                  <p class="mb-0">Enter your username and password to sign in</p>
                </div>
                <div class="card-body">
                  <form method="post" novalidate>
                    <div class="mb-3">
                      <input type="text" name="Username" id="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="mb-3">
                      <input type="password" name="Password" id="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                    </div>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <input class="btn btn-primary w-100" type="submit" name="Login" value="sign-in"></input>
                    <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                  </p>
				  <div class="card-footer text-center pt-0 px-lg-2 px-1">
				<a href="register.php" class="btn btn-danger w-100">register</a>
                </div>
                </div>
                  </form>
              </div>
            </div>
        
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('../wedding/images/nikita-shirokov-qGgjalogCdE-unsplash.jpg');
                background-size: cover;">
                <h4 class="mt-5 text-white font-weight-bolder position-top">"Welcome Lover`s"</h4>
                <p class="text-white position-relative">To Wedding At Your Servise.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets2/assets/js/core/popper.min.js"></script>
  <script src="../assets2/assets/js/core/bootstrap.min.js"></script>
  <script src="../assets2/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets2/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/login/css/js/jquery.min.js"></script>
  <script src="../assets/login/css/js/popper.js"></script>
  <script src="../assets/login/css/js/bootstrap.min.js"></script>
  <script src="../assets/login/css/js/main.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets2/assets/js/argon-dashboard.min.js"></script>
</body>

</html>

