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
          <div class="card col-lg-4 mx-auto">

            <?php

            if (isset($_REQUEST['id'])) {
              $id = $_REQUEST['id'];
              $user = $_REQUEST['user'];

              require_once('config.php');
              // Get data for edit
              $getdata = "SELECT * FROM `user` WHERE id='$id'";
              $rungetdata = mysqli_query($con, $getdata);

              $fetch = mysqli_fetch_array($rungetdata);
            }

            ?>

            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Edit User</h3>
              <form action="edit_core.php?id=<?php echo $id; ?>&user=<?php echo $user; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Frist Name *</label>
                  <input required type="text" name="fname" value="<?php echo $fetch['FName']; ?>" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Last Name *</label>
                  <input require type="text" name="lname" value="<?php echo $fetch['Lname']; ?>" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Profile Photo</label>
                  <div class="custom-file">
                    <input required type="file" name="img" value="<?php echo $fetch['proImg']; ?>" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                </div>
                <div class="form-group">
                  <label>Email *</label>
                  <input required type="email" name="email" value="<?php echo $fetch['Email']; ?>" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input required type="password" name="pass" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Role</label>
                  <select required name="role" class="form-control" id="exampleSelectGender">
                    <option value="0">Admin</option>
                    <option value="1">Modaretor</option>
                  </select>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">UPDATE</button>
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