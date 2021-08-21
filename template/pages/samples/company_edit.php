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
                        session_start();
                        require_once("config.php");


                        if (isset($_REQUEST['id'])) {
                            $editId = $_REQUEST['id'];
                            $user = $_REQUEST['user'];
                        } else {
                            header("location:login.php");
                        }

                        // get data for edit 
                        $getQuery = "SELECT * FROM `company` WHERE id='$editId'";
                        $runget = mysqli_query($con, $getQuery);

                        $fetch = mysqli_fetch_array($runget);


                        ?>

                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Edit Company</h3>
                            <form class="forms-sample" method="POST" action="editcompany_core.php?id=<?php echo $editId; ?>&user=<?php echo $user; ?>">
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">CONACT NAME</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputUsername2" name="contactName" value="<?php echo $fetch['contactName']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">COMPANY NAMES</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputEmail2" name="companyName" value="<?php echo $fetch['companyName']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">HEAD QUARTER</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputMobile" name="headquater" value="<?php echo $fetch['headquater']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> EMAIL</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="exampleInputMobile" name="email" value="<?php echo $fetch['email']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> FAX</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputMobile" name="fax" value="<?php echo $fetch['fax']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> PHONE</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputMobile" name="phone" value="<?php echo $fetch['phone']; ?>">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> WEB SITE</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputMobile" name="website" value="<?php echo $fetch['website']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Beans</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Bog" <?php if ($fetch['Bog'] == 'Beans OG') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Beans OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Bnog" <?php if ($fetch['Bnog'] == 'Beans NOG') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Beans NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Bcn" <?php if ($fetch['Bcn'] == 'Beans CN') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Beans CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Lentils</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Log" <?php if ($fetch['Log'] == 'Lentils OG') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Lentils OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Lnog" <?php if ($fetch['Lnog'] == 'Lentils NOG') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Lentils NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Lcn" <?php if ($fetch['Lcn'] == 'Lentils CN') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Lentils CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Grains</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Gog" <?php if ($fetch['Gog'] == 'Grains OG') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Grains OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Gnog" <?php if ($fetch['Gnog'] == 'Grains NOG') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Grains NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Gcn" <?php if ($fetch['Gcn'] == 'Grains CN') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Grains CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Oilseed</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Oog" <?php if ($fetch['Oog'] == 'Oilseed OG') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Oilseed OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Onog" <?php if ($fetch['Onog'] == 'Oilseed NOG') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Oilseed NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Ocn" <?php if ($fetch['Ocn'] == 'Oilseed CN') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Oilseed CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Peas</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Pog" <?php if ($fetch['Pog'] == 'Peas OG') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Peas OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Pnog" <?php if ($fetch['Pnog'] == 'Peas NOG') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Peas NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Pcn" <?php if ($fetch['Pcn'] == 'Peas CN') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Peas CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Corn</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Cog" <?php if ($fetch['Cog'] == 'Corn OG') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Corn OG" class="form-check-input"> OG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Cnog" <?php if ($fetch['Cnog'] == 'Corn NOG') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Corn NOG" class="form-check-input"> NOG</label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"><input type="checkbox" name="Ccn" <?php if ($fetch['Ccns'] == 'Corn CN') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> value="Corn CN" class="form-check-input"> CN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Notes</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputMobile" name="notes" value="<?php echo $fetch['notes']; ?>">
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