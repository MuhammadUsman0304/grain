<?php
require_once('pages/samples/config.php');
$Subjectuser = $_REQUEST['Subject'];
$Massage = $_REQUEST['Massage'];
$sid = $_REQUEST['sid'];


$profileQuery = "SELECT * FROM `company` WHERE id='$sid'";
$runprofile = mysqli_query($con, $profileQuery);
$fetch = mysqli_fetch_array($runprofile);

$reciver = $fetch['email'];
$companyname = $fetch['companyName'];


$from  = "hr@kruzgrainspulses.com";
$to = "$reciver";

$subject = "$Subjectuser";
$text =  "<b>Hello $companyname.</b>";
$text .=  "<pre> $Massage.</pre>";
$text .=  "<pre> 
                 Thank You.
                 KRUZ GRAINS & PULSES.
             </pre>";

$headers = "From: $from";

if (mail($to, $subject, $text, $headers)) {
    echo "Email Send Successfully";
}
