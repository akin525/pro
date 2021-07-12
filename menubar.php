<?php
echo "";
if( ! ini_get('date.timezone') )
{
    date_default_timezone_set('GMT');
}
if(!isset($_SESSION)){
    session_start();
}
include ("include/database.php");
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<!-- Mirrored from truelysell-html.dreamguystech.com/template/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jun 2021 23:47:18 GMT -->
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
                <a href="index.html" class="navbar-brand logo">
                    <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                </a>
                <a href="index.html" class="navbar-brand logo-small">
                    <img src="assets/img/logo-icon.png" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index.html" class="menu-logo">
                        <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="categories.html">Categories</a>
                    </li>
                    <li class="has-submenu">
                        <a href="provider-dashboard.html">Providers</a>
                        <ul class="submenu">
                            <li><a href="provider-dashboard.html">Dashboard</a></li>
                            <li><a href="my-services.html">Services</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu active">
                        <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="search.html">Search</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
<!--                            <li><a href="add-service.html">Add Service</a></li>-->
<!--                            <li class="active"><a href="edit-service.html">Edit Service</a></li>-->
                            <li><a href="chat.html">Chat</a></li>
                            <li><a href="notifications.html">Notifications</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
<!--                            <li><a href="faq.html">Faq</a></li>-->
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </li>
                    <li>
<!--                        <a href="admin/index.html" target="_blank">Admin</a>-->
                    </li>
                    <li>
<!--                        <a href="javascript:void(0);" data-toggle="modal" data-target="#provider-register">Become a Professional</a>-->
                    </li>

                    <?php
//                    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username'])) {
//                        $username = mysqli_real_escape_string($con, $_POST['username']);
//
//                        $sql = "SELECT username FROM users WHERE username='{$username}'";
//                        $result = mysqli_query($con, $query);
//                        while ($row = mysqli_fetch_array($result)) {
//                            $username = $row["status"];
//                        }
//                    }
//                    ?>

<?php //} else { ?>

                    <li>
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#user-register">Become a User</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link header-login" href="javascript:void(0);" data-toggle="modal" data-target="#login_modal">Login</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- /Header -->

    <!-- Provider Register Modal -->

    <!-- User Register Modal -->
    <?php
//    $result = mysqli_query($con,$query);

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username'])) {
    // Collect the data from post method of form submission //
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
//    $password2 = mysqli_real_escape_string($con, $_POST['password2']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    //$refer= mysqli_real_escape_string($con, $_POST['refer']);


    $status = "OK";
    $msg = "";
    if (!isset($username) or strlen($username) < 6) {
        $msg = $msg . "Username Should Contain Minimum 6 CHARACTERS.<br />";
        $status = "NOTOK";
    }

    if (!ctype_alnum($username)) {
        $msg = $msg . "Username Should Contain Alphanumeric Chars Only.<br />";
        $status = "NOTOK";
    }

    $remail = mysqli_query($con, "SELECT COUNT(*) FROM users WHERE email = '$email'");
    $re = mysqli_fetch_row($remail);
    $nremail = $re[0];
    if ($nremail == 1) {
        $msg = $msg  .  "E-Mail Id Already Registered. Please try another one<br />";
        $status = "NOTOK";
    }

    if (strlen($password) < 8) {
        $msg = $msg . "Password Must Be More Than 8 CHARACTERS Length.<br />";
        $status = "NOTOK";
    }

    if (strlen($email) < 1) {
        $msg = $msg . "Please Enter Your Email Id.<br />";
        $status = "NOTOK";
    }
    $sql = "SELECT username FROM users WHERE username='{$username}'";
    $result = mysqli_query($con,$sql) or die("Query unsuccessful") ;
    if (mysqli_num_rows($result) > 0) {
        $msg = $msg . "user id already Registered. please try another one<br />";
        $status = "NOTOK";
    }
    //Test if it is a shared client
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
//Is it a proxy address
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
        if ($status == "OK") {
            $passmd=MD5($password);
//echo mysqli_query($con,"insert into `users`(`active`,`username`,`password`,`fname`,`email`,`ipaddress`,`mobile`,`country`) values(1,'$username','$passmd','$name','$email','$ip','$phone','$country')");
            mysqli_query($con, "INSERT INTO `users` (`username`, `email`, `password`, `name`, `status`, `allowdeposit`, `phone`) VALUES ('$username', '$email', '$passmd', '$name', 1, 1, '$phone')");
            mysqli_query($con,"insert INTO wallet (username,balance) values('$username',0)");
//mysqli_query($con,"INSERT INTO referal (`username`, `newuserid`, amount) value ('$refer', '$username', 100)");
            $suss= "<div class='card'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <i class='fa fa-ban-circle'></i><strong>Account Registration successful : </br></strong>A mail has been sent to $email containing your login details for record purpose. Check your spam folder if message is not found in your inbox. $password</div>";
            //printing error if found in validation
            print "
				<script language='javascript'>
				let message = 'Account Registration successful : A mail has been sent to $email containing your login details for record purpose. Check your spam folder if message is not found in your inbox. ';
                                    alert(message);
window.location = 'dashboard.php';
</script>
";
        }else{
            $errormsg= "<div class='card'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <i class='fa fa-ban-circle'></i><strong>Please Fix Below Errors : </br></strong>".$msg."</div>"; //printing error if found in validation
        }
    }
    ?>
    <div class="modal account-modal fade multi-step" id="user-register" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-header">
                        <h3>Join as a User</h3>
                    </div>
                <center>
                    <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST' && ($status=="NOTOK"))
                    {
                        print $errormsg;

                    }
                    ?>

                    <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST' && ($status=="OK"))
                    {
                        print $suss;

                    }
                    ?>
                </center>
                    <!-- Register Form -->
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>"method="post">
                    <div class="form-group form-focus">
                            <label class="focus-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="johndoe@exapmle.com">
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Mobile Number</label>
                            <input type="text" name="phone" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Create Password</label>
                            <input type="password" name="password" class="form-control" placeholder="********" required>
                        </div>
