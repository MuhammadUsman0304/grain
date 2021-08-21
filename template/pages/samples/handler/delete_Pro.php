<?php
session_start();
require_once('../config.php');

// deleting category
$pro_id = $_GET['pid'];
$query = "DELETE FROM `site_front_product` WHERE `product_id`  = ?";
$stmt = mysqli_prepare($con, $query) or die(mysqli_error($con));
if (is_object($stmt)) {
	$stmt->bind_param('i', $pro_id);
	$stmt->execute();
	$_SESSION['status'] = "<div class='alert alert-info'>Product Deleted Success...</div>";
	header('location: ../manage_site_front_product.php');
}else{
	$_SESSION['status'] = "<div class='alert alert-info'>Oh Snap! </div>";
	header('location: ../manage_site_front_product.php');
}
$stmt->close();
$con->close();
?>