<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Loan Application</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
                    ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
                    ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
        <!-- Bootstrap CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- adminpro icon CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/adminpro-custon-icon.css">
        <!-- meanmenu icon CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- mCustomScrollbar CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <!-- animate CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- normalize CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
        <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
        <!-- normalize CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- charts CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/c3.min.css">

        <link href="css/form/all-type-forms.css" rel="stylesheet" type="text/css"/>
        <!-- style CSS
                    ============================================ -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS
                    ============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <!-- buttons CSS
                ============================================ -->
        <link rel="stylesheet" href="css/buttons.css">

    </head>
    <?php
    require_once '../../Model/customer.php';
    require_once '../../Control/CommonFunction/CommonFunction.php';
    session_start();
    if (!isset($_SESSION['managementDetail'])) {
        $message = "Please Login again";
        //<a href="../home/index.html"></a>
        $path = "../home/index.html";
        $cf = new commonFunction();
        $cf->messageAndRedict($message, $path);
    }
    ?>
    <body class="materialdesign">
        <div class="wrapper-pro">
            <div class="left-sidebar-pro">
                <nav id="sidebar">
                    <div class="sidebar-header">
                        <h3><?php echo $_SESSION['managementDetail']['managementName'] ?></h3>
                        <p>Management</p>
                        <strong>MG</strong>
                    </div>
                    <div class="left-custom-menu-adp-wrap">
                        <ul class="nav navbar-nav left-sidebar-menu-pro">
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                                <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                    <a href="dashboard.php" class="dropdown-item">Dashboard</a>
                                </div>
                            </li>
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Customer</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                                <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                    <a href="newCustomer.php" class="dropdown-item">New Customer</a>
                                    <a href="../../Control/Management/viewCustomer.php" class="dropdown-item">View Customer</a>
                                    <a href="" class="dropdown-item">Staff Customer</a>
                                </div>
                            </li>
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">staff</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                                <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                    <a href="../../Control/Management/viewStaff.php" class="dropdown-item">View Staff</a>
                                    <a href="registerStaff.php" class="dropdown-item">Register Staff</a>
                                </div>
                            </li>
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-flask"></i> <span class="mini-dn">Loan</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                                <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                    <a href="../../Control/Management/viewLoan.php" class="dropdown-item">View Loan</a>
                                    <a href="../../Control/Management/completedCustomer.php" class="dropdown-item">Register Loan</a>
                                    <a href="#" class="dropdown-item">Staff Loan</a>
                                </div>
                            </li>
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Payment</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                                <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                    <a href="../../Control/Management/makePayment.php" class="dropdown-item">Make Payment</a>
                                    <a href="../../Control/Management/paymentList.php" class="dropdown-item">View Payment</a>
                                    <a href="staffPayment.php" class="dropdown-item">Staff Payment</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Header top area start-->

            <div class="content-inner-all">
                <div class="header-top-area">
                    <div class="fixed-header-top">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <div class="admin-logo logo-wrap-pro">
                                        <a href="#"><img src="img/logo/log.png" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">
                                        <ul class="nav navbar-nav mai-top-nav">
                                            <li class="nav-item"><a href="dashboard.php" class="nav-link">Home</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Customer <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                <div role="menu" class="dropdown-menu animated flipInX">
                                                    <a href="newCustomer.php" class="dropdown-item">New Customer</a>
                                                    <a href="../../Control/Management/viewCustomer.php" class="dropdown-item">View Customer</a>
                                                    <a href="" class="dropdown-item">Staff Customer</a>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Staff <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                <div role="menu" class="dropdown-menu animated flipInX">
                                                    <a href="../../Control/Management/viewStaff.php" class="dropdown-item">View Staff</a>
                                                    <a href="registerStaff.php" class="dropdown-item">Register Staff</a>

                                            </li>
                                            <li class="nav-item dropdown">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Loan <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                <div role="menu" class="dropdown-menu animated flipInX">
                                                    <a href="../../Control/Management/viewLoan.php" class="dropdown-item">View Loan</a>
                                                    <a href="../../Control/Management/completedCustomer.php" class="dropdown-item">Register Loan</a>
                                                    <a href="#" class="dropdown-item">Staff Loan</a>

                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Payment <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                <div role="menu" class="dropdown-menu animated flipInX">
                                                    <a href="../../Control/Management/makePayment.php" class="dropdown-item">Make Payment</a>
                                                    <a href="../../Control/Management/paymentList.php" class="dropdown-item">View Payment</a>
                                                    <a href="staffPayment.php" class="dropdown-item">Staff Payment</a>

                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                    <span class="admin-name">My Account</span>
                                                    <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                                </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">

                                                    <li><a href="profile.php"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My Profile</a>
                                                    </li>
                                                    <li><a href="changePassword.php"><span class="adminpro-icon adminpro-settings author-log-ic"></span>Change Password</a>
                                                    </li>
                                                    <li><a href="../../Control/Management/logout.php"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header top area end-->
                <!-- Breadcome start-->

                <!-- Breadcome End-->
                <!-- Mobile Menu start -->

                <!-- Breadcome End-->
                <!-- Static Table Start -->

                <!-- Static Table End -->

