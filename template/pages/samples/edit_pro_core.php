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

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}

$insQuerey = "UPDATE `product` SET `category` = '$maincategory', `proName` = '$subcategory', `img` = '$imgName', `des` = '$des' WHERE `product`.`id` = $id";
$runins = mysqli_query($con, $insQuerey);

if ($runins) {
    header("location:../../products.php?updeted");
}
