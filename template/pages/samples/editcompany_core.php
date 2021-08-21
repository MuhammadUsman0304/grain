<?php
session_start();
require_once("config.php");
// user
$userid = $_REQUEST['user'];


// Collect Data

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
// Chick peas
$Cpog = isset($_REQUEST['Cpog']) ? $_REQUEST['Cpog'] : 'no';
$Cpnog = isset($_REQUEST['Cpnog']) ? $_REQUEST['Cpnog'] : 'no';
$Cpcn = isset($_REQUEST['Cpcn']) ? $_REQUEST['Cpcn'] : 'no';
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

if (isset($_REQUEST['id'])) {
    $editId = $_REQUEST['id'];
}

$UpdateQuery = "UPDATE `company` SET `contactName` = '$contactName', `companyName` = '$companyName', `headquater` = '$headquater', `email` = '$email',`fax` = '$fax', `phone` = '$phone', `website` = '$website', `Bog` = '$Bog', `Bnog` = '$Bnog', `Bcn` = '$Bcn',`Log` = '$Log', `Lnog` = '$Lnog', `Lcn` = '$Lcn',  `Gog` = '$Gog', `Gnog` = '$Gnog', `Gcn` = '$Gcn', `Oog` = '$Oog', `Onog` = '$Onog', `Ocn` = '$Ocn', `Pog` = '$Pog', `Pnog` = '$Pnog', `Pcn` = '$Pcn', `Cog` = '$Cog', `Cnog` = '$Cnog', `Ccns` = '$Ccn', `notes` = '$notes', `addedBy` = '$user' WHERE `company`.`id` = $editId";

$runins = mysqli_query($con, $UpdateQuery);

if ($runins) {
    header("location:../../company.php?id=$userid&updeted");
}