<!--                        <div class="text-right">-->
<!--                            <a class="forgot-link" href="#">Already have an account?</a>-->
<!--                        </div>-->
                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
                        <div class="login-or">
                            <span class="or-line"></span>
                            <span class="span-or">or</span>
                        </div>
                        <div class="row form-row social-login">
<!--                            <div class="col-6">-->
<!--                                <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>-->
<!--                            </div>-->
<!--                            <div class="col-6">-->
<!--                                <a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>-->
<!--                            </div>-->
                        </div>
                    </form>
                    <!-- /Register Form -->

                </div>
            </div>
        </div>
    </div>
    <!-- /User Register Modal -->

    <!-- Login Modal -->

<?php
//include_once ("../include/database.php");
//// Inialize session
//session_start();
$errormsg="";
// Check, if username session is NOT set then this page will jump to login page
if (isset($_SESSION['email'])) {
//    print "
//				<script language='javascript'>
//					window.location = 'dashboard.php';
//				</script>
//			";
    print "
    <script language='javascript'>
    alert(loginok);
    </script>
    ";
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

// Collect the data from post method of form submission //
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password = md5($password);

    $query = "select * from users where email='$email' and password='$password'";
    $result = mysqli_query($con,$query);
    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count == 1) {
        $result = mysqli_query($con,$query);

        while($row = mysqli_fetch_array($result))
        {
            $status=$row['status'];
        }

        if($status ==0){
            $errormsg= "<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <i class='fa fa-ban-circle'></i><strong>You have been banned from accessing this portal </br></strong></div>"; //printing error if found in validation
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['login_user']=$email;
            print "
                    <script language='javascript'>
                    let message = 'Login Successful';
                                    alert(message);
                        window.location = 'dashboard.php';
                    </script>
                    ";
        }
    }else {
        $errormsg= "<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <i class='fa fa-ban-circle'></i><strong>Incorrect login details </br></strong></div>"; //printing error if found in validation
    }

}

?>
    <div class="modal account-modal fade" id="login_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-header">
                        <h3>Login <span>Truelysell</span></h3>
                    </div>
                    <center><?php
                        if(!empty($errormsg))
                        {
                            print $errormsg;

                        }
                        ?>
                    </center>
                    <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="post">

                    <div class="form-group form-focus">
                            <label class="focus-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="">
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="********">
                        </div>
                        <div class="text-right">
                        </div>
                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                        <div class="login-or">	<span class="or-line"></span>
                            <span class="span-or">or</span>
                        </div>
                        <div class="row form-row social-login">
                            <div class="col-6">	<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
                            </div>
                            <div class="col-6">	<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
                            </div>
                        </div>
<!--                        <div class="text-center dont-have">Don’t have an account? <a href="#">Register</a>-->
<!--                        </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Login Modal -->

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