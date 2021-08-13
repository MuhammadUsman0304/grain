<?php
require_once('config.php');
// User
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

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}


if ($id) {
    $insQuery = "UPDATE `user` SET `FName` = '$fname', `Lname` = '$lname', `proImg` = '$imgName', `Email` = '$email',`Pass` = '$pass', `ActionRole` = '$role' WHERE `user`.`id` = $id";

    $runIns = mysqli_query($con, $insQuery);
    header("location:../../user.php?id=$user&updeted");
} else {
    header("location:user_edit.php?false");
}
