<?php
require_once('pages/samples/config.php');
$Subjectuser = $_REQUEST['Subject'];
$Massage = $_REQUEST['Massage'];
$sid = $_REQUEST['sid'];




$query = "SELECT * FROM company WHERE id IN ($sid)";
$run = mysqli_query($con, $query);

if ($run) {
    while ($row = mysqli_fetch_array($run)) {



        $companyname = $row['contactName'];
        $from = "hr@kruzgrainspulses.com";
        $to = $row['email'];

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
    }
}
