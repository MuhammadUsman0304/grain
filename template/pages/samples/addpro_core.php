<?php
require_once('config.php');

$maincategory = $_REQUEST['maincategory'];
$subcategory = $_REQUEST['subcategory'];
$des = $_REQUEST['des'];
$userimg = $_FILES['img'];



$imgName = $userimg['name'];
$imgtype = $userimg['type'];
$imgTmpName = $userimg['tmp_name'];
$imgSize = $userimg['size'];
$loc = "profile/";
move_uploaded_file($imgTmpName, $loc . $imgName);


$insQuerey = "INSERT INTO `product` (`category`,`proName`,`img`,`des`) VALUES ('$maincategory','$subcategory','$imgName','$des')";
$runins = mysqli_query($con, $insQuerey);

if ($runins) {
    header("location:../../products.php?added");
} else {
    header("location:addmainpro.php?false");
}
