<?php
session_start();

?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KGP Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/logo.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/logo.png" style="width: 30px !important;" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo.png" alt="logo" /></a>
            </div>
            <ul class="nav">
                <?php
                require_once('pages/samples/config.php');



                if (isset($_REQUEST['id'])) {
                    $id = $_REQUEST['id'];

                    $profileQuery = "SELECT * FROM `user` WHERE id='$id'";
                    $runprofile = mysqli_query($con, $profileQuery);
                    $fetch = mysqli_fetch_array($runprofile);
                } else {
                    header("location:pages/samples/login.php");
                    exit();
                }
                ?>
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="pages/samples/profile/<?php echo $fetch['proImg']; ?>" alt="">
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal"><?php echo $fetch['FName']; ?></h5>
                                <span>
                                    <?php
                                    if ($fetch['ActionRole'] == 0) {
                                        echo 'Admin';
                                    } else {
                                        echo 'Modaretor';
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">MENU</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="company.php?id=<?php echo $id; ?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-language-c"></i>
                        </span>
                        <span class="menu-title">Company</span>
                    </a>
                </li>
                <?php
                if ($fetch['ActionRole'] == 0) {
                    echo '<li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-odnoklassniki"></i>
            </span>
            <span class="menu-title">Role</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="admin.php?id=' . $id . '">Admin</a></li>
              <li class="nav-item"> <a class="nav-link" href="modaretor.php?id=' . $id . '">Modaretor</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="user.php?id=' . $id . '">
            <span class="menu-icon">
              <i class="mdi mdi-account"></i>
            </span>
            <span class="menu-title">User</span>
          </a>
        </li>';
                }
                ?>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="subproduct.php?id=<?php echo $id; ?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-table-large"></i>
                        </span>
                        <span class="menu-title"> Sub Products</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo.png" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>

                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle" src="pages/samples/profile/<?php echo $fetch['proImg']; ?>" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $fetch['FName']; ?></p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                <?php
                                if ($fetch['ActionRole'] == 0) {
                                    echo '
                                          <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="pages/samples/register.php?user=' . $id . '">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-account-multiple-plus text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Add User</p>
                                    </div>
                                </a>
                                          ';
                                }
                                ?>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="pages/samples/addproduct.php?user=<?php echo $id; ?>">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-plus text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Add Company</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="pages/samples/addsubproduct.php?user=<?php echo $id; ?>">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-cube text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Add Sub Product</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="pages/samples/logout.php">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Log out</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper scrollmenu">
                    <?php
                    if (isset($_REQUEST['delete'])) {
                        echo '
                    <div class="alert alert-warning" role="alert">
                    User Deleted!
                    </div>
                    ';
                    }
                    if (isset($_REQUEST['added'])) {
                        echo '
                    <div class="alert alert-success" role="alert">
                    Product Added Successfully!
                    </div>
                    ';
                    }
                    if (isset($_REQUEST['updeted'])) {
                        echo '
                    <div class="alert alert-primary" role="alert">
                    User Update Successfully!
                    </div>
                    ';
                    }
                    ?>
                    <table class="table table-bordered table-bordered  table-hover table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Sl.No</th>
                                <th scope="col">Category</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Img</th>
                                <th scope="col">Description</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Time</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            require_once('pages/samples/config.php');

                            // get Product data
                            $proquery = "SELECT * FROM `product`";
                            $runpro = mysqli_query($con, $proquery);
                            $count = mysqli_num_rows($runpro);
                            $slnumber = 0;

                            // printing data

                            while ($fetchdata = mysqli_fetch_array($runpro)) {
                                $slnumber++;

                            ?>
                                <tr>
                                    <th scope="row"><?php echo $slnumber; ?></th>
                                    <td><?php echo $fetchdata['category']; ?></td>
                                    <td><?php echo $fetchdata['proName']; ?></td>
                                    <td><?php echo $fetchdata['img']; ?></td>
                                    <td><?php echo $fetchdata['des']; ?></td>
                                    <td><a href="pages/samples/pro_edit.php?id=<?php echo $fetchdata['id'] ?>"><i class="mdi mdi-square-edit-outline"></i></a></td>
                                    <td><a href="pages/samples/pro_delete.php?id=<?php echo $fetchdata['id'] ?>"><i class="mdi mdi-delete"></i></a></td>
                                    <td><?php echo $fetchdata['time']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © kgp.com 2021</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>