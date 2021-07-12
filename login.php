<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell-html.dreamguystech.com/template/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jun 2021 23:47:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Truelysell | Template</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="admin/assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="admin/assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="admin/assets/css/admin.css">

</head>
<?php
include_once ("include/database.php");
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
<body>
<div class="main-wrapper">

    <div class="login-page">
        <div class="login-body container">
            <div class="loginbox">
                <div class="login-right-wrap">
                    <div class="account-header">
                        <div class="account-logo text-center mb-4">
                            <a href="index.html">
                                <img src="assets/img/logo-icon.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="login-header">
                        <h3>Login <span>Truelysell</span></h3>
                        <p class="text-muted">Access to our dashboard</p>
                    </div>

                    <center><?php
                        if(!empty($errormsg))
                        {
                            print $errormsg;

                        }
                        ?>
                    </center>
                    <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="post">
                    <div class="form-group">
                            <label class="control-label">Email</label>
                            <input class="form-control" type="text" name="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group mb-4">
                            <label class="control-label">Password</label>
                            <input class="form-control" type="password" name="password" placeholder="Enter your password">
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary btn-block account-btn" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="admin/assets/js/jquery-3.5.0.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="admin/assets/js/popper.min.js"></script>
<script src="admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Custom JS -->
<script src="admin/assets/js/admin.js"></script>

</body>


<!-- Mirrored from truelysell-html.dreamguystech.com/template/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jun 2021 23:47:37 GMT -->
</html>