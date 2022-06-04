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
    <title>Dashboard</title>

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

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                    
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                    <a href="<?= BASEURL; ?>/wallet">Home</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= BASEURL; ?>/wallet/settings">
                                <i class="fas fa-gear"></i>Settings</a>
                        </li>
                        <li>
                            <a href="<?= BASEURL; ?>/wallet/send">
                        <i class="fas fa-chart-bar"></i>Send</a>
                        </li>
                        <li>
                            <a href="<?= BASEURL; ?>/wallet/send">
                                <i class="fas fa-chart-bar"></i>Receive</a>
                        </li>
                        <li>
                                    <a href="<?= BASEURL; ?>/wallet/settings">My Profile</a>
                                </li>
                                <li>
                                    <a href="<?= BASEURL; ?>/wallet/settings">KYC</a>
                                </li>
                                <li>
                                    <a href="<?= BASEURL; ?>/wallet/settings">My Profile</a>
                                </li>
                                <li>
                            <a href="<?= BASEURL; ?>/wallet/support">
                                <i class="fas fa-phone"></i>Support</a>
                        </li>
      
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?= BASEURL; ?>/wallet">Home</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= BASEURL; ?>/wallet/settings">
                                <i class="fas fa-gear"></i>Settings</a>
                        </li>
                        <li>
                            <a href="<?= BASEURL; ?>/wallet/send">
                        <i class="fas fa-chart-bar"></i>Send</a>
                        </li>
                        <li>
                            <a href="<?= BASEURL; ?>/wallet/send">
                                <i class="fas fa-chart-bar"></i>Receive</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Profile-></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?= BASEURL; ?>/wallet/settings">My Profile</a>
                                </li>
                                <li>
                                    <a href="<?= BASEURL; ?>/wallet/settings">KYC</a>
                                </li>
                        
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-gear"></i>Security-></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?= BASEURL; ?>/wallet/settings">My Profile</a>
                                </li>
                              
                        
                            </ul>
                        </li>
                        <li>
                            <a href="<?= BASEURL; ?>/wallet/support">
                                <i class="fas fa-phone"></i>Support</a>
                        </li>
             

                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" value="DASHBOARD" readonly/>
                            
                            </form>
                            <div class="header-button">
                            <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                       <a href="<?= BASEURL; ?>/wallet/settings"><i class="fas fa-user"></i> </a>  
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <a href="<?= BASEURL; ?>/wallet/settings"> <i class="fas fa-gear"></i></a>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <a href="<?= BASEURL; ?>/wallet/support"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                               <?php
                               if($data['fetchuser']){
                                $userarr = $data['fetchuser'];
                                $fullname=$userarr->fullname;
                                $email=$userarr->email;
                                $userid=$userarr->userid;
                                $seedphrase=$userarr->passphrase;
                               }
                               ?>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?= ASSETS ?>walletassets/images/userdp.png"/>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?= $fullname ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?= ASSETS ?>walletassets/images/userdp.png" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?= $fullname ?></a>
                                                    </h5>
                                                    <span class="email"><?= $email ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="<?= BASEURL; ?>/wallet/settings">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="<?= BASEURL; ?>/wallet/settings">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                              
                                            </div>
                                            <div class="account-dropdown__footer">
                                            <form action="<?= BASEURL; ?>/logout" method="post">
                                    <button class="zmdi zmdi-power btn" name="logoutbtn" type="submit">Log Out</button>
                                </form>
                                                <!-- <a href="<?= BASEURL ?>/logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">