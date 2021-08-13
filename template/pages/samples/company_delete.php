<?php

require_once('config.php');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $user = $_REQUEST['user'];
}

if ($id) {
    $insQuery = "DELETE FROM `company` WHERE `company`.`id` = $id";

    $runIns = mysqli_query($con, $insQuery);

    header("location:../../company.php?id=$user&delete");
}
