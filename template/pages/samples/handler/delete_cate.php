<?php
session_start();
require_once('../config.php');

// deleting category
$cate_id = $_GET['cate_id'];
$query = "DELETE FROM `categories` WHERE `cate_id` = ?";
$stmt = mysqli_prepare($con, $query) or die(mysqli_error($con));
if (is_object($stmt)) {
	$stmt->bind_param('i', $cate_id);
	$stmt->execute();
	$_SESSION['status'] = "<div class='alert alert-info'>Category Deleted Success...</div>";
	header('location: ../manage_category.php');
}else{
	$_SESSION['status'] = "<div class='alert alert-info'>Oh Snap! </div>";
	header('location: ../manage_category.php');
}
$stmt->close();
$con->close();
?>