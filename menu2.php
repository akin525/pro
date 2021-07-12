<?php include ("include/session.php"); ?>
<!DOCTYPE html>
<html lang="en">

<?php
$query="SELECT * FROM  wallet WHERE username='".$loggedin_session."'";
$result = mysqli_query($con,$query);

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
while($row = mysqli_fetch_array($result))
{
    $balance=$row["balance"];
}
$iwallet=0;
$fwallet=0;
$amount=0;

$query="SELECT * FROM  deposit WHERE username='".$loggedin_session."'";
$result = mysqli_query($con,$query);

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
while($row = mysqli_fetch_array($result))
{

    $iwallet=$row["iwallet"];
    $fwallet=$row["fwallet"];
    $amount=$row["amount"];
}
?>
<?php
$query="SELECT * FROM  users WHERE username='".$loggedin_session."'";
$result = mysqli_query($con,$query);

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
while($row = mysqli_fetch_array($result))
{
    $username=$row["username"];
    $name=$row["name"];
    $date=$row["date"];
    $email=$row["email"];
    $phone=$row["phone"];
}

?>
<!-- Mirrored from truelysell-html.dreamguystech.com/template/provider-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jun 2021 23:47:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Truelysell | Template</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<!-- Loader -->
<div class="page-loading">
    <div class="preloader-inner">
        <div class="preloader-square-swapping">
            <div class="cssload-square-part cssload-square-green"></div>
            <div class="cssload-square-part cssload-square-pink"></div>
            <div class="cssload-square-blend"></div>
        </div>
    </div>
</div>
<!-- /Loader -->
<div class="main-wrapper">

    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
						<span class="bar-icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
                </a>
                <a href="home.php" class="navbar-brand logo">
                    <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                </a>
                <a href="home.php" class="navbar-brand logo-small">
                    <img src="assets/img/logo-icon.png" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="home.php" class="menu-logo">
                        <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <!--                    <li>-->
                    <!--                        <a href="categories.html">Categories</a>-->
                    <!--                    </li>-->
                    <li class="has-submenu">
                        <a href="dashboard.php">Dashboard</a>
                    </li>
                    <!--                    <li class="has-submenu active">-->
                    <!--                        <a href="user-dashboard.html">Customers</a>-->
                    <!--                        <ul class="submenu">-->
                    <!--                            <li class="active"><a href="user-dashboard.html">Dashboard</a></li>-->
                    <!--                            <li><a href="user-settings.html">Profile Settings</a></li>-->
                    <!--                            <li><a href="user-wallet.html">Wallet</a></li>-->
                    <!--                            <li><a href="user-reviews.html">Reviews</a></li>-->
                    <!--                            <li><a href="user-payment.html">Payment</a></li>-->
                    <!--                        </ul>-->
                    <!--                    </li>-->
                    <!--                    <li class="has-submenu">-->
                    <!--                        <a href="#">Pages <i class="fas fa-chevron-down"></i></a>-->
                    <!--                        <ul class="submenu">-->
                    <!--                            <li><a href="search.html">Search</a></li>-->
                    <!--                            <li><a href="chat.html">Chat</a></li>-->
                    <!--                            <li><a href="notifications.html">Notifications</a></li>-->
                    <!--                            <li><a href="about-us.html">About Us</a></li>-->
                    <!--                            <li><a href="contact-us.html">Contact Us</a></li>-->
                    <!--                            <li><a href="faq.html">Faq</a></li>-->
                    <!--                            <li><a href="#">Terms & Conditions</a></li>-->
                    <!--                            <li><a href="#">Privacy Policy</a></li>-->
                    <!--                        </ul>-->
                    <!--                    </li>-->
                    <li>
                        <a href="admin/index.html" target="_blank">Admin</a>
                    </li>
                </ul>
            </div>

            <ul class="nav header-navbar-rht">
                <li class="nav-item desc-list wallet-menu">
                    <a href="user-wallet.html" class="nav-link header-login">
                        <img src="assets/img/wallet.png" alt="" class="mr-2 wallet-img"><span>Wallet:</span>NGN <?php echo number_format(intval($balance *1),2);?>
                    </a>
                </li>

                <!-- Notifications -->
                <li class="nav-item dropdown logged-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell"></i> <span class="badge badge-pill bg-yellow">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                <li class="nav-item dropdown has-arrow logged-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
							<span class="user-img">
								<img class="rounded-circle" src="assets/img/customer/user-01.jpg" alt="">
							</span>
                    </a>
                    <!-- chat -->
                <li class="nav-item logged-item">
                    <a href="chat.html" class="nav-link">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                    </a>
                </li>
                <!-- /chat -->

                <li class="nav-item dropdown  logged-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
							<span class="user-img">
								<?php echo $username; ?>
						</span>
                        <a href="logout.php" class="btn btn-primary"><span>Log-Out</span></a>
                    </a>

                </li>
            </ul>
        </nav>
    </header>
    <!-- /Header -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-4 theiaStickySidebar">
                    <div class="mb-4">
                        <div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
                            <!--                            <img alt="profile image" src="assets/img/provider/provider-01.jpg" class="avatar-lg rounded-circle">-->
                            <div class="ml-sm-3 ml-md-0 ml-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                                <h6 class="mb-0"><?php echo $name; ?></h6>
                                <p class="text-muted mb-0">Member Since <?php echo $date; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="widget settings-menu">
                        <ul>
                            <li class="nav-item">
                                <a href="dashboard.php" class="nav-link active">
                                    <i class="fas fa-chart-line"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="buyairtime.php" class="nav-link">
                                    <i class="far fa-address-book"></i> <span>Buy Airtime</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="buydata.php" class="nav-link">
                                    <i class="far fa-calendar-check"></i> <span>Buy Data</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="profiles.php" class="nav-link">
                                    <i class="far fa-user"></i> <span>Profile Settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="wallet.php" class="nav-link">
                                    <i class="far fa-money-bill-alt"></i> <span>Wallet</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="provider-subscription.html" class="nav-link">
                                    <i class="far fa-calendar-alt"></i> <span>Subscription</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="provider-availability.html" class="nav-link">
                                    <i class="far fa-clock"></i> <span>Availability</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="provider-reviews.html" class="nav-link">
                                    <i class="far fa-star"></i> <span>Reviews</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="provider-payment.html" class="nav-link">
                                    <i class="fas fa-hashtag"></i> <span>Payment</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>



    <!-- jQuery -->
    <script src="assets/js/jquery-3.5.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Sticky Sidebar JS -->
    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <!-- Datepicker Core JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

</body>

<!-- Mirrored from truelysell-html.dreamguystech.com/template/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jun 2021 23:47:18 GMT -->
</html>