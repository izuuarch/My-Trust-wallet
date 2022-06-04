<?php
?>
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <!-- <div class="logo">
                    <a href="index.html"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div> -->
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                     
                       
              
                        
                      
                            <li><a href="<?= BASEURL; ?>/admin"><i class="ti-map-alt"></i> <span>Dashboard</span></a></li>
                            <li><a href="<?= BASEURL; ?>/admin/members"><i class="ti-receipt"></i> <span>Members</span></a></li>
                            <!-- <li><a href="<?= BASEURL; ?>/admin/transaction"><i class="ti-receipt"></i> <span>Transactions</span></a></li> -->
                            <li><a href="<?= BASEURL; ?>/admin/createwallet"><i class="ti-receipt"></i> <span>Create Wallet</span></a></li>
                            <li><a href="<?= BASEURL; ?>/admin/settings"><i class="ti-receipt"></i> <span>Settings</span></a></li>
                            <li><a href="<?= BASEURL; ?>/admin/support"><i class="ti-receipt"></i> <span>Support</span></a></li>
                           
                         
                       
                           
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                  
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <form action="<?= BASEURL; ?>/admin/logout" method="post">
                                    <button class="dropdown-item" name="admlogoutbtn" type="submit">Log Out</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>