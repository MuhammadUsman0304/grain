<?php

require_once('config.php');
$user = $_REQUEST['user'];

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}

if ($id) {
    $insQuery = "DELETE FROM `user` WHERE `user`.`id` = $id";

    $runIns = mysqli_query($con, $insQuery);

    header("location:../../user.php?id=$user&delete");
}
