<?php

require_once("config.php");

// User
$user = $_REQUEST['user'];



// Gettimg data 

$contactName = $_REQUEST['contactName'];
$companyName = $_REQUEST['companyName'];
$buyerORsuppliyer = $_REQUEST['buyerORsuppliyer'];


$CheckBoxes = $_REQUEST['CheckBoxes'];
$data = implode('/', $CheckBoxes);

$insquery = "INSERT INTO `subproduct` ( `contactName`, `companyName`, `buyerORsuppliyer`, `data`) VALUES ('$contactName', '$companyName', '$buyerORsuppliyer', '$data')";

$run = mysqli_query($con, $insquery);

if ($run) {
    header("location:../../subproduct.php?id=$user&added");
}
