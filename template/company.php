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
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/logo.png" />
    <link rel="stylesheet" href="extensions/sticky-header/bootstrap-table-sticky-header.css">
    <script src="extensions/sticky-header/bootstrap-table-sticky-header.js"></script>
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

            <div class="main-panel  ">
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
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Search" name="Searchword">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="SearchcompanyName" placeholder="Company name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="Searchemail" placeholder="Email">
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
                        $searchword = $_REQUEST['Searchword'];
                        $SearchcompanyName = $_REQUEST['SearchcompanyName'];
                        $Searchemail = $_REQUEST['Searchemail'];
                        $buyerORsuppliyer = $_REQUEST['buyerORsuppliyer'];

                    ?>

                        <table class="table table-striped table-bordered  table-hover table-dark  ">
                            <thead style="position: sticky;top: -30px;background: #191c24;">
                                <form action="sendmailall.php" method="POST">
                                    <tr>
                                        <th scope="col">
                                            <input type="checkbox" name="allselect" id="" class="checkAll">
                                        </th>
                                        <th scope="col">Sl.No</th>
                                        <th scope="col">Buyer or supplier</th>
                                        <th scope="col">Send Mail</th>
                                        <th scope="col">CONACT NAME</th>
                                        <th scope="col">COMPANY NAMES</th>
                                        <th scope="col">HEAD QUARTER</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">FAX</th>
                                        <th scope="col">PHONE </th>
                                        <th scope="col">WEB SITE</th>
                                        <th scope="col" colspan="3">Beans</th>
                                        <th scope="col" colspan="3">Lentils</th>
                                        <th scope="col" colspan="3">Grains</th>
                                        <th scope="col" colspan="3">Oilseed</th>
                                        <th scope="col" colspan="3">Peas</th>
                                        <th scope="col" colspan="3">Corn</th>
                                        <th scope="col">Notes</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col">Added by</th>
                                        <th scope="col">Time</th>
                                    </tr>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"><input type="submit" name="allEmail" value="Send selected" class="btn btn-success" id=""></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"> </th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">OG</th>
                                        <th scope="col">NOG</th>
                                        <th scope="col">CN</th>
                                        <th scope="col">OG</th>
                                        <th scope="col">NOG</th>
                                        <th scope="col">CN</th>
                                        <th scope="col">OG</th>
                                        <th scope="col">NOG</th>
                                        <th scope="col">CN</th>
                                        <th scope="col">OG</th>
                                        <th scope="col">NOG</th>
                                        <th scope="col">CN</th>
                                        <th scope="col">OG</th>
                                        <th scope="col">NOG</th>
                                        <th scope="col">CN</th>
                                        <th scope="col">OG</th>
                                        <th scope="col">NOG</th>
                                        <th scope="col">CN</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                            </thead>
                            <tbody>
                                <?php
                                // get User data
                                if ($searchword == "Beans OG") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Bog` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } elseif ($searchword == "Beans NOG") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Bnog` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } elseif ($searchword == "Beans CN") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Bcn` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } elseif ($searchword == "Lentils OG") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Log` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } elseif ($searchword == "Lentils NOG") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Lnog` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } elseif ($searchword == "Lentils CN") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Lcn` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } elseif ($searchword == "Grains OG") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Gog` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } elseif ($searchword == "Grains NOG") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Gnog` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } elseif ($searchword == "Grains CN") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Gcn` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } elseif ($searchword == "Oilseed OG") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Oog` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } elseif ($searchword == "Oilseed NOG") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Onog` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } elseif ($searchword == "Oilseed CN") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Ocn` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } elseif ($searchword == "Peas OG") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Pog` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } elseif ($searchword == "Peas NOG") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Pnog` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } elseif ($searchword == "Peas CN") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Pcn` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } elseif ($searchword == "Corn OG") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Cog` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } elseif ($searchword == "Corn NOG") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Cnog` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } elseif ($searchword == "Corn CN") {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'  AND `Ccns` LIKE '%$searchword%'  AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                } else {
                                    $companyquery = "SELECT * FROM `company` WHERE `BuyerOrsupplier` LIKE '%$buyerORsuppliyer%'   AND `companyName` LIKE '%$SearchcompanyName%' AND `email` LIKE '%$Searchemail' ";
                                }

                                $runcompany = mysqli_query($con, $companyquery);
                                $count = mysqli_num_rows($runcompany);
                                $slnumber = 0;

                                // printing data

                                while ($fetchdata = mysqli_fetch_array($runcompany)) {
                                    $slnumber++;
                                    $currentID = $fetchdata['id'];
                                ?>
                                    <tr>
                                        <th scope="row"><input type="checkbox" name="checkedid[]" class="checkboxes" value="<?php echo $fetchdata['id']; ?>" id=""></th>
                                        <th scope="row"><?php echo $slnumber; ?></th>
                                        <td><?php echo $fetchdata['BuyerOrsupplier']; ?></td>
                                        <td><a href="sendmail.php?id=<?php echo $currentID; ?>"><i class="mdi mdi-arrow-top-right"></i></a></td>
                                        <td><?php echo $fetchdata['contactName']; ?></td>
                                        <td><?php echo $fetchdata['companyName']; ?></td>
                                        <td><?php echo $fetchdata['headquater']; ?></td>
                                        <td><?php echo $fetchdata['email']; ?></td>
                                        <td><?php echo $fetchdata['fax']; ?></td>
                                        <td><?php echo $fetchdata['phone']; ?></td>
                                        <td><?php echo $fetchdata['website']; ?></td>
                                        <td><?php if ($fetchdata['Bog'] == 'Beans OG') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php if ($fetchdata['Bnog'] == 'Beans NOG') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php if ($fetchdata['Bcn'] == 'Beans CN') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php if ($fetchdata['Log'] == 'Lentils OG') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php if ($fetchdata['Lnog'] == 'Lentils NOG') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php if ($fetchdata['Lcn'] == 'Lentils CN') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php if ($fetchdata['Gog'] == 'Grains OG') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php if ($fetchdata['Gnog'] == 'Grains NOG') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php if ($fetchdata['Gcn'] == 'Grains CN') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php if ($fetchdata['Oog'] == 'Oilseed OG') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php if ($fetchdata['Onog'] == 'Oilseed NOG') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php if ($fetchdata['Ocn'] == 'Oilseed CN') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php if ($fetchdata['Pog'] == 'Peas OG') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php if ($fetchdata['Pnog'] == 'Peas NOG') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php if ($fetchdata['Pcn'] == 'Peas CN') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php if ($fetchdata['Cog'] == 'Corn OG') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php if ($fetchdata['Cnog'] == 'Corn NOG') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php if ($fetchdata['Ccns'] == 'Corn CN') {
                                                echo "Yes";
                                            } else {
                                                echo "No";
                                            } ?></td>
                                        <td><?php echo $fetchdata['notes']; ?></td>
                                        <td><a href="pages/samples/company_edit.php?id=<?php echo $fetchdata['id'] ?>&user=<?php echo $id; ?>"><i class="mdi mdi-square-edit-outline"></i></a></td>
                                        <td><a href="pages/samples/company_delete.php?id=<?php echo $fetchdata['id'] ?>&user=<?php echo $id; ?>"><i class="mdi mdi-delete"></i></a></td>
                                        <td> <?php echo $fetchdata['addedBy']; ?></td>
                                        <td><?php echo $fetchdata['Time']; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            </form>
                        </table>
                    <?php

                    } else {

                    ?>
                        <table class="table table-striped table-bordered  table-hover table-dark ">

                            <form action="sendmailall.php" method="POST">
                                <thead style="position: sticky; top: -30px; background: #191c24;">
                                    <tr>
                                        <th scope="col"><input type="checkbox" name="" id="checkAll" class="checkAll"></th>
                                        <th scope="col">Sl.No</th>
                                        <th scope="col">Buyer or supplier</th>
                                        <th scope="col">Send Mail</th>
                                        <th scope="col">CONACT NAME</th>
                                        <th scope="col">COMPANY NAMES</th>
                                        <th scope="col">HEAD QUARTER</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">FAX</th>
                                        <th scope="col">PHONE </th>
                                        <th scope="col">WEB SITE</th>
                                        <th scope="col" colspan="3">Beans</th>
                                        <th scope="col" colspan="3">Lentils</th>
                                        <th scope="col" colspan="3">Grains</th>
                                        <th scope="col" colspan="3">Oilseed</th>
                                        <th scope="col" colspan="3">Peas</th>
                                        <th scope="col" colspan="3">Corn</th>
                                        <th scope="col">Notes</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col">Added by</th>
                                        <th scope="col">Time</th>
                                    </tr>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"><input type="submit" name="allEmail" value="Send selected" class="btn btn-success" id=""></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"> </th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">OG</th>
                                        <th scope="col">NOG</th>
                                        <th scope="col">CN</th>
                                        <th scope="col">OG</th>
                                        <th scope="col">NOG</th>
                                        <th scope="col">CN</th>
                                        <th scope="col">OG</th>
                                        <th scope="col">NOG</th>
                                        <th scope="col">CN</th>
                                        <th scope="col">OG</th>
                                        <th scope="col">NOG</th>
                                        <th scope="col">CN</th>
                                        <th scope="col">OG</th>
                                        <th scope="col">NOG</th>
                                        <th scope="col">CN</th>
                                        <th scope="col">OG</th>
                                        <th scope="col">NOG</th>
                                        <th scope="col">CN</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // get User data
                                    $companyquery = "SELECT * FROM `company`";
                                    $runcompany = mysqli_query($con, $companyquery);
                                    $count = mysqli_num_rows($runcompany);
                                    $slnumber = 0;

                                    // printing data

                                    while ($fetchdata = mysqli_fetch_array($runcompany)) {
                                        $slnumber++;
                                        $currentID = $fetchdata['id'];

                                    ?>
                                        <tr>
                                            <th scope="row"><input type="checkbox" name="checkedid[]" class="checkboxes" value="<?php echo $fetchdata['id']; ?>" id=""></th>
                                            <th scope="row"><?php echo $slnumber; ?></th>
                                            <td><?php echo $fetchdata['BuyerOrsupplier']; ?></td>
                                            <td><a href="sendmail.php?id=<?php echo $currentID; ?>"><i class="mdi mdi-arrow-top-right"></i></span></a></td>
                                            <td><?php echo $fetchdata['contactName']; ?></td>
                                            <td><?php echo $fetchdata['companyName']; ?></td>
                                            <td><?php echo $fetchdata['headquater']; ?></td>
                                            <td><?php echo $fetchdata['email']; ?></td>
                                            <td><?php echo $fetchdata['fax']; ?></td>
                                            <td><?php echo $fetchdata['phone']; ?></td>
                                            <td><?php echo $fetchdata['website']; ?></td>
                                            <td><?php if ($fetchdata['Bog'] == 'Beans OG') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php if ($fetchdata['Bnog'] == 'Beans NOG') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php if ($fetchdata['Bcn'] == 'Beans CN') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php if ($fetchdata['Log'] == 'Lentils OG') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php if ($fetchdata['Lnog'] == 'Lentils NOG') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php if ($fetchdata['Lcn'] == 'Lentils CN') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php if ($fetchdata['Gog'] == 'Grains OG') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php if ($fetchdata['Gnog'] == 'Grains NOG') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php if ($fetchdata['Gcn'] == 'Grains CN') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php if ($fetchdata['Oog'] == 'Oilseed OG') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php if ($fetchdata['Onog'] == 'Oilseed NOG') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php if ($fetchdata['Ocn'] == 'Oilseed CN') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php if ($fetchdata['Pog'] == 'Peas OG') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php if ($fetchdata['Pnog'] == 'Peas NOG') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php if ($fetchdata['Pcn'] == 'Peas CN') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php if ($fetchdata['Cog'] == 'Corn OG') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php if ($fetchdata['Cnog'] == 'Corn NOG') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php if ($fetchdata['Ccns'] == 'Corn CN') {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?></td>
                                            <td><?php echo $fetchdata['notes']; ?></td>
                                            <td><a href="pages/samples/company_edit.php?id=<?php echo $fetchdata['id'] ?>&user=<?php echo $id; ?>"><i class="mdi mdi-square-edit-outline"></i></a></td>
                                            <td><a href="pages/samples/company_delete.php?id=<?php echo $fetchdata['id'] ?>&user=<?php echo $id; ?>"><i class="mdi mdi-delete"></i></a></td>
                                            <td> <?php echo $fetchdata['addedBy']; ?></td>
                                            <td><?php echo $fetchdata['Time']; ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </form>
                        </table>

                    <?php

                    }

                    ?>

                </div>

                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer ">
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