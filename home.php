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
                <a href="index.php" class="navbar-brand logo">
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

                        <!-- /Notifications -->

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
<!-- Hero Section -->
<section class="hero-section">
    <div class="layer">
        <div class="home-banner"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-search">
                        <h3>World's Largest <span>Marketplace</span></h3>
                        <p>Search From 150 Awesome Verified Ads!</p>
                        <div class="search-box">
                            <form action="https://truelysell-html.dreamguystech.com/template/search.html">
                                <div class="search-input line">
                                    <i class="fas fa-tv bficon"></i>
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" placeholder="What are you looking for?">
                                    </div>
                                </div>
                                <div class="search-input">
                                    <i class="fas fa-location-arrow bficon"></i>
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" placeholder="Your Location">
                                        <a class="current-loc-icon current_location" href="javascript:void(0);"><i class="fas fa-crosshairs"></i></a>
                                    </div>
                                </div>
                                <div class="search-btn">
                                    <button class="btn search_service" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="search-cat">
                            <i class="fas fa-circle"></i>
                            <span>Popular Searches</span>
                            <a href="search.html">Electrical  Works</a>
                            <a href="search.html">Cleaning</a>
                            <a href="search.html">AC Repair</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Hero Section -->

<?php include ("footer.php"); ?>
