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
                <div class="content-wrapper" style="height: 400px;overflow-x: scroll;">
                    <?php

                    require_once('pages/samples/config.php');
                    if (isset($_REQUEST['added'])) {
                        echo '
                    <div class="alert alert-success" role="alert">
                    Company Added Successfully!
                    </div>
                    ';
                    }
                    if (isset($_REQUEST['updeted'])) {
                        echo '
                    <div class="alert alert-primary" role="alert">
                    Company Update Successfully!
                    </div>
                    ';
                    }
                    if (isset($_REQUEST['delete'])) {
                        echo '
                    <div class="alert alert-primary" role="danger">
                    Company Deleted!
                    </div>
                    ';
                    }
                    ?>


                    <form action="" method="post">
                        <div class="row mb-3">
                            <div class="col searrchdata">
                                <input type="text" class="form-control searchcheck" name="SearchData" placeholder="Search ">
                                <h2 class="dorpdown"><i class="mdi mdi-arrow-down"></i></h2>
                                <div class="prochecked">
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="White Kidney" class="form-check-input"> White Kidney</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Dark red Kidney" class="form-check-input"> Dark red Kidney </label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Light Red Kidney" class="form-check-input"> Light Red Kidney</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Great Northren" class="form-check-input"> Great Northren</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Small Red" class="form-check-input"> Small Red</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Faba" class="form-check-input"> Faba</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Faba" class="form-check-input"> Split Faba</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Black" class="form-check-input"> Black</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Black" class="form-check-input"> Split Black</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Navey" class="form-check-input"> Navey</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Navey" class="form-check-input"> Split Navey</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Pinto" class="form-check-input"> Pinto</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Pinto" class="form-check-input"> Split Pinto</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Black Matpe" class="form-check-input"> Black Matpe</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Mung Dal" class="form-check-input"> Mung Dal</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Mung bean" class="form-check-input"> Mung bean</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Soybean" class="form-check-input"> Soybean</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chick Peas" class="form-check-input"> Chick Peas</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chick Peas Kabuli 10mm" class="form-check-input"> Chick Peas Kabuli 10mm</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chick Peas Kabuli 9mm" class="form-check-input"> Chick Peas Kabuli 9mm</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chick Peas Kabuli 8mm" class="form-check-input"> Chick Peas Kabuli 8mm</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Chana Del" class="form-check-input"> Chana Del</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Cranberry" class="form-check-input"> Cranberry</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Oats" class="form-check-input"> Oats</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Barley" class="form-check-input"> Barley</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Feed Barley" class="form-check-input"> Feed Barley</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Rye" class="form-check-input"> Rye</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Durum Wheat" class="form-check-input"> Durum Wheat</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Wheat" class="form-check-input"> Wheat</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Red Millet" class="form-check-input"> Red Millet</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="White Millet" class="form-check-input"> White Millet</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Oat Groat" class="form-check-input"> Oat Groat</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Laird No 1" class="form-check-input"> Laird No 1</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Laird No 2" class="form-check-input"> Laird No 2</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Eston" class="form-check-input"> Eston</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Crimson" class="form-check-input"> Crimson</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Red" class="form-check-input"> Red</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Red" class="form-check-input"> Split Red</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="French" class="form-check-input"> French</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Green" class="form-check-input"> Green</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Green" class="form-check-input"> Split Green</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Richlea" class="form-check-input"> Richlea</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Canola" class="form-check-input"> Canola</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Brown Flax" class="form-check-input"> Brown Flax</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Yellow Flax" class="form-check-input"> Yellow Flax</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Golden Flax" class="form-check-input"> Golden Flax</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Yellow Mustard" class="form-check-input"> Yellow Mustard</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Brown Mustard" class="form-check-input"> Brown Mustard</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Hemp Seed" class="form-check-input"> Hemp Seed</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Sunflower Seed" class="form-check-input"> Sunflower Seed</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Coriander Seed" class="form-check-input"> Coriander Seed</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Rape Seed" class="form-check-input"> Rape Seed</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Sesame Seed" class="form-check-input"> Sesame Seed</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Canary Seed" class="form-check-input"> Canary Seed</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Niger Seed" class="form-check-input"> Niger Seed</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Oriental Mustard" class="form-check-input"> Oriental Mustard</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Green" class="form-check-input"> Green</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Green" class="form-check-input"> Split Green</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Yellow" class="form-check-input"> Yellow</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Split Yellow" class="form-check-input"> Split Yellow</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Marrowfat" class="form-check-input"> Marrowfat</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Pigeon" class="form-check-input"> Pigeon</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Maple" class="form-check-input"> Maple</label>
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label"><input type="checkbox" name="CheckBoxes[]" value="Yellow Corn" class="form-check-input"> Yellow Corn</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="SearchcompanyName" placeholder="Company name">
                            </div>
                            <div class="from-inline">
                                <select class="custom-select my-1 mr-sm-2" name="buyerORsuppliyer" id="inlineFormCustomSelectPref">
                                    <option value="" selected>Buyer or supplier</option>
                                    <option value="Buyer">Buyer</option>
                                    <option value="supplier">supplier</option>
                                </select>
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-sm btn-primary" name="search" type="submit">Search</button>
                            </div>
                        </div>
                    </form>

                    <?php

                    if (isset($_REQUEST['search'])) {
                        $SearchData = $_REQUEST['SearchData'];
                        $SearchcompanyName = $_REQUEST['SearchcompanyName'];
                        $buyerORsuppliyer = $_REQUEST['buyerORsuppliyer'];


                    ?>
                        <table class="table table-striped table-bordered  table-hover table-dark ">
                            <thead style="position: sticky; top: -30px; background: #191c24;">
                                <tr>
                                    <th scope="col">
                                        <input type="checkbox" name="allselect" id="" class="checkAll">
                                    </th>
                                    <th scope="col">Sl.No</th>
                                    <th scope="col">CONACT NAME</th>
                                    <th scope="col">COMPANY NAMES</th>
                                    <th scope="col">Buyer Or Supplier</th>
                                    <th scope="col">Product's</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                    <th scope="col">Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // get User data
                                $companyquery = "SELECT * FROM `subproduct` WHERE `buyerORsuppliyer` LIKE '%$buyerORsuppliyer%' AND `data` LIKE '%$SearchData%' AND `companyName` LIKE '%$SearchcompanyName%' ";
                                $runcompany = mysqli_query($con, $companyquery);
                                $count = mysqli_num_rows($runcompany);
                                $slnumber = 0;

                                // printing data

                                while ($fetchdata = mysqli_fetch_array($runcompany)) {
                                    $slnumber++;
                                ?>
                                    <tr>
                                        <th scope="row"><input type="checkbox" name="checkedid[]" class="checkboxes" value="<?php echo $fetchdata['id']; ?>" id=""></th>
                                        <th scope="row"><?php echo $slnumber; ?></th>
                                        <td><?php echo $fetchdata['contactName']; ?></td>
                                        <td><?php echo $fetchdata['companyName']; ?></td>
                                        <td><?php echo $fetchdata['buyerORsuppliyer']; ?></td>
                                        <td><?php echo $fetchdata['data']; ?></td>
                                        <td><a href="pages/samples/editsubpro.php?id=<?php echo $fetchdata['id'] ?>&user=<?php echo $id; ?>"><i class="mdi mdi-square-edit-outline"></i></a></td>
                                        <td><a href="pages/samples/subproductdelete.php?id=<?php echo $fetchdata['id'] ?>&user=<?php echo $id; ?> "><i class="mdi mdi-delete"></i></a></td>
                                        <td><?php echo $fetchdata['time']; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    <?php

                    } else {

                    ?>
                        <table class="table table-striped table-bordered  table-hover table-dark ">
                            <thead style="position: sticky; top: -30px; background: #191c24;">
                                <tr>
                                    <th scope="col">
                                        <input type="checkbox" name="allselect" id="" class="checkAll">
                                    </th>
                                    <th scope="col">Sl.No</th>
                                    <th scope="col">CONACT NAME</th>
                                    <th scope="col">COMPANY NAMES</th>
                                    <th scope="col">Buyer Or Supplier</th>
                                    <th scope="col">Product's</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                    <th scope="col">Time</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                // get User data
                                $companyquery = "SELECT * FROM `subproduct`";
                                $runcompany = mysqli_query($con, $companyquery);
                                $count = mysqli_num_rows($runcompany);
                                $slnumber = 0;

                                // printing data

                                while ($fetchdata = mysqli_fetch_array($runcompany)) {
                                    $slnumber++;
                                ?>
                                    <tr>
                                        <th scope="row"><input type="checkbox" name="checkedid[]" class="checkboxes" value="<?php echo $fetchdata['id']; ?>" id=""></th>
                                        <th scope="row"><?php echo $slnumber; ?></th>
                                        <td><?php echo $fetchdata['contactName']; ?></td>
                                        <td><?php echo $fetchdata['companyName']; ?></td>
                                        <td><?php echo $fetchdata['buyerORsuppliyer']; ?></td>
                                        <td><?php echo $fetchdata['data']; ?></td>
                                        <td><a href="pages/samples/editsubpro.php?id=<?php echo $fetchdata['id'] ?>&user=<?php echo $id; ?>"><i class="mdi mdi-square-edit-outline"></i></a></td>
                                        <td><a href="pages/samples/subproductdelete.php?id=<?php echo $fetchdata['id'] ?>&user=<?php echo $id; ?>"><i class="mdi mdi-delete"></i></a></td>
                                        <td><?php echo $fetchdata['time']; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    <?php

                    }

                    ?>


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
    <script>
        const checkAll = document.querySelector(".checkAll");
        const checkboxes = document.querySelectorAll(".checkboxes");

        checkAll.addEventListener('click', () => {
            checkboxes.forEach(item => {
                item.checked = true;
            });
            if (checkAll.checked == false) {
                checkboxes.forEach(item => {
                    item.checked = false;
                });
            }
        });

        const arrowbutton = document.querySelector(".dorpdown");
        const prochecked = document.querySelector(".prochecked");
        const searchcheck = document.querySelector(".searchcheck");
        const FormChecked = document.querySelectorAll(".form-check-input");

        arrowbutton.addEventListener("click", function() {
            prochecked.classList.toggle("displayShowHide");
        });


        FormChecked.forEach(item => {
            item.addEventListener("click", function() {
                searchcheck.value = this.value;
            });
        });
    </script>
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