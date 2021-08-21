<?php
session_start();
require_once('../config.php');

// deleting category
$buyer_id = $_GET['bid'];
$query = "DELETE FROM `buyers` WHERE `buyer_id`  = ?";
$stmt = mysqli_prepare($con, $query) or die(mysqli_error($con));
if (is_object($stmt)) {
	$stmt->bind_param('i', $buyer_id);
	$stmt->execute();
	$_SESSION['status'] = "<div class='alert alert-info'>Buyer Deleted Success...</div>";
	header('location: ../manage_buyers.php');
}else{
	$_SESSION['status'] = "<div class='alert alert-info'>Oh Snap! </div>";
	header('location: ../manage_buyers.php');
}
$stmt->close();
$con->close();
?> 