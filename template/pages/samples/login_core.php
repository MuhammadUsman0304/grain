<?php

require_once('config.php');

$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];
// $pass = md5(sha1($_REQUEST['pass']));

//  check data 

$logquery = "SELECT * FROM `user` WHERE `Email`='$email' AND `Pass`='$pass'";
$result = mysqli_query($con, $logquery) or die(mysqli_error($con));
$row = mysqli_num_rows($result) > 0;
if ($data = mysqli_fetch_assoc($result)) {
    session_start();
    $_SESSION['id'] = $data['id'];
    $_SESSION['FName'] = $data['FName'];
    header("location:../../index.php?id=$id");
 }else{
    header("location:login.php?false");
 }









// $runlog = mysqli_query($con, $logquery);
// $fetch = mysqli_fetch_array($runlog);
// $id = $fetch['id'];
// $FName = $fetch['FName'];

// $count = mysqli_num_rows($runlog);
// if ($count === 1) {
//     session_start();
//     $_SESSION['id'] = $id;
//     $_SESSION['FName'] = $FName;
//     header("location:../../index.php?id=$id");
// } else {
//     header("location:login.php?false");
// }
