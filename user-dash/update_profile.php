<?php 
 session_start();
 // including database file
 require_once '../template/pages/samples/config.php';
 if (!isset($_SESSION['username'])) {
     header('location: ../login.php');
 }
 // updating user profile
 if (isset($_REQUEST['update'])) {
 	$buyer_id = $_REQUEST['buyer_id'];
 	$fname = $_REQUEST['fname'];
 	$uname = $_REQUEST['uname'];
 	$cname = $_REQUEST['cname'];
 	$email = $_REQUEST['email'];

 	$query = "UPDATE `buyers` SET `fullname`=?,`surename`=?,`companyName`=?,`email`=? WHERE `buyer_id` = $buyer_id";
 	$stmt = mysqli_prepare($con, $query) or die(mysqli_error($con));
 	if (is_object($stmt)) {
 		$stmt->bind_param('ssss', $fname, $uname, $cname, $email);
 		$stmt->execute();
 		$_SESSION['status'] = "<div class='alert alert-info'>Profile Updated Success...</div>";
 		header('location: dashboard.php');
 	}else{
 		$_SESSION['status'] = "<div class='alert alert-info'>Oh Snap! Something Went Wrong.</div>";
 		header('location: dashboard.php');
 	}
 	$stmt->close();
 	$con->close();
 }
?>