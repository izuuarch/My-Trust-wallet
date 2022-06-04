<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="<?= ASSETS ?>walletassets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= ASSETS ?>walletassets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= ASSETS ?>walletassets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= ASSETS ?>walletassets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= ASSETS ?>walletassets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= ASSETS ?>walletassets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= ASSETS ?>walletassets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= ASSETS ?>walletassets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= ASSETS ?>walletassets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= ASSETS ?>walletassets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= ASSETS ?>walletassets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= ASSETS ?>walletassets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= ASSETS ?>walletassets/css/theme.css" rel="stylesheet" media="all">

</head>
<?php
 if (isset(($_SESSION['staked']))) {
  header('Location: ' . BASEURL . '/wallet');
}
?>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                        
                        </div>
                        <div class="login-form">
                        <?php
    if(isset($_SESSION['emailtaken']) && $_SESSION['emailtaken'] !='')
    {
      echo '<h4 style="color: red;">'.$_SESSION['emailtaken'].'</h4>';
      unset($_SESSION['emailtaken']);
          } 
          ?>
                 <?php
    if(isset($_SESSION['notmatch']) && $_SESSION['notmatch'] !='')
    {
      echo '<h4 style="color: red;">'.$_SESSION['notmatch'].'</h4>';
      unset($_SESSION['notmatch']);
          } 
          ?>
                            <form action="<?= BASEURL; ?>/signup" method="post">
                            <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="fname" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label>Comfirm Password</label>
                                    <input class="au-input au-input--full" type="password" name="compassword" required>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <a href="<?= BASEURL; ?>/wallet/forgot">Forgotten Password?</a>
                                    </label>
                                </div>
                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="background: black; color:white;" name="signupbtn">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="<?= BASEURL; ?>/wallet/login">Sign in Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?= ASSETS ?>walletassets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= ASSETS ?>walletassets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= ASSETS ?>walletassets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?= ASSETS ?>walletassets/vendor/slick/slick.min.js">
    </script>
    <script src="<?= ASSETS ?>walletassets/vendor/wow/wow.min.js"></script>
    <script src="<?= ASSETS ?>walletassets/vendor/animsition/animsition.min.js"></script>
    <script src="<?= ASSETS ?>walletassets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?= ASSETS ?>walletassets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= ASSETS ?>walletassets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= ASSETS ?>walletassets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= ASSETS ?>walletassets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= ASSETS ?>walletassets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= ASSETS ?>walletassets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?= ASSETS ?>walletassets/js/main.js"></script>

</body>

</html>
<!-- end document-->