<?php

require_once('config.php');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}

echo $id;
if ($id) {
    $insQuery = "DELETE FROM `product` WHERE `product`.`id` = $id";

    $runIns = mysqli_query($con, $insQuery);

    header("location:../../products.php?delete");
}
