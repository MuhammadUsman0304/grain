<?php
session_start();
require_once("config.php");
// User
$userid = $_REQUEST['user']; 


// Collect Data
$buyerORsuppliyer = $_REQUEST['buyerORsuppliyer'];
$contactName = $_REQUEST['contactName'];
$companyName = $_REQUEST['companyName'];
$headquater = $_REQUEST['headquater'];
$email = $_REQUEST['email'];
$fax = $_REQUEST['fax'];
$phone = $_REQUEST['phone'];
$website = $_REQUEST['website'];
// Beans
$Bog = isset($_REQUEST['Bog']) ? $_REQUEST['Bog'] : 'no';
$Bnog = isset($_REQUEST['Bnog']) ? $_REQUEST['Bnog'] : 'no';
$Bcn = isset($_REQUEST['Bcn']) ? $_REQUEST['Bcn'] : 'no';

// Lentils
$Log = isset($_REQUEST['Log']) ? $_REQUEST['Log'] : 'no';
$Lnog = isset($_REQUEST['Lnog']) ? $_REQUEST['Lnog'] : 'no';
$Lcn = isset($_REQUEST['Lcn']) ? $_REQUEST['Lcn'] : 'no';

// Grains
$Gog = isset($_REQUEST['Gog']) ? $_REQUEST['Gog'] : 'no';
$Gnog = isset($_REQUEST['Gnog']) ? $_REQUEST['Gnog'] : 'no';
$Gcn = isset($_REQUEST['Gcn']) ? $_REQUEST['Gcn'] : 'no';
// Oil seed
$Oog = isset($_REQUEST['Oog']) ? $_REQUEST['Oog'] : 'no';
$Onog = isset($_REQUEST['Onog']) ? $_REQUEST['Onog'] : 'no';
$Ocn = isset($_REQUEST['Ocn']) ? $_REQUEST['Ocn'] : 'no';
// peas
$Pog = isset($_REQUEST['Pog']) ? $_REQUEST['Pog'] : 'no';
$Pnog = isset($_REQUEST['Pnog']) ? $_REQUEST['Pnog'] : 'no';
$Pcn = isset($_REQUEST['Pcn']) ? $_REQUEST['Pcn'] : 'no';

// corn
$Cog = isset($_REQUEST['Cog']) ? $_REQUEST['Cog'] : 'no';
$Cnog = isset($_REQUEST['Cnog']) ? $_REQUEST['Cnog'] : 'no';
$Ccn = isset($_REQUEST['Ccn']) ? $_REQUEST['Ccn'] : 'no';

$notes = $_REQUEST['notes'];


// User
if (isset($_SESSION['FName'])) {
    $user =  $_SESSION['FName'];
}

$insQuery = "INSERT INTO `company` (`BuyerOrsupplier`, `contactName`, `companyName`, `headquater`, `email`, `fax`, `phone`, `website`, `Bog`, `Bnog`, `Bcn`,`Log`, `Lnog`, `Lcn`,  `Gog`, `Gnog`, `Gcn`, `Oog`, `Onog`, `Ocn`, `Pog`, `Pnog`, `Pcn`, `Cog`, `Cnog`, `Ccns`, `notes`, `addedBy`) VALUES ( '$buyerORsuppliyer', '$contactName', '$companyName', '$headquater', '$email', '$fax', '$phone', '$website', '$Bog', '$Bnog', '$Bcn','$Log', '$Lnog', '$Lcn',  '$Gog', '$Gnog', '$Gcn', '$Oog', '$Onog', '$Ocn', '$Pog', '$Pnog', '$Pcn', '$Cog', '$Cnog', '$Ccn', '$notes', '$user')";

$runins = mysqli_query($con, $insQuery);

if ($runins) {
    header("location:../../company.php?id=$userid&added");
}
