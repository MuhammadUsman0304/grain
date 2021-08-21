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

            // if (isset($_REQUEST['user'])) {
            //   $user = $_REQUEST['user'];
            // } else {
            //   header("location:login.php");
            // }



            ?>

            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Add Company</h3>
              <form class="forms-sample" method="POST" action="addcompany_core.php">
                <div class="form-group row">
                  <div class="from-inline">
                    <select class="custom-select my-1 mr-sm-2" required name="buyerORsuppliyer" id="inlineFormCustomSelectPref">
                      <option value="" selected>Buyer or supplier</option>
                      <option value="Buyer">Buyer</option>
                      <option value="supplier">supplier</option>
                    </select>
                  </div>
                </div>
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
                  <label for="exampleInputMobile" class="col-sm-3 col-form-label">HEAD QUARTER</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="exampleInputMobile" name="headquater" placeholder="HEAD QUARTER">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputMobile" class="col-sm-3 col-form-label"> EMAIL</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputMobile" name="email" placeholder="EMAIL">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputMobile" class="col-sm-3 col-form-label"> FAX</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="exampleInputMobile" name="fax" placeholder="FAX">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputMobile" class="col-sm-3 col-form-label"> PHONE</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="exampleInputMobile" name="phone" placeholder="Mobile number">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputMobile" class="col-sm-3 col-form-label"> WEB SITE</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="exampleInputMobile" name="website" placeholder="WEB SITE">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Beans</label>
                  <div class="col-sm-9">
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Bog" value="Beans OG" class="form-check-input"> OG</label>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Bnog" value="Beans NOG" class="form-check-input"> NOG</label>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Bcn" value="Beans CN" class="form-check-input"> CN</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Lentils</label>
                  <div class="col-sm-9">
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Log" value="Lentils OG" class="form-check-input"> OG</label>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Lnog" value="Lentils NOG" class="form-check-input"> NOG</label>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Lcn" value="Lentils CN" class="form-check-input"> CN</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Grains</label>
                  <div class="col-sm-9">
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Gog" value="Grains OG" class="form-check-input"> OG</label>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Gnog" value="Grains NOG" class="form-check-input"> NOG</label>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Gcn" value="Grains CN" class="form-check-input"> CN</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Oilseed</label>
                  <div class="col-sm-9">
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Oog" value="Oilseed OG" class="form-check-input"> OG</label>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Onog" value="Oilseed NOG" class="form-check-input"> NOG</label>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Ocn" value="Oilseed CN" class="form-check-input"> CN</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Peas</label>
                  <div class="col-sm-9">
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Pog" value="Peas OG" class="form-check-input"> OG</label>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Pnog" value="Peas NOG" class="form-check-input"> NOG</label>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Pcn" value="Peas CN" class="form-check-input"> CN</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Corn</label>
                  <div class="col-sm-9">
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Cog" value="Corn OG" class="form-check-input"> OG</label>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Cnog" value="Corn NOG" class="form-check-input"> NOG</label>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label"><input type="checkbox" name="Ccn" value="Corn CN" class="form-check-input"> CN</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputMobile" class="col-sm-3 col-form-label">Notes</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="exampleInputMobile" name="notes" placeholder="Notes">
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