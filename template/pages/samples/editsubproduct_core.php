<?php

require_once("config.php");

$editId = $_REQUEST['id'];
$user = $_REQUEST['user'];


// Gettimg data 

$contactName = $_REQUEST['contactName'];
$companyName = $_REQUEST['companyName'];
$buyerORsuppliyer = $_REQUEST['buyerORsuppliyer'];


$CheckBoxes = $_REQUEST['CheckBoxes'];
$data = implode('/', $CheckBoxes);

$insquery = "UPDATE `subproduct` SET `contactName` = '$contactName', `companyName` = '$companyName', `buyerORsuppliyer`='$buyerORsuppliyer', `data`='$data' WHERE `subproduct`.`id` = $editId ";

$run = mysqli_query($con, $insquery);

if ($run) {
    header("location:../../subproduct.php?id=$user&updeted");
}
