<?php
session_start();
require_once('../config.php');

// deleting category
$newsl_id = $_GET['qid'];
$query = "DELETE FROM `newslatter_info` WHERE `newsl_id`  = ?";
$stmt = mysqli_prepare($con, $query) or die(mysqli_error($con));
if (is_object($stmt)) {
	$stmt->bind_param('i', $newsl_id);
	$stmt->execute();
	$_SESSION['status'] = "<div class='alert alert-info'>Query Deleted Success...</div>";
	header('location: ../manage_quries.php');
}else{
	$_SESSION['status'] = "<div class='alert alert-info'>Oh Snap! </div>";
	header('location: ../manage_quries.php');
}
$stmt->close();
$con->close();
?>