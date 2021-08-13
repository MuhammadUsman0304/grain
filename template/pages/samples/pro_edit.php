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
                        require_once('config.php');


                        if (isset($_REQUEST['false'])) {
                            echo '
              <div class="alert alert-danger" role="alert">
              Email Already Used!
            </div>
              ';
                        }

                        if (isset($_REQUEST['id'])) {
                            $id = $_REQUEST['id'];
                        }

                        $editId = $_REQUEST['id'];


                        // get data for edit 
                        $getQuery = "SELECT * FROM `product` WHERE id='$editId'";
                        $runget = mysqli_query($con, $getQuery);

                        $fetch = mysqli_fetch_array($runget);


                        ?>

                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Add Product</h3>
                            <form action="edit_pro_core.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Select Category</label>
                                    <select class="form-control maincategory" name="maincategory" id="exampleFormControlSelect2">
                                        <option value="beans">Beans</option>
                                        <option value="grains">Grains</option>
                                        <option value="oilseed">Oil Seed</option>
                                        <option value="peas">Peas</option>
                                        <option value="Lentils">Lentils</option>
                                        <option value="corn">Corn</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Select Subategory</label>
                                    <!-- Beans -->
                                    <select style="display: none;" class="form-control beans" name="subcategory" id="exampleFormControlSelect2">
                                        <option value="White Kidney">White Kidney</option>
                                        <option value="Dark red candy">Dark red candy</option>
                                        <option value="Light Red Kidney">Light Red Kidney</option>
                                        <option value="Great Northren">Great Northren</option>
                                        <option value="Small Red Beans">Small Red Beans</option>
                                        <option value="Faba">Faba</option>
                                        <option value="Split Faba">Split Faba</option>
                                        <option value="Black">Black</option>
                                        <option value="Split Black">Split Black</option>
                                        <option value="Navey">Navey</option>
                                        <option value="Split Navey">Split Navey</option>
                                        <option value="Pinto">Pinto</option>
                                        <option value="Split Pinto">Split Pinto</option>
                                        <option value="Black Matpe">Black Matpe</option>
                                        <option value="Mung Dal">Mung Dal</option>
                                        <option value="Mung bean">Mung bean</option>
                                        <option value="Soybean">Soybean</option>
                                        <option value="Chick Peas">Chick Peas</option>
                                    </select>
                                    <!-- grainss -->
                                    <select style="display: none;" class="form-control grains" name="subcategory" id="exampleFormControlSelect2">
                                        <option value="Oats">Oats</option>
                                        <option value="Barley">Barley</option>
                                        <option value="Feed Barley">Feed Barley</option>
                                        <option value="Rye">Rye</option>
                                        <option value="Durum Wheat">Durum Wheat</option>
                                        <option value="Wheat">Wheat</option>
                                        <option value="Red Millet">Red Millet</option>
                                        <option value="White Millet">White Millet</option>
                                        <option value="Oat Groats">Oat Groats</option>
                                    </select>
                                    <!-- Lentils -->
                                    <select style="display: none;" class="form-control lentils" name="subcategory" id="exampleFormControlSelect2">
                                        <option value="Laird No 1">Laird No 1</option>
                                        <option value="Laird No 2">Laird No 2</option>
                                        <option value="Eston">Eston</option>
                                        <option value="Crimson">Crimson</option>
                                        <option value="Red">Red</option>
                                        <option value="Split Red">Split Red</option>
                                        <option value="Red Millet">Red Millet</option>
                                        <option value="French">French</option>
                                        <option value="Green">Green</option>
                                        <option value="Split Green">Split Green</option>
                                    </select>
                                    <!-- Oil Seed -->
                                    <select style="display: none;" class="form-control oilseed" name="subcategory" id="exampleFormControlSelect2">
                                        <option value="Canola">Canola</option>
                                        <option value="Brown Flax">Brown Flax</option>
                                        <option value="Yellow Flax">Yellow Flax</option>
                                        <option value="Golden Flax">Golden Flax</option>
                                        <option value="Yellow Mustard">Yellow Mustard</option>
                                        <option value="Brown Mustard">Brown Mustard</option>
                                        <option value="Hemp Seed">Hemp Seed</option>
                                        <option value="Sunflower Seed">Sunflower Seed</option>
                                        <option value="Coriander Seed">Coriander Seed</option>
                                        <option value="Rape Seed"> Rape Seed</option>
                                        <option value="Sesame Seed"> Sesame Seed</option>
                                        <option value="Canary Seed"> Canary Seed</option>
                                        <option value="Niger Seeds"> Niger Seeds</option>
                                        <option value="Oriental Mustard"> Oriental Mustard</option>
                                    </select>
                                    <!-- Peas -->
                                    <select style="display: none;" class="form-control peas" name="subcategory" id="exampleFormControlSelect2">
                                        <option value="Green">Green</option>
                                        <option value="Spliy Green">Split Green</option>
                                        <option value="Yellow">Yellow </option>
                                        <option value="Split Yellow">Split Yellow</option>
                                        <option value="Marrowfat">Marrowfat</option>
                                        <option value="Pigeon">Pigeon</option>
                                        <option value="Maple">Maple</option>
                                    </select>
                                    <!-- Peas -->
                                    <select style="display: none;" class="form-control corn" name="subcategory" id="exampleFormControlSelect2">
                                        <option value="Yellow Corns">Yellow Corn</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <div class="custom-file">
                                        <input required type="file" name="img" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input require type="text" name="des" placeholder="<?php echo $fetch['des']; ?>" class="form-control p_input">
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">Add</button>
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

    <script>
        const maincategory = document.querySelector('.maincategory');
        const beans = document.querySelector('.beans');
        const grains = document.querySelector('.grains');
        const lentils = document.querySelector('.lentils');
        const oilseed = document.querySelector('.oilseed');
        const peas = document.querySelector('.peas');
        const corn = document.querySelector('.corn');
        maincategory.addEventListener("change", function() {
            if (this.value == 'beans') {
                beans.style.display = 'block';
                grains.style.display = 'none';
                lentils.style.display = 'none';
                oilseed.style.display = 'none';
                peas.style.display = 'none';
                corn.style.display = 'none';
            } else if (this.value == 'grains') {
                beans.style.display = 'none';
                grains.style.display = 'block';
                lentils.style.display = 'none';
                oilseed.style.display = 'none';
                peas.style.display = 'none';
                corn.style.display = 'none';
            } else if (this.value == 'oilseed') {
                beans.style.display = 'none';
                grains.style.display = 'none';
                lentils.style.display = 'none';
                oilseed.style.display = 'block';
                peas.style.display = 'none';
                corn.style.display = 'none';
            } else if (this.value == 'peas') {
                beans.style.display = 'none';
                grains.style.display = 'none';
                lentils.style.display = 'none';
                oilseed.style.display = 'none';
                peas.style.display = 'block';
                corn.style.display = 'none';
            } else if (this.value == 'Lentils') {
                beans.style.display = 'none';
                grains.style.display = 'none';
                lentils.style.display = 'block';
                oilseed.style.display = 'none';
                peas.style.display = 'none';
                corn.style.display = 'none';
            } else if (this.value == 'corn') {
                beans.style.display = 'none';
                grains.style.display = 'none';
                lentils.style.display = 'none';
                oilseed.style.display = 'none';
                peas.style.display = 'none';
                corn.style.display = 'block';
            }

        });
    </script>
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