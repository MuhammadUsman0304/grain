<?php
session_start();
require_once '../config.php';

// adding product to database
if (isset($_POST['add_pro'])) {
	$category = $_POST['category'];
	$produc_name = $_POST['produc_name'];
	$produc_desc = $_POST['produc_desc'];
	$imgfile = $_FILES['produc_img']['name'];
	// get the image extension
    $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
    // allowed extensions
    $allowed_extensions = array(".jpg","jpeg",".PNG",".gif");
    if (!in_array($extension,$allowed_extensions)) {
    	echo "<script>alert('Invalid format. Only jpg / jpeg/ png  format allowed');</script>";
    }else{
     //rename the image file
     $imgnewfile=md5($imgfile).$extension;
     // moving image into directory
     move_uploaded_file($_FILES["produc_img"]["tmp_name"],"../product_imgs/".$imgnewfile);
     
     // shipping and pricing 
     $continr_size = $_POST['continr_size'];
     $shipping_short_note = $_POST['shipping_short_note'];
     $cost_price = $_POST['cost_price'];
     $cost_short_note = $_POST['cost_short_note'];
     $sale_price = $_POST['sale_price'];
     $sale_short_note = $_POST['sale_short_note'];

     // nutration table details
     $serving_size = $_POST['serving_size'];
     $calories = $_POST['calories'];
     $calories_from_fat = $_POST['calories_from_fat'];
     $total_fat = $_POST['total_fat'];
     $total_fat_percent = $_POST['total_fat_percent'];
     $saturated_fat = $_POST['saturated_fat'];
     $saturated_fat_percent = $_POST['saturated_fat_percent'];
     $trans_fat = $_POST['trans_fat'];
     $trans_fat_percent = $_POST['trans_fat_percent'];
     $sodium_fat = $_POST['sodium_fat'];
     $sodium_fat_percent = $_POST['sodium_fat_percent'];
     $carbo_fat = $_POST['carbo_fat'];
     $carbo_fat_percent = $_POST['carbo_fat_percent'];
     $dietry_fiber = $_POST['dietry_fiber'];
     $dietry_fiber_percent = $_POST['dietry_fiber_percent'];
     $protien = $_POST['protien'];
     $protien_percent = $_POST['protien_percent'];
     $vitamin_a = $_POST['vitamin_a'];
     $vitamin_b = $_POST['vitamin_b'];
     $calcium = $_POST['calcium'];
     $iron = $_POST['iron'];

     $query = "INSERT INTO `site_front_product`(`cate_id`, `product_name`, `Product_desc`, `product_image`, `shipping`, `shipping_note`, `sale_price`, `sale_note`, `cost_price`, `cost_note`, `servering_size`, `calories`, `calories_from_fat`, `total_fat_per_gram`, `total_fat_per_gram_percent`, `saturated_fat_per_gram`, `saturated_fat_per_gram_percent`, `trans_fat_per_gram`, `trans_fat_per_gram_percent`, `sodium_fat_per_gram`, `sodium_fat_per_gram_percent`, `carbohydrates_per_gram`, `carbohydrates_per_gram_percent`, `dietry_fiber_per_gram`, `dietry_fiber_per_gram_percent`, `protien_per_gram`, `protien_per_gram_percent`, `vitamin_a_percent`, `vitamin_b_percent`, `calcium_a_percent`, `iron_a_percent`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
     $stmt = mysqli_prepare($con, $query) or die(mysqli_error($con));
     if (is_object($stmt)) {
     	$stmt->bind_param('issssssssssssssssssssssssssssss', $category, $produc_name, $produc_desc, $imgnewfile, $continr_size, $shipping_short_note, $cost_price, $cost_short_note, $sale_price, $sale_short_note, $serving_size, $calories, $calories_from_fat, $total_fat, $total_fat_percent, $saturated_fat, $saturated_fat_percent, $trans_fat, $trans_fat_percent, $sodium_fat, $sodium_fat_percent, $carbo_fat, $carbo_fat_percent, $dietry_fiber, $dietry_fiber_percent, $protien, $protien_percent, $vitamin_a, $vitamin_b, $calcium, $iron);
     	$stmt->execute();
     	$_SESSION['status'] = "<div class='alert alert-info'>Product Added Successfuly...</div>";
     	header('location: ../manage_site_front_product.php');
     }else{
     	$_SESSION['status'] = "<div class='alert alert-info'>Oh Snap...</div>";
     	header('location: ../manage_site_front_product.php');
     }
     $stmt->close();
    $con->close();
    }
    

}
?>
