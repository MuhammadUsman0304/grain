<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add User KGP </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/logo.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-8 mx-auto">

                        <?php

                        require_once('config.php');


                        $editId = $_REQUEST['id'];
                        $user = $_REQUEST['user'];


                        // get data for edit 
                        $getQuery = "SELECT * FROM `subproduct` WHERE id='$editId'";
                        $runget = mysqli_query($con, $getQuery);

                        $fetch = mysqli_fetch_array($runget);





                        ?>

                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Edit Sub Product</h3>
                            <form class="forms-sample" method="POST" action="editsubproduct_core.php?id=<?php echo $editId; ?>&user=<?php echo $user; ?>">
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">CONACT NAME</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputUsername2" name="contactName" placeholder="<?php echo $fetch['contactName']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">COMPANY NAMES</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputEmail2" name="companyName" placeholder="<?php echo $fetch['companyName']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="from-inline">
                                        <select class="custom-select my-1 mr-sm-2" required name="buyerORsuppliyer" id="inlineFormCustomSelectPref">
                                            <option value="" selected>Buyer or supplier</option>
                                            <option value="Buyer">Buyer</option>
                                            <option value="supplier">supplier</option>
                                        </select>
                                    </div>
                                </div>
                                <label for="exampleInputMobile" class="col-sm-c3 col-form-label text-primary"> Beans</label>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-c3 col-form-label"> White Kidney</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%White Kidney OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="White Kidney OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%White Kidney NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="White Kidney NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%White Kidney CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="White Kidney CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Dark red Kidney</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Dark red candy OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Dark red candy OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Dark red candy NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Dark red candy NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Dark red candy CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Dark red candy CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Light Red Kidney</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Light Red Kidney OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Light Red Kidney OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Light Red Kidney NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Light Red Kidney NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Light Red Kidney CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Light Red Kidney CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Great Northren</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Great Northren OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Great Northren OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Great Northren NoG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Great Northren NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Great Northren CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Great Northren CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Small Red</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Small Red OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Small Red OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Small Red NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Small Red NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Small Red CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Small Red CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Faba</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Faba OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Faba OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Faba NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Faba NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Faba CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Faba CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Split Faba</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Faba OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Faba OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Faba NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Faba NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Faba CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Faba CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Black</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Black OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Black OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Black NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Black NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Black CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Black CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Split Black</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Black OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Black OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Black NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Black NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Black CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Black CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Navey</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Navey OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Navey OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Navey NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Navey NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Navey CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Navey CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Split Navey</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Navey OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Navey OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Navey NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Navey NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Navey CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Navey CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Pinto</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Pinto OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Pinto OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Pinto NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Pinto NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Pinto CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Pinto CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Split Pinto</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Pinto OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Pinto OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Pinto NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Pinto NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Pinto CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Pinto CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Black Matpe</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Pinto CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Black Matpe OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Pinto CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Black Matpe NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Pinto CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Black Matpe CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Mung Dal</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Mung Dal OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Mung Dal OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Mung Dal NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Mung Dal NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Mung Dal CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Mung Dal CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Mung bean</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Mung bean OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Mung bean OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Mung bean NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Mung bean NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Mung bean CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Mung bean CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Soybean</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Soybean OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Soybean OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Soybean NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Soybean NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Soybean CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Soybean CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Desi Chick Peas</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Chick Peas OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Chick Peas OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Chick Peas NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Chick Peas NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Chick Peas CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Chick Peas CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Chick Peas Kabuli 10mm</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Chick Peas Kabuli 10mm OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Chick Peas Kabuli 10mm OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Chick Peas Kabuli 10mm NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Chick Peas Kabuli 10mm NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Chick Peas Kabuli 10mm CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Chick Peas Kabuli 10mm CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Chick Peas Kabuli 9mm</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Chick Peas Kabuli 9mm OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Chick Peas Kabuli 9mm OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Chick Peas Kabuli 9mm NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Chick Peas Kabuli 9mm NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Chick Peas Kabuli 9mm CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Chick Peas Kabuli 9mm CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Chick Peas Kabuli 8mm</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Chick Peas Kabuli 8mm NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Chick Peas Kabuli 8mm OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Chick Peas Kabuli 8mm NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Chick Peas Kabuli  8mm NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Chick Peas Kabuli 8mm CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Chick Peas Kabuli 8mm CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Chana Del</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Chana Del OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Chana Del OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Chana Del NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Chana Del NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Chana Del CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Chana Del CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Cranberry</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Cranberry OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Cranberry OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Cranberry NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Cranberry NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Pinto CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Cranberry CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <label for="exampleInputMobile" class="col-sm-c3 col-form-label text-primary"> Grains</label>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Oats</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Oats OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Oats OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Oats NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Oats NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Oats CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Oats CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Barley</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Barley OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Barley OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Barley NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Barley NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Barley CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Barley CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Feed Barley</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Feed Barley OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Feed Barley OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Feed Barley% NOG' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Feed Barley NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Feed Barley% CN' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Feed Barley CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Rye</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Rye OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Rye OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Rye NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Rye NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Rye CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Rye CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Durum Wheat</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Durum Wheat OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Durum Wheat OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Durum Wheat NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Durum Wheat NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Durum Wheat CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Durum Wheat CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Wheat</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Wheat OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Wheat OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Wheat NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Wheat NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Wheat CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Wheat CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Red Millet</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Red Millet OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Red Millet OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Red Millet NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Red Millet NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Red Millet CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Red Millet CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> White Millet</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%White Millet OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="White Millet OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%White Millet NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="White Millet NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%White Millet CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="White Millet CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Oat Groat</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Oat Groat OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Oat Groat OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Oat Groat NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Oat Groat NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Oat Groat CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Oat Groat CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <label for="exampleInputMobile" class="col-sm-c3 col-form-label text-primary"> Lentils</label>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Laird No 1</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Laird No 1 OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Laird No 1 OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Laird No 1 NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Laird No 1 NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Laird No 1 CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Laird No 1 CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Laird No 2</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Laird No 2 OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Laird No 2 OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Laird No 2 NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Laird No 2 NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Laird No 2 CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Laird No 2 CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Eston</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Eston OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Eston OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Eston NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Eston NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Eston CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Eston CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Crimson</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Crimson OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Crimson OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Crimson NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Crimson NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Crimson CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Crimson CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Red</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Red OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Red OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Red NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Red NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Red CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Red CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Split Red</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Red OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Red OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Red NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Red NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Red CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Red CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">French</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%French OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="French OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%French NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="French NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%French CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="French CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Green</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Green OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Green OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Green NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Green NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Green CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Green CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Split Green</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Green OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Green OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Green NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Green NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Green CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Green CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Richlea </label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Richlea OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Richlea OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Richlea NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Richlea NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Richlea CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Richlea CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <label for="exampleInputMobile" class="col-sm-c3 col-form-label text-primary"> Oil Seed</label>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Canola</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Canola OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Canola OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Canola NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Canola NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Canola CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Canola CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Brown Flax</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Brown Flax OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Brown Flax OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Brown Flax NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Brown Flax NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Brown Flax CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Brown Flax CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Yellow Flax</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Yellow Flax OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Yellow Flax OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Yellow Flax NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Yellow Flax NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Yellow Flax CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Yellow Flax CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Golden Flax</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Golden Flax OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Golden Flax OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Golden Flax NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Golden Flax NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Golden Flax CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Golden Flax CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Yellow Mustard</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Yellow Mustard OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Yellow Mustard OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Yellow Mustard NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Yellow Mustard NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Yellow Mustard CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Yellow Mustard CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Brown Mustard</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Brown Mustard OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Brown Mustard OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Brown Mustard NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Brown Mustard NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Brown Mustard CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Brown Mustard CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Hemp Seed</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Hemp Seed OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Hemp Seed OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Hemp Seed NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Hemp Seed NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Hemp Seed CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Hemp Seed CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Sunflower Seed</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Sunflower Seed OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Sunflower Seed OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Sunflower Seed NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Sunflower Seed NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Sunflower Seed CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Sunflower Seed CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Coriander Seed</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Coriander Seed OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Coriander Seed OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Coriander Seed NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Coriander Seed NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Coriander Seed CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Coriander Seed CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Rape Seed</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Rape Seed OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Rape Seed OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Rape Seed NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Rape Seed NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Rape Seed CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Rape Seed CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Sesame Seed</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Sesame Seed OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Sesame Seed OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Sesame Seed NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Sesame Seed NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Sesame Seed CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Sesame Seed CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Canary Seed</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Canary Seed OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Canary Seed OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Canary Seed NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Canary Seed NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Canary Seed CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Canary Seed CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Niger Seed</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Niger Seed OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Niger Seed OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Niger Seed NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Niger Seed NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Niger Seed CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Niger Seed CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Oriental Mustard</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Oriental Mustard OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Oriental Mustard OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Oriental Mustard NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Oriental Mustard NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Oriental Mustard CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Oriental Mustard CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <label for="exampleInputMobile" class="col-sm-c3 col-form-label text-primary"> Peas</label>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Green</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Green OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Green OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Green NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Green NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Green CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Green CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Split Green</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Green OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Green OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Green NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Green NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Green CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Green CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Yellow</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Yellow OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Yellow OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Yellow NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Yellow NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Yellow CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Yellow CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Split Yellow</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Yellow OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Yellow OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Yellow NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Yellow NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Split Yellow CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Split Yellow CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Marrowfat</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Marrowfat OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Marrowfat OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Marrowfat NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Marrowfat NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Marrowfat CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Marrowfat CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Pigeon</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Pigeon OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Pigeon OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Pigeon NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Pigeon NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Pigeon CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Pigeon CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Maple</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Maple OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Maple OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Maple NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Maple NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Maple CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Maple CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <label for="exampleInputMobile" class="col-sm-c3 col-form-label text-primary"> Corn</label>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Yellow Corn</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Yellow Corn OG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Yellow Corn OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Yellow Corn NOG%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Yellow Corn NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" <?php
                                                                                                                        $checked =  "SELECT * FROM `subproduct` WHERE `data` LIKE '%Yellow Corn CN%' ";
                                                                                                                        $runChecked = mysqli_query($con, $checked);
                                                                                                                        $checkedCount = mysqli_num_rows($runChecked);
                                                                                                                        if ($checkedCount == "1") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?> value="Yellow Corn CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-check-flat form-check-primary">
                                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>