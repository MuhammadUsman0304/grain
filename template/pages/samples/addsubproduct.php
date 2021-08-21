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
                        // if (isset($_REQUEST['user'])) {
                        //     $user = $_REQUEST['user'];
                        // } else {
                        //     header("location:login.php");
                        // }

                        ?>

                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Add Sub Product</h3>
                            <form class="forms-sample" method="POST" action="addsubproduct_core.php">
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">CONACT NAME</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputUsername2" name="contactName" placeholder="CONACT NAME">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">COMPANY NAMES</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputEmail2" name="companyName" placeholder="COMPANY NAMES">
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
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="White Kidney OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="White Kidney NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="White Kidney CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Dark red Kidney</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Dark red candy OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Dark red candy NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Dark red candy CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Light Red Kidney</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Light Red Kidney OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Light Red Kidney NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Light Red Kidney CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Great Northren</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Great Northren OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Great Northren NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Great Northren CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Small Red</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Small Red OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Small Red NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Small Red CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Faba</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Faba OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Faba NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Faba CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Split Faba</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Faba OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Faba NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Faba CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Black</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Black OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Black NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Black CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Split Black</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Black OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Black NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Black CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Navey</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Navey OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Navey NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Navey CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Split Navey</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Navey OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Navey NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Navey CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Pinto</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Pinto OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Pinto NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Pinto CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Split Pinto</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Pinto OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Pinto NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Pinto CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Black Matpe</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Black Matpe OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Black Matpe NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Black Matpe CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Mung Dal</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Mung Dal OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Mung Dal NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Mung Dal CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Mung bean</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Mung bean OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Mung bean NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Mung bean CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Soybean</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Soybean OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Soybean NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Soybean CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Desi Chick Peas</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chick Peas OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chick Peas NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chick Peas CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Chick Peas Kabuli 10mm</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chick Peas Kabuli 10mm OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chick Peas Kabuli 10mm NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chick Peas Kabuli 10mm CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Chick Peas Kabuli 9mm</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chick Peas Kabuli 9mm OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chick Peas Kabuli 9mm NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chick Peas Kabuli 9mm CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Chick Peas Kabuli 8mm</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chick Peas Kabuli 8mm OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chick Peas Kabuli  8mm NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chick Peas Kabuli 8mm CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Chana Del</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chana Del OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chana Del NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chana Del CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Cranberry</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Cranberry OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Cranberry NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Cranberry CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <label for="exampleInputMobile" class="col-sm-c3 col-form-label text-primary"> Grains</label>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Oats</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Oats OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Oats NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Oats CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Barley</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Barley OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Barley NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Barley CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Feed Barley</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Feed Barley OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Feed Barley NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Feed Barley CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Rye</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Rye OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Rye NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Rye CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Durum Wheat</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Durum Wheat OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Durum Wheat NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Durum Wheat CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Wheat</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Wheat OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Wheat NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Wheat CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Red Millet</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Red Millet OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Red Millet NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Red Millet CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> White Millet</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="White Millet OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="White Millet NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="White Millet CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Oat Groat</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Oat Groat OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Oat Groat NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Oat Groat CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <label for="exampleInputMobile" class="col-sm-c3 col-form-label text-primary"> Lentils</label>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Laird No 1</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Laird No 1 OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Laird No 1 NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Laird No 1 CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Laird No 2</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Laird No 2 OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Laird No 2 NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Laird No 2 CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Eston</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Eston OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Eston NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Eston CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Crimson</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Crimson OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Crimson NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Crimson CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Red</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Red OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Red NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Red CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Split Red</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Red OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Red NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Red CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">French</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="French OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="French NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="French CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Green</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Green OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Green NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Green CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Split Green</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Green OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Green NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Green CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Richlea </label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Richlea OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Richlea NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Richlea CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <label for="exampleInputMobile" class="col-sm-c3 col-form-label text-primary"> Oil Seed</label>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Canola</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Canola OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Canola NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Canola CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Brown Flax</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Brown Flax OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Brown Flax NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Brown Flax CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Yellow Flax</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Yellow Flax OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Yellow Flax NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Yellow Flax CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Golden Flax</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Golden Flax OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Golden Flax NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Golden Flax CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Yellow Mustard</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Yellow Mustard OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Yellow Mustard NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Yellow Mustard CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Brown Mustard</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Brown Mustard OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Brown Mustard NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Brown Mustard CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Hemp Seed</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Hemp Seed OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Hemp Seed NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Hemp Seed CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Sunflower Seed</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Sunflower Seed OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Sunflower Seed NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Sunflower Seed CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Coriander Seed</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Coriander Seed OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Coriander Seed NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Coriander Seed CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Rape Seed</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Rape Seed OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Rape Seed NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Rape Seed CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Sesame Seed</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Sesame Seed OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Sesame Seed NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Sesame Seed CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Canary Seed</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Canary Seed OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Canary Seed NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Canary Seed CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Niger Seed</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Niger Seed OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Niger Seed NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Niger Seed CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Oriental Mustard</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Oriental Mustard OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Oriental Mustard NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Oriental Mustard CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <label for="exampleInputMobile" class="col-sm-c3 col-form-label text-primary"> Peas</label>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Green</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Green OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Green NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Green CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Split Green</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Green OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Green NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Green CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Yellow</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Yellow OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Yellow NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Yellow CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Split Yellow</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Yellow OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Yellow NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Yellow CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Marrowfat</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Marrowfat OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Marrowfat NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Marrowfat CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Pigeon</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Pigeon OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Pigeon NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Pigeon CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Maple</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Maple OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Maple NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Maple CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <label for="exampleInputMobile" class="col-sm-c3 col-form-label text-primary"> Corn</label>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Yellow Corn</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Yellow Corn OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Yellow Corn NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Yellow Corn CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-check-flat form-check-primary">
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
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