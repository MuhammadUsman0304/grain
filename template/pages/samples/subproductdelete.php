<?php

require_once('config.php');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $user = $_REQUEST['user'];
}

echo $id;
if ($id) {
    $insQuery = "DELETE FROM `subproduct` WHERE `subproduct`.`id` = $id";

    $runIns = mysqli_query($con, $insQuery);

    header("location:../../subproduct.php?id=$user&delete");
}
