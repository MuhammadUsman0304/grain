<?php
require_once('config.php');
// USER

$user = $_REQUEST['user'];


//  Get data
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$pass = md5(sha1($_REQUEST['pass']));
$role = $_REQUEST['role'];

// Get Image 
$userimg = $_FILES['img'];

$imgName = $userimg['name'];
$imgtype = $userimg['type'];
$imgTmpName = $userimg['tmp_name'];
$imgSize = $userimg['size'];
$loc = "profile/";
move_uploaded_file($imgTmpName, $loc . $imgName);


$cheackemail = "SELECT * FROM `user` WHERE Email LIKE '$email'";
$runemailcheck = mysqli_query($con, $cheackemail);
$count = mysqli_num_rows($runemailcheck);
echo $count;
if ($count == 0) {
    $insQuery = "INSERT INTO `user` ( `FName`, `Lname`, `proImg`, `Email`, `Pass`, `ActionRole`) VALUES ( '$fname', '$lname', '$imgName', '$email', '$pass', '$role')";

    $runIns = mysqli_query($con, $insQuery);
    header("location:../../user.php?id=$user&added");
} else {
    header("location:register.php?false");
}
