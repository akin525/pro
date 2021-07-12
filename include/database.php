<?php
$dbname="pro";
$con = new mysqli("localhost", "root", "", "pro");
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
}
?>
