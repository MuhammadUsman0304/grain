<?php 
session_start();
require_once 'template/pages/samples/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KGP || KRUZ GRAINS & PULSES</title>
    <!-- ================= Favicon ================= -->
    <link rel="shortcut icon" href="Image/logo.png" type="image/x-icon">
    <!-- ================= Custom Css ================= -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/productstyle.css">
</head>

<body>
    <!-- ================= Navbar ================= -->
    <section id="navbar">
        <!-- Headline -->
        <div class="headline">
            <div class="brandname">
              <div class="login">
                <?php if (isset($_SESSION['username'])) {
                    echo '<h3><a href="user-dash/dashboard.php"><i class="fa fa-home"></i> Dashboard</a></h3>';
                }else{
                    echo '<h3><a href="register.php"><i class="fa fa-user-plus"></i> Register</a> |
                   <a href="login.php"><i class="fa fa-sign-in"></i> Login</a></h3>';
                } ?>
                  
              </div>
            </div>
             
            <div class="middle">
                <h1>KRUZ GRAINS & PULSES</h1>
            </div>
            <div class="call">
                <h2><i class="fa fa-phone"></i> 613-799-2882</h2>
            </div>

        </div>
        <div class="logo">
            <p class="pleft">Canadian grown crops </p>
            <a href="index.php"><img src="image/logo.png" alt=""></a>
            <p class="pright">By farmers who care</p>
        </div>
        <nav class="nav">
            <div class="hamburger" style="top:50%;">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="navlinks">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="careers.html">CAREERS</a>
                </li>
                <li class="subMenu">
                    <a href="pro.php">PRODUCTS  </a>
                </li>
                <li>
                    <a href="about.html">About Us</a>
                </li>
                <li>
                    <a href="expertise.html">Expertise</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </nav>
    </section>
    <!-- ========================= PRODUCTS WEB =================== -->
    <section id="Products" class="web">
        <div class="products productpage" style="background-image: url('image/beans.jpg');background-size: cover;height: 400px;margin-top: 0px; ">
            <div class="linner productpagelinner" style="height: 400px;overflow: hidden;">
                <div class="pro-title">
                    <h1 style="color: white;">PRODUCTS</h1>
                </div>
                <div class="productcat-sidebar">
                    <ul>
                        <?php 
                         // fetching category
                         $qry = "SELECT * FROM `categories`";
                         $res = mysqli_query($con, $qry);
                         if ($crow = mysqli_num_rows($res)) {
                             while ($cdata = mysqli_fetch_assoc($res)) {
                                $_SESSION['cate_name'] = $cdata['CategoryName'];
                        ?>
                         <li class="pro-side productstopActive"><?php echo $_SESSION['cate_name']; ?></li>
                         <?php
                             }
                         }else{
                            echo 'No Category Found';
                         }
                         ?>
                        <!-- <li class="pro-side productstopActive">Beans</li>
                        <li class="pro-side">Grains</li>
                        <li class="pro-side">Lentils</li>
                        <li class="pro-side">Oil Seed</li>
                        <li class="pro-side">Peas</li>
                        <li class="pro-side">Corn</li> -->
                    </ul>
                </div>

            </div>
        </div>
        <div class="productcat-topbar productpagetopbar">
            <!-- Beans -->
            <div class="productstop beans productstopActive">
                <ul>
                    <?php 
                     $query = "SELECT * FROM `site_front_product` join categories on categories.cate_id = site_front_product.cate_id WHERE categories.cate_id = 3";
                     $result = mysqli_query($con, $query);
                     if ($row = mysqli_num_rows($result)>0) {
                         while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <li class="sinprodet sinprodetactive">
                        <div class="SingelProductsCategory productItem">
                            <figure>
                                <img class="figureimg productItemimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                                <figcaption>
                                    <h5 class="gallary-title productItemh5" style="font-size: 30px;margin-top: 0px;"><?php echo $data['product_name']; ?></h5>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <!-- model -->
                    <div id="openModal-about" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <div class="modaldeatiles">
                    <div class="ima">
                        <img class="figureimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                    </div>
                    <div class="modaldes">
                        <h2><?php echo $data['product_name']; ?></h2>
                        <p><?php echo $data['Product_desc']; ?></p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup <?php echo $data['servering_size']; ?></h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories <?php echo $data['calories']; ?> <span>Calories from Fat <?php echo $data['calories_from_fat']; ?></span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> <?php echo $data['total_fat_per_gram']; ?> <span><?php echo $data['total_fat_per_gram_percent']; ?></span></p>
                            <p>Saturated Fat <?php echo $data['saturated_fat_per_gram']; ?><span><?php echo $data['saturated_fat_per_gram_percent']; ?></span></p>
                            <p>Trans Fat <?php echo $data['trans_fat_per_gram']; ?><span><?php echo $data['trans_fat_per_gram_percent']; ?></span></p>
                            <p><b>Sodium</b> <?php echo $data['sodium_fat_per_gram']; ?><span><?php echo $data['sodium_fat_per_gram_percent']; ?></span></p>
                            <p><b>Total Carbohydrates</b> <?php echo $data['carbohydrates_per_gram']; ?><span><?php echo $data['carbohydrates_per_gram_percent']; ?></span></p>
                            <p>Dietary Fiber <?php echo $data['dietry_fiber_per_gram']; ?><span><?php echo $data['dietry_fiber_per_gram_percent']; ?></span></p>
                            <p>Sugars <?php echo $data['protien_per_gram']; ?><span>45%</span></p>
                            <p><b>Protein</b> <?php echo $data['protien_per_gram']; ?><span><?php echo $data['protien_per_gram_percent']; ?></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span><?php echo $data['vitamin_a_percent']; ?></span> || Calcium <span><?php echo $data['calcium_a_percent']; ?></span></h3>
                            <h3>Vitamin B <span><?php echo $data['vitamin_b_percent']; ?></span> || Iron <span><?php echo $data['iron_a_percent']; ?></span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <?php
                         }
                     }else{
                        echo 'No prouct Found';
                     }
                     ?>
                </ul>
            </div>
            <!-- Grains -->
            <div class="productstop Grains">
                <ul>
                    <?php 
                     $query = "SELECT * FROM `site_front_product` join categories on categories.cate_id = site_front_product.cate_id WHERE categories.cate_id = 4";
                     $result = mysqli_query($con, $query);
                     if ($row = mysqli_num_rows($result)>0) {
                         while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <li class="sinprodet sinprodetactive">
                        <div class="SingelProductsCategory productItem">
                            <figure>
                                <img class="figureimg productItemimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                                <figcaption>
                                    <h5 class="gallary-title productItemh5" style="font-size: 30px;margin-top: 0px;"><?php echo $data['product_name']; ?></h5>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <!-- model -->
                    <div id="openModal-about" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <div class="modaldeatiles">
                    <div class="ima">
                        <img class="figureimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                    </div>
                    <div class="modaldes">
                        <h2><?php echo $data['product_name']; ?></h2>
                        <p><?php echo $data['Product_desc']; ?></p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup <?php echo $data['servering_size']; ?></h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories <?php echo $data['calories']; ?> <span>Calories from Fat <?php echo $data['calories_from_fat']; ?></span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> <?php echo $data['total_fat_per_gram']; ?> <span><?php echo $data['total_fat_per_gram_percent']; ?></span></p>
                            <p>Saturated Fat <?php echo $data['saturated_fat_per_gram']; ?><span><?php echo $data['saturated_fat_per_gram_percent']; ?></span></p>
                            <p>Trans Fat <?php echo $data['trans_fat_per_gram']; ?><span><?php echo $data['trans_fat_per_gram_percent']; ?></span></p>
                            <p><b>Sodium</b> <?php echo $data['sodium_fat_per_gram']; ?><span><?php echo $data['sodium_fat_per_gram_percent']; ?></span></p>
                            <p><b>Total Carbohydrates</b> <?php echo $data['carbohydrates_per_gram']; ?><span><?php echo $data['carbohydrates_per_gram_percent']; ?></span></p>
                            <p>Dietary Fiber <?php echo $data['dietry_fiber_per_gram']; ?><span><?php echo $data['dietry_fiber_per_gram_percent']; ?></span></p>
                            <p>Sugars <?php echo $data['protien_per_gram']; ?><span>45%</span></p>
                            <p><b>Protein</b> <?php echo $data['protien_per_gram']; ?><span><?php echo $data['protien_per_gram_percent']; ?></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span><?php echo $data['vitamin_a_percent']; ?></span> || Calcium <span><?php echo $data['calcium_a_percent']; ?></span></h3>
                            <h3>Vitamin B <span><?php echo $data['vitamin_b_percent']; ?></span> || Iron <span><?php echo $data['iron_a_percent']; ?></span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <?php
                         }
                     }else{
                        echo 'No prouct Found';
                     }
                     ?>
                </ul>
            </div>
            <!-- Lentis -->
            <div class="productstop Lentils">
                <ul>
                    <?php 
                     $query = "SELECT * FROM `site_front_product` join categories on categories.cate_id = site_front_product.cate_id WHERE categories.cate_id = 5";
                     $result = mysqli_query($con, $query);
                     if ($row = mysqli_num_rows($result)>0) {
                         while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <li class="sinprodet sinprodetactive">
                        <div class="SingelProductsCategory productItem">
                            <figure>
                                <img class="figureimg productItemimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                                <figcaption>
                                    <h5 class="gallary-title productItemh5" style="font-size: 30px;margin-top: 0px;"><?php echo $data['product_name']; ?></h5>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <!-- model -->
                    <div id="openModal-about" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <div class="modaldeatiles">
                    <div class="ima">
                        <img class="figureimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                    </div>
                    <div class="modaldes">
                        <h2><?php echo $data['product_name']; ?></h2>
                        <p><?php echo $data['Product_desc']; ?></p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup <?php echo $data['servering_size']; ?></h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories <?php echo $data['calories']; ?> <span>Calories from Fat <?php echo $data['calories_from_fat']; ?></span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> <?php echo $data['total_fat_per_gram']; ?> <span><?php echo $data['total_fat_per_gram_percent']; ?></span></p>
                            <p>Saturated Fat <?php echo $data['saturated_fat_per_gram']; ?><span><?php echo $data['saturated_fat_per_gram_percent']; ?></span></p>
                            <p>Trans Fat <?php echo $data['trans_fat_per_gram']; ?><span><?php echo $data['trans_fat_per_gram_percent']; ?></span></p>
                            <p><b>Sodium</b> <?php echo $data['sodium_fat_per_gram']; ?><span><?php echo $data['sodium_fat_per_gram_percent']; ?></span></p>
                            <p><b>Total Carbohydrates</b> <?php echo $data['carbohydrates_per_gram']; ?><span><?php echo $data['carbohydrates_per_gram_percent']; ?></span></p>
                            <p>Dietary Fiber <?php echo $data['dietry_fiber_per_gram']; ?><span><?php echo $data['dietry_fiber_per_gram_percent']; ?></span></p>
                            <p>Sugars <?php echo $data['protien_per_gram']; ?><span>45%</span></p>
                            <p><b>Protein</b> <?php echo $data['protien_per_gram']; ?><span><?php echo $data['protien_per_gram_percent']; ?></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span><?php echo $data['vitamin_a_percent']; ?></span> || Calcium <span><?php echo $data['calcium_a_percent']; ?></span></h3>
                            <h3>Vitamin B <span><?php echo $data['vitamin_b_percent']; ?></span> || Iron <span><?php echo $data['iron_a_percent']; ?></span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <?php
                         }
                     }else{
                        echo 'No prouct Found';
                     }
                     ?>
                </ul>
            </div>
            <!-- Oill seed -->
            <div class="productstop  OilSeed">
                <ul>
                    <?php 
                     $query = "SELECT * FROM `site_front_product` join categories on categories.cate_id = site_front_product.cate_id WHERE categories.cate_id = 6";
                     $result = mysqli_query($con, $query);
                     if ($row = mysqli_num_rows($result)>0) {
                         while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <li class="sinprodet sinprodetactive">
                        <div class="SingelProductsCategory productItem">
                            <figure>
                                <img class="figureimg productItemimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                                <figcaption>
                                    <h5 class="gallary-title productItemh5" style="font-size: 30px;margin-top: 0px;"><?php echo $data['product_name']; ?></h5>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <!-- model -->
                    <div id="openModal-about" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <div class="modaldeatiles">
                    <div class="ima">
                        <img class="figureimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                    </div>
                    <div class="modaldes">
                        <h2><?php echo $data['product_name']; ?></h2>
                        <p><?php echo $data['Product_desc']; ?></p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup <?php echo $data['servering_size']; ?></h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories <?php echo $data['calories']; ?> <span>Calories from Fat <?php echo $data['calories_from_fat']; ?></span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> <?php echo $data['total_fat_per_gram']; ?> <span><?php echo $data['total_fat_per_gram_percent']; ?></span></p>
                            <p>Saturated Fat <?php echo $data['saturated_fat_per_gram']; ?><span><?php echo $data['saturated_fat_per_gram_percent']; ?></span></p>
                            <p>Trans Fat <?php echo $data['trans_fat_per_gram']; ?><span><?php echo $data['trans_fat_per_gram_percent']; ?></span></p>
                            <p><b>Sodium</b> <?php echo $data['sodium_fat_per_gram']; ?><span><?php echo $data['sodium_fat_per_gram_percent']; ?></span></p>
                            <p><b>Total Carbohydrates</b> <?php echo $data['carbohydrates_per_gram']; ?><span><?php echo $data['carbohydrates_per_gram_percent']; ?></span></p>
                            <p>Dietary Fiber <?php echo $data['dietry_fiber_per_gram']; ?><span><?php echo $data['dietry_fiber_per_gram_percent']; ?></span></p>
                            <p>Sugars <?php echo $data['protien_per_gram']; ?><span>45%</span></p>
                            <p><b>Protein</b> <?php echo $data['protien_per_gram']; ?><span><?php echo $data['protien_per_gram_percent']; ?></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span><?php echo $data['vitamin_a_percent']; ?></span> || Calcium <span><?php echo $data['calcium_a_percent']; ?></span></h3>
                            <h3>Vitamin B <span><?php echo $data['vitamin_b_percent']; ?></span> || Iron <span><?php echo $data['iron_a_percent']; ?></span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <?php
                         }
                     }else{
                        echo 'No prouct Found';
                     }
                     ?>
                </ul>
            </div>
            <!-- Peas -->
            <div class="productstop Peas">
                <ul>
                    <?php 
                     $query = "SELECT * FROM `site_front_product` join categories on categories.cate_id = site_front_product.cate_id WHERE categories.cate_id = 7";
                     $result = mysqli_query($con, $query);
                     if ($row = mysqli_num_rows($result)>0) {
                         while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <li class="sinprodet sinprodetactive">
                        <div class="SingelProductsCategory productItem">
                            <figure>
                                <img class="figureimg productItemimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                                <figcaption>
                                    <h5 class="gallary-title productItemh5" style="font-size: 30px;margin-top: 0px;"><?php echo $data['product_name']; ?></h5>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <!-- model -->
                    <div id="openModal-about" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <div class="modaldeatiles">
                    <div class="ima">
                        <img class="figureimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                    </div>
                    <div class="modaldes">
                        <h2><?php echo $data['product_name']; ?></h2>
                        <p><?php echo $data['Product_desc']; ?></p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup <?php echo $data['servering_size']; ?></h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories <?php echo $data['calories']; ?> <span>Calories from Fat <?php echo $data['calories_from_fat']; ?></span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> <?php echo $data['total_fat_per_gram']; ?> <span><?php echo $data['total_fat_per_gram_percent']; ?></span></p>
                            <p>Saturated Fat <?php echo $data['saturated_fat_per_gram']; ?><span><?php echo $data['saturated_fat_per_gram_percent']; ?></span></p>
                            <p>Trans Fat <?php echo $data['trans_fat_per_gram']; ?><span><?php echo $data['trans_fat_per_gram_percent']; ?></span></p>
                            <p><b>Sodium</b> <?php echo $data['sodium_fat_per_gram']; ?><span><?php echo $data['sodium_fat_per_gram_percent']; ?></span></p>
                            <p><b>Total Carbohydrates</b> <?php echo $data['carbohydrates_per_gram']; ?><span><?php echo $data['carbohydrates_per_gram_percent']; ?></span></p>
                            <p>Dietary Fiber <?php echo $data['dietry_fiber_per_gram']; ?><span><?php echo $data['dietry_fiber_per_gram_percent']; ?></span></p>
                            <p>Sugars <?php echo $data['protien_per_gram']; ?><span>45%</span></p>
                            <p><b>Protein</b> <?php echo $data['protien_per_gram']; ?><span><?php echo $data['protien_per_gram_percent']; ?></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span><?php echo $data['vitamin_a_percent']; ?></span> || Calcium <span><?php echo $data['calcium_a_percent']; ?></span></h3>
                            <h3>Vitamin B <span><?php echo $data['vitamin_b_percent']; ?></span> || Iron <span><?php echo $data['iron_a_percent']; ?></span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <?php
                         }
                     }else{
                        echo 'No prouct Found';
                     }
                     ?>
                </ul>
            </div>
            <!-- Corn -->
            <div class="productstop Corn">
                <ul>
                    <?php 
                     $query = "SELECT * FROM `site_front_product` join categories on categories.cate_id = site_front_product.cate_id WHERE categories.cate_id = 7";
                     $result = mysqli_query($con, $query);
                     if ($row = mysqli_num_rows($result)>0) {
                         while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <li class="sinprodet sinprodetactive">
                        <div class="SingelProductsCategory productItem">
                            <figure>
                                <img class="figureimg productItemimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                                <figcaption>
                                    <h5 class="gallary-title productItemh5" style="font-size: 30px;margin-top: 0px;"><?php echo $data['product_name']; ?></h5>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <!-- model -->
                    <div id="openModal-about" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <div class="modaldeatiles">
                    <div class="ima">
                        <img class="figureimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                    </div>
                    <div class="modaldes">
                        <h2><?php echo $data['product_name']; ?></h2>
                        <p><?php echo $data['Product_desc']; ?></p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup <?php echo $data['servering_size']; ?></h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories <?php echo $data['calories']; ?> <span>Calories from Fat <?php echo $data['calories_from_fat']; ?></span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> <?php echo $data['total_fat_per_gram']; ?> <span><?php echo $data['total_fat_per_gram_percent']; ?></span></p>
                            <p>Saturated Fat <?php echo $data['saturated_fat_per_gram']; ?><span><?php echo $data['saturated_fat_per_gram_percent']; ?></span></p>
                            <p>Trans Fat <?php echo $data['trans_fat_per_gram']; ?><span><?php echo $data['trans_fat_per_gram_percent']; ?></span></p>
                            <p><b>Sodium</b> <?php echo $data['sodium_fat_per_gram']; ?><span><?php echo $data['sodium_fat_per_gram_percent']; ?></span></p>
                            <p><b>Total Carbohydrates</b> <?php echo $data['carbohydrates_per_gram']; ?><span><?php echo $data['carbohydrates_per_gram_percent']; ?></span></p>
                            <p>Dietary Fiber <?php echo $data['dietry_fiber_per_gram']; ?><span><?php echo $data['dietry_fiber_per_gram_percent']; ?></span></p>
                            <p>Sugars <?php echo $data['protien_per_gram']; ?><span>45%</span></p>
                            <p><b>Protein</b> <?php echo $data['protien_per_gram']; ?><span><?php echo $data['protien_per_gram_percent']; ?></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span><?php echo $data['vitamin_a_percent']; ?></span> || Calcium <span><?php echo $data['calcium_a_percent']; ?></span></h3>
                            <h3>Vitamin B <span><?php echo $data['vitamin_b_percent']; ?></span> || Iron <span><?php echo $data['iron_a_percent']; ?></span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <?php
                         }
                     }else{
                        echo 'No prouct Found';
                     }
                     ?>
                </ul>
            </div>
        </div>
    </section>

    <!-- ==========================PRODUCTS MOBILE ==================-->
    <section id="Products" class="mobile">
        <div class="products productpage" style="background-image: url('image/beans.jpg');background-size: cover;height: 400px;margin-top: 0px; ">
            <div class="linner productpagelinner" style="height: 400px;overflow: hidden;">
                <div class="pro-title">
                    <h1 style="color: white;">PRODUCTS</h1>
                </div>
                <div class="productcat-sidebar">
                    <ul>
                        <?php 
                         // fetching category
                         $qry = "SELECT * FROM `categories`";
                         $res = mysqli_query($con, $qry);
                         if ($crow = mysqli_num_rows($res)) {
                             while ($cdata = mysqli_fetch_assoc($res)) {
                                $_SESSION['cate_name'] = $cdata['CategoryName'];
                        ?>
                         <li class="pro-side productstopActive"><?php echo $_SESSION['cate_name']; ?></li>
                         <?php
                             }
                         }else{
                            echo 'No Category Found';
                         }
                         ?>
                    </ul>
                </div>

            </div>
        </div>
        <div class="productcat-topbar productpagetopbar">
            <!-- Beans -->
            <div class="productstop beans productstopActive">
                <ul>
                    <?php 
                     $query = "SELECT * FROM `site_front_product` join categories on categories.cate_id = site_front_product.cate_id WHERE categories.cate_id = 3";
                     $result = mysqli_query($con, $query);
                     if ($row = mysqli_num_rows($result)>0) {
                         while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <li class="sinprodet sinprodetactive">
                        <div class="SingelProductsCategory productItem">
                            <figure>
                                <img class="figureimg productItemimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                                <figcaption>
                                    <h5 class="gallary-title productItemh5" style="font-size: 30px;margin-top: 0px;"><?php echo $data['product_name']; ?></h5>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <!-- model -->
                    <div id="openModal-about" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <div class="modaldeatiles">
                    <div class="modaldes" style="width: 50%">
                        <h2><?php echo $data['product_name']; ?></h2>
                        <p><?php echo $data['Product_desc']; ?></p>
                    </div>
                    <div class="modalnuration" style="width: 50%">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup <?php echo $data['servering_size']; ?></h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories <?php echo $data['calories']; ?> <span>Calories from Fat <?php echo $data['calories_from_fat']; ?></span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> <?php echo $data['total_fat_per_gram']; ?> <span><?php echo $data['total_fat_per_gram_percent']; ?></span></p>
                            <p>Saturated Fat <?php echo $data['saturated_fat_per_gram']; ?><span><?php echo $data['saturated_fat_per_gram_percent']; ?></span></p>
                            <p>Trans Fat <?php echo $data['trans_fat_per_gram']; ?><span><?php echo $data['trans_fat_per_gram_percent']; ?></span></p>
                            <p><b>Sodium</b> <?php echo $data['sodium_fat_per_gram']; ?><span><?php echo $data['sodium_fat_per_gram_percent']; ?></span></p>
                            <p><b>Total Carbohydrates</b> <?php echo $data['carbohydrates_per_gram']; ?><span><?php echo $data['carbohydrates_per_gram_percent']; ?></span></p>
                            <p>Dietary Fiber <?php echo $data['dietry_fiber_per_gram']; ?><span><?php echo $data['dietry_fiber_per_gram_percent']; ?></span></p>
                            <p>Sugars <?php echo $data['protien_per_gram']; ?><span>45%</span></p>
                            <p><b>Protein</b> <?php echo $data['protien_per_gram']; ?><span><?php echo $data['protien_per_gram_percent']; ?></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span><?php echo $data['vitamin_a_percent']; ?></span> || Calcium <span><?php echo $data['calcium_a_percent']; ?></span></h3>
                            <h3>Vitamin B <span><?php echo $data['vitamin_b_percent']; ?></span> || Iron <span><?php echo $data['iron_a_percent']; ?></span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <?php
                         }
                     }else{
                        echo 'No prouct Found';
                     }
                     ?>
                </ul>
            </div>
            <!-- Grains -->
            <div class="productstop Grains">
                <ul>
                    <?php 
                     $query = "SELECT * FROM `site_front_product` join categories on categories.cate_id = site_front_product.cate_id WHERE categories.cate_id = 4";
                     $result = mysqli_query($con, $query);
                     if ($row = mysqli_num_rows($result)>0) {
                         while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <li class="sinprodet sinprodetactive">
                        <div class="SingelProductsCategory productItem">
                            <figure>
                                <img class="figureimg productItemimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                                <figcaption>
                                    <h5 class="gallary-title productItemh5" style="font-size: 30px;margin-top: 0px;"><?php echo $data['product_name']; ?></h5>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <!-- model -->
                    <div id="openModal-about" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <div class="modaldeatiles">
                    <div class="ima">
                        <img class="figureimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                    </div>
                    <div class="modaldes">
                        <h2><?php echo $data['product_name']; ?></h2>
                        <p><?php echo $data['Product_desc']; ?></p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup <?php echo $data['servering_size']; ?></h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories <?php echo $data['calories']; ?> <span>Calories from Fat <?php echo $data['calories_from_fat']; ?></span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> <?php echo $data['total_fat_per_gram']; ?> <span><?php echo $data['total_fat_per_gram_percent']; ?></span></p>
                            <p>Saturated Fat <?php echo $data['saturated_fat_per_gram']; ?><span><?php echo $data['saturated_fat_per_gram_percent']; ?></span></p>
                            <p>Trans Fat <?php echo $data['trans_fat_per_gram']; ?><span><?php echo $data['trans_fat_per_gram_percent']; ?></span></p>
                            <p><b>Sodium</b> <?php echo $data['sodium_fat_per_gram']; ?><span><?php echo $data['sodium_fat_per_gram_percent']; ?></span></p>
                            <p><b>Total Carbohydrates</b> <?php echo $data['carbohydrates_per_gram']; ?><span><?php echo $data['carbohydrates_per_gram_percent']; ?></span></p>
                            <p>Dietary Fiber <?php echo $data['dietry_fiber_per_gram']; ?><span><?php echo $data['dietry_fiber_per_gram_percent']; ?></span></p>
                            <p>Sugars <?php echo $data['protien_per_gram']; ?><span>45%</span></p>
                            <p><b>Protein</b> <?php echo $data['protien_per_gram']; ?><span><?php echo $data['protien_per_gram_percent']; ?></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span><?php echo $data['vitamin_a_percent']; ?></span> || Calcium <span><?php echo $data['calcium_a_percent']; ?></span></h3>
                            <h3>Vitamin B <span><?php echo $data['vitamin_b_percent']; ?></span> || Iron <span><?php echo $data['iron_a_percent']; ?></span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <?php
                         }
                     }else{
                        echo 'No prouct Found';
                     }
                     ?>
                </ul>
            </div>
            <!-- Lentis -->
            <div class="productstop Lentils">
                <ul>
                    <?php 
                     $query = "SELECT * FROM `site_front_product` join categories on categories.cate_id = site_front_product.cate_id WHERE categories.cate_id = 5";
                     $result = mysqli_query($con, $query);
                     if ($row = mysqli_num_rows($result)>0) {
                         while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <li class="sinprodet sinprodetactive">
                        <div class="SingelProductsCategory productItem">
                            <figure>
                                <img class="figureimg productItemimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                                <figcaption>
                                    <h5 class="gallary-title productItemh5" style="font-size: 30px;margin-top: 0px;"><?php echo $data['product_name']; ?></h5>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <!-- model -->
                    <div id="openModal-about" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <div class="modaldeatiles">
                    <div class="ima">
                        <img class="figureimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                    </div>
                    <div class="modaldes">
                        <h2><?php echo $data['product_name']; ?></h2>
                        <p><?php echo $data['Product_desc']; ?></p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup <?php echo $data['servering_size']; ?></h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories <?php echo $data['calories']; ?> <span>Calories from Fat <?php echo $data['calories_from_fat']; ?></span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> <?php echo $data['total_fat_per_gram']; ?> <span><?php echo $data['total_fat_per_gram_percent']; ?></span></p>
                            <p>Saturated Fat <?php echo $data['saturated_fat_per_gram']; ?><span><?php echo $data['saturated_fat_per_gram_percent']; ?></span></p>
                            <p>Trans Fat <?php echo $data['trans_fat_per_gram']; ?><span><?php echo $data['trans_fat_per_gram_percent']; ?></span></p>
                            <p><b>Sodium</b> <?php echo $data['sodium_fat_per_gram']; ?><span><?php echo $data['sodium_fat_per_gram_percent']; ?></span></p>
                            <p><b>Total Carbohydrates</b> <?php echo $data['carbohydrates_per_gram']; ?><span><?php echo $data['carbohydrates_per_gram_percent']; ?></span></p>
                            <p>Dietary Fiber <?php echo $data['dietry_fiber_per_gram']; ?><span><?php echo $data['dietry_fiber_per_gram_percent']; ?></span></p>
                            <p>Sugars <?php echo $data['protien_per_gram']; ?><span>45%</span></p>
                            <p><b>Protein</b> <?php echo $data['protien_per_gram']; ?><span><?php echo $data['protien_per_gram_percent']; ?></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span><?php echo $data['vitamin_a_percent']; ?></span> || Calcium <span><?php echo $data['calcium_a_percent']; ?></span></h3>
                            <h3>Vitamin B <span><?php echo $data['vitamin_b_percent']; ?></span> || Iron <span><?php echo $data['iron_a_percent']; ?></span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <?php
                         }
                     }else{
                        echo 'No prouct Found';
                     }
                     ?>
                </ul>
            </div>
            <!-- Oill seed -->
            <div class="productstop  OilSeed">
                <ul>
                    <?php 
                     $query = "SELECT * FROM `site_front_product` join categories on categories.cate_id = site_front_product.cate_id WHERE categories.cate_id = 6";
                     $result = mysqli_query($con, $query);
                     if ($row = mysqli_num_rows($result)>0) {
                         while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <li class="sinprodet sinprodetactive">
                        <div class="SingelProductsCategory productItem">
                            <figure>
                                <img class="figureimg productItemimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                                <figcaption>
                                    <h5 class="gallary-title productItemh5" style="font-size: 30px;margin-top: 0px;"><?php echo $data['product_name']; ?></h5>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <!-- model -->
                    <div id="openModal-about" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <div class="modaldeatiles">
                    <div class="ima">
                        <img class="figureimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                    </div>
                    <div class="modaldes">
                        <h2><?php echo $data['product_name']; ?></h2>
                        <p><?php echo $data['Product_desc']; ?></p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup <?php echo $data['servering_size']; ?></h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories <?php echo $data['calories']; ?> <span>Calories from Fat <?php echo $data['calories_from_fat']; ?></span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> <?php echo $data['total_fat_per_gram']; ?> <span><?php echo $data['total_fat_per_gram_percent']; ?></span></p>
                            <p>Saturated Fat <?php echo $data['saturated_fat_per_gram']; ?><span><?php echo $data['saturated_fat_per_gram_percent']; ?></span></p>
                            <p>Trans Fat <?php echo $data['trans_fat_per_gram']; ?><span><?php echo $data['trans_fat_per_gram_percent']; ?></span></p>
                            <p><b>Sodium</b> <?php echo $data['sodium_fat_per_gram']; ?><span><?php echo $data['sodium_fat_per_gram_percent']; ?></span></p>
                            <p><b>Total Carbohydrates</b> <?php echo $data['carbohydrates_per_gram']; ?><span><?php echo $data['carbohydrates_per_gram_percent']; ?></span></p>
                            <p>Dietary Fiber <?php echo $data['dietry_fiber_per_gram']; ?><span><?php echo $data['dietry_fiber_per_gram_percent']; ?></span></p>
                            <p>Sugars <?php echo $data['protien_per_gram']; ?><span>45%</span></p>
                            <p><b>Protein</b> <?php echo $data['protien_per_gram']; ?><span><?php echo $data['protien_per_gram_percent']; ?></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span><?php echo $data['vitamin_a_percent']; ?></span> || Calcium <span><?php echo $data['calcium_a_percent']; ?></span></h3>
                            <h3>Vitamin B <span><?php echo $data['vitamin_b_percent']; ?></span> || Iron <span><?php echo $data['iron_a_percent']; ?></span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <?php
                         }
                     }else{
                        echo 'No prouct Found';
                     }
                     ?>
                </ul>
            </div>
            <!-- Peas -->
            <div class="productstop Peas">
                <ul>
                    <?php 
                     $query = "SELECT * FROM `site_front_product` join categories on categories.cate_id = site_front_product.cate_id WHERE categories.cate_id = 7";
                     $result = mysqli_query($con, $query);
                     if ($row = mysqli_num_rows($result)>0) {
                         while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <li class="sinprodet sinprodetactive">
                        <div class="SingelProductsCategory productItem">
                            <figure>
                                <img class="figureimg productItemimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                                <figcaption>
                                    <h5 class="gallary-title productItemh5" style="font-size: 30px;margin-top: 0px;"><?php echo $data['product_name']; ?></h5>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <!-- model -->
                    <div id="openModal-about" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <div class="modaldeatiles">
                    <div class="ima">
                        <img class="figureimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                    </div>
                    <div class="modaldes">
                        <h2><?php echo $data['product_name']; ?></h2>
                        <p><?php echo $data['Product_desc']; ?></p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup <?php echo $data['servering_size']; ?></h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories <?php echo $data['calories']; ?> <span>Calories from Fat <?php echo $data['calories_from_fat']; ?></span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> <?php echo $data['total_fat_per_gram']; ?> <span><?php echo $data['total_fat_per_gram_percent']; ?></span></p>
                            <p>Saturated Fat <?php echo $data['saturated_fat_per_gram']; ?><span><?php echo $data['saturated_fat_per_gram_percent']; ?></span></p>
                            <p>Trans Fat <?php echo $data['trans_fat_per_gram']; ?><span><?php echo $data['trans_fat_per_gram_percent']; ?></span></p>
                            <p><b>Sodium</b> <?php echo $data['sodium_fat_per_gram']; ?><span><?php echo $data['sodium_fat_per_gram_percent']; ?></span></p>
                            <p><b>Total Carbohydrates</b> <?php echo $data['carbohydrates_per_gram']; ?><span><?php echo $data['carbohydrates_per_gram_percent']; ?></span></p>
                            <p>Dietary Fiber <?php echo $data['dietry_fiber_per_gram']; ?><span><?php echo $data['dietry_fiber_per_gram_percent']; ?></span></p>
                            <p>Sugars <?php echo $data['protien_per_gram']; ?><span>45%</span></p>
                            <p><b>Protein</b> <?php echo $data['protien_per_gram']; ?><span><?php echo $data['protien_per_gram_percent']; ?></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span><?php echo $data['vitamin_a_percent']; ?></span> || Calcium <span><?php echo $data['calcium_a_percent']; ?></span></h3>
                            <h3>Vitamin B <span><?php echo $data['vitamin_b_percent']; ?></span> || Iron <span><?php echo $data['iron_a_percent']; ?></span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <?php
                         }
                     }else{
                        echo 'No prouct Found';
                     }
                     ?>
                </ul>
            </div>
            <!-- Corn -->
            <div class="productstop Corn">
                <ul>
                    <?php 
                     $query = "SELECT * FROM `site_front_product` join categories on categories.cate_id = site_front_product.cate_id WHERE categories.cate_id = 7";
                     $result = mysqli_query($con, $query);
                     if ($row = mysqli_num_rows($result)>0) {
                         while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <li class="sinprodet sinprodetactive">
                        <div class="SingelProductsCategory productItem">
                            <figure>
                                <img class="figureimg productItemimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                                <figcaption>
                                    <h5 class="gallary-title productItemh5" style="font-size: 30px;margin-top: 0px;"><?php echo $data['product_name']; ?></h5>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <!-- model -->
                    <div id="openModal-about" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <div class="modaldeatiles">
                    <div class="ima">
                        <img class="figureimg" src="template/pages/samples/product_imgs/<?php echo $data['product_image']; ?>" alt="">
                    </div>
                    <div class="modaldes">
                        <h2><?php echo $data['product_name']; ?></h2>
                        <p><?php echo $data['Product_desc']; ?></p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup <?php echo $data['servering_size']; ?></h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories <?php echo $data['calories']; ?> <span>Calories from Fat <?php echo $data['calories_from_fat']; ?></span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> <?php echo $data['total_fat_per_gram']; ?> <span><?php echo $data['total_fat_per_gram_percent']; ?></span></p>
                            <p>Saturated Fat <?php echo $data['saturated_fat_per_gram']; ?><span><?php echo $data['saturated_fat_per_gram_percent']; ?></span></p>
                            <p>Trans Fat <?php echo $data['trans_fat_per_gram']; ?><span><?php echo $data['trans_fat_per_gram_percent']; ?></span></p>
                            <p><b>Sodium</b> <?php echo $data['sodium_fat_per_gram']; ?><span><?php echo $data['sodium_fat_per_gram_percent']; ?></span></p>
                            <p><b>Total Carbohydrates</b> <?php echo $data['carbohydrates_per_gram']; ?><span><?php echo $data['carbohydrates_per_gram_percent']; ?></span></p>
                            <p>Dietary Fiber <?php echo $data['dietry_fiber_per_gram']; ?><span><?php echo $data['dietry_fiber_per_gram_percent']; ?></span></p>
                            <p>Sugars <?php echo $data['protien_per_gram']; ?><span>45%</span></p>
                            <p><b>Protein</b> <?php echo $data['protien_per_gram']; ?><span><?php echo $data['protien_per_gram_percent']; ?></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span><?php echo $data['vitamin_a_percent']; ?></span> || Calcium <span><?php echo $data['calcium_a_percent']; ?></span></h3>
                            <h3>Vitamin B <span><?php echo $data['vitamin_b_percent']; ?></span> || Iron <span><?php echo $data['iron_a_percent']; ?></span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <?php
                         }
                     }else{
                        echo 'No prouct Found';
                     }
                     ?>
                </ul>
            </div>
        </div>
    </section>




    <section>
        <!-- Beans Modal -->
        <div id="openModal-about" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <div class="modaldeatiles">
                    <div class="ima">
                        <img class="figureimg" src="image/products/white kidney bean.jpg" alt="">
                    </div>
                    <div class="modaldes">
                        <h2>White Kidney</h2>
                        <p>Kidney beans are a variety of the common bean (Phaseolus vulgaris), a legume native to Central America and Mexico.</p>
                        <p>The common bean is an important food crop and major source of protein throughout the world.</p>
                        <p>Used in a variety of traditional dishes, kidney beans are usually eaten well cooked. Raw or improperly cooked kidney beans are toxic, but well-prepared beans can be a healthy component of a well-balanced diet </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup </h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 249 <span>Calories from Fat 5 6</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 6.0g <span>1%</span></p>
                            <p>Saturated Fat 0.2g<span>1%</span></p>
                            <p>Trans Fat 0.0g<span></span></p>
                            <p><b>Sodium</b> 11mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 45g<span>15%</span></p>
                            <p>Dietary Fiber 11g<span>15%</span></p>
                            <p>Sugars 0.6g<span>45%</span></p>
                            <p><b>Protein</b> 17g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>12%</span></h3>
                            <h3>Vitamin B <span>0%</span> || Iron <span>37%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <div class="modaldeatiles">
                    <div class="ima">
                        <img class="figureimg" src="image/beans/dark red kidney beans.jpg" alt="">
                    </div>
                    <div class="modaldes ">
                        <h2>Dark red kidney</h2>
                        <p>Kidney beans are a variety of the common bean (Phaseolus vulgaris), a legume native to Central America and Mexico.</p>
                        <p>The common bean is an important food crop and major source of protein throughout the world.</p>
                        <p>Used in a variety of traditional dishes, kidney beans are usually eaten well cooked. Raw or improperly cooked kidney beans are toxic, but well-prepared beans can be a healthy component of a well-balanced diet </p>
                    </div>
                    <div class="modalnuration ">
                        <h2>Nutrition</h2>
                        <div class="nutrition ">
                            <h6>Per <span>180.0g</span> Serving Size</h6>
                            <h2 class="bottomline "></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 225 <span>Calories from Fat 8</span></p>
                            <p>% Daily Value*</p>
                            <p>Total Fat 0.9g <span>1%</span></p>
                            <p>Saturated Fat 0.1g<span>1%</span></p>
                            <p>Trans Fat 0.0g<span>1%</span></p>
                            <p>Sodium 1.8mg<span>0%</span></p>
                            <p>Total Carbohydrates 402g<span>13%</span></p>
                            <p>Dietary Fiber 11g<span>13%</span></p>
                            <p>Sugars 0.6g<span></span></p>
                            <p>Protein 15g<span></span></p>
                            <h2 class="bottomline "></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>4.8%</span></h3>
                            <h3>Vitamin B <span>3.5%</span> || Iron <span>22%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                            <h4>Nutritional details are an estimate and should only be used as a guide for approximation.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/products/ligh_red_kidney_beans.jpg " alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Light Red Kidney</h2>
                        <p>Kidney beans are a variety of the common bean (Phaseolus vulgaris), a legume native to Central America and Mexico.</p>
                        <p>The common bean is an important food crop and major source of protein throughout the world.</p>
                        <p>Used in a variety of traditional dishes, kidney beans are usually eaten well cooked. Raw or improperly cooked kidney beans are toxic, but well-prepared beans can be a healthy component of a well-balanced diet </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (177g) </h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 225 <span>Calories from Fat 8</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.9g <span>1%</span></p>
                            <p>Saturated Fat 0.1g<span>1%</span></p>
                            <p>Trans Fat 0.0g<span></span></p>
                            <p><b>Sodium</b> 1.8mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 40g<span>20%</span></p>
                            <p>Dietary Fiber 11g<span>13%</span></p>
                            <p>Sugars 0.6g<span>44%</span></p>
                            <p><b>Protein</b> 15g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>4.8%</span></h3>
                            <h3>Vitamin B <span>3.5%</span> || Iron <span>22%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/products/ligh_red_kidney_beans.jpg " alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Great Northren</h2>
                        <p>Great Northern Beans (Phaseolus Vulgaris) are white beans related to the Kidney Bean. About 3/8 of an inch long, they're larger than the Navy Bean and oval shaped with a mild flavour and mealy texture. Popular in soups, stews,
                            and casseroles, they blend well with pinto and other beans or can substitute for navy or cannellini beans. The Common Bean Great Northern beans are also called "Common Beans." It's believed that they were first bred in South
                            America, so they are also known as a "New World Bean." These "common beans" were spread through Central and South America by migrating farmers. The oldest-known domesticated beans date back to the second millennium. All beans
                            are marvels of nature's kitchen: filled with beneficial phytonutrients, soluble and insoluble dietary fiber and protein. They're storehouses of antioxidants, vitamins and minerals including iron, zinc, potassium, magnesium
                            and folate. Beans are cholesterol-free and contain no saturated fat. One-half cup serving of beans contains about 8 grams of dietary protein. Tasty Tips and Storage Great Northern Beans have a mild flavour, so they readily
                            take on the taste of other ingredients. In France, they are favourites in cassoulet, and in North America, they're often used in Boston Baked Beans. Enjoy Grainworks Organic Great Northern Beans in soups, chilies, salads and
                            more. Like most beans, Great Northern beans benefit from soaking before cooking. Soak them for six to eight hours before cooking, or bring to a boil in water, remove from heat, cover and soak for 1 hour. Always drain soaking
                            water before cooking. To cook add fresh water and cover the beans by two inches. Boil uncovered for about 10 minutes and skim off any foam. Traditionally, a strip of Kombu seaweed is used in Asia to help soften beans (added
                            at the beginning of cooking). Cover pot and simmer for about one and a half hours. Add seasonings as desired; beans benefit from adding salt during the last half hour or so of cooking. Like most stored foods, beans are best
                            stored in the absence of oxygen and light, which can speed rancidity and fade bean colour. Store in a cool dark pantry in our resealable bags or an airtight container. Refrigerated/frozen storage isn't recommended for dried
                            beans, which will last for a year or more properly stored in the pantry.</p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (177g) </h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 209 <span>Calories from Fat 7.2</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.8g <span>1%</span></p>
                            <p>Saturated Fat 0.3g<span>1%</span></p>
                            <p>Trans Fat 0.0g<span></span></p>
                            <p><b>Sodium</b> 3.5mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 37g<span>20%</span></p>
                            <p>Dietary Fiber 12g<span>48%</span></p>
                            <p><b>Protein</b> 15g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>9.3%</span></h3>
                            <h3>Vitamin B <span>3.8%</span> || Iron <span>21%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/products/small red beans.jpg " alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Small Red Beans</h2>
                        <p>Small Red Beans are small, plump, oval-shaped red beans that resemble kidney beans, but are smaller and more rounded. They have a mild flavor and creamy texture that performs well on its own or as a component among other ingredients.</p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>0.3 </span> cup (51g) </h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 170 <span>Calories from Fat 4.5</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.5g <span>1%</span></p>
                            <p>Saturated Fat 0.0g<span>0%</span></p>
                            <p>Trans Fat 0.0g<span></span></p>
                            <p><b>Sodium</b> 10mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 30g<span>10%</span></p>
                            <p>Dietary Fiber 12g<span>48%</span></p>
                            <p><b>Protein</b> 12g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>8%</span></h3>
                            <h3>Vitamin B <span>4%</span> || Iron <span>25%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/products/faba beans.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Faba</h2>
                        <p>Faba beans are a pulse crop that is part of the legume family. The word “pulse” comes from the Latin word puls, meaning potage or thick soup. Pulses are the dry edible seeds of pod plants and are high in protein and fibre and low
                            in fat.</p>
                        <p>The common cultivated faba bean (Vicia faba minor) is an annual plant with coarse, upright unbranched stems. Classically, the faba bean is divided into three sub-species based primarily on </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>0.5 </span> cup (85g) </h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 94 <span>Calories from Fat 3.1</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.3g <span>1%</span></p>
                            <p>Saturated Fat 0.0g<span>0%</span></p>
                            <p>Trans Fat 0.0g<span></span></p>
                            <p><b>Sodium</b> 205mg<span>9%</span></p>
                            <p><b>Total Carbohydrates</b> 17g<span>6%</span></p>
                            <p>Dietary Fiber 12g<span>48%</span></p>
                            <p><b>Protein</b> 12g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.3%</span> || Calcium <span>2.4%</span></h3>
                            <h3>Vitamin B <span>0.4%</span> || Iron <span>7.1%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/products/Split Fava beans.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Split Faba</h2>
                        <p>Faba beans are a pulse crop that is part of the legume family. The word “pulse” comes from the Latin word puls, meaning potage or thick soup. Pulses are the dry edible seeds of pod plants and are high in protein and fibre and low
                            in fat.</p>
                        <p>The common cultivated faba bean (Vicia faba minor) is an annual plant with coarse, upright unbranched stems. Classically, the faba bean is divided into three sub-species based primarily on seed size: </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>0.5 </span> cup (85g) </h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 94 <span>Calories from Fat 3.1</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.3g <span>1%</span></p>
                            <p>Saturated Fat 0.0g<span>0%</span></p>
                            <p>Trans Fat 0.0g<span></span></p>
                            <p><b>Sodium</b> 205mg<span>9%</span></p>
                            <p><b>Total Carbohydrates</b> 17g<span>6%</span></p>
                            <p>Dietary Fiber 12g<span>48%</span></p>
                            <p><b>Protein</b> 12g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.3%</span> || Calcium <span>2.4%</span></h3>
                            <h3>Vitamin B <span>0.4%</span> || Iron <span>7.1%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/products/black beans.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Black</h2>
                        <p>The antioxidants, fiber, protein, and carbohydrates in black beans make them nutritionally powerful. A diet rich in beans can reduce your risk of several serious medical conditions and help your body to process calories more effectively
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (172g) </h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 227 <span>Calories from Fat 4.8</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.9g <span>1%</span></p>
                            <p>Saturated Fat 0.2g<span>1%</span></p>
                            <p>Trans Fat 0.0g<span></span></p>
                            <p><b>Sodium</b> 1.7mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 41g<span>14%</span></p>
                            <p>Dietary Fiber 15g<span>60%</span></p>
                            <p><b>Protein</b> 12g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.2%</span> || Calcium <span>3.6%</span></h3>
                            <h3>Vitamin B <span>0%</span> || Iron <span>20%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/products/splitbalck beans.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2> Split Black</h2>
                        <p>The antioxidants, fiber, protein, and carbohydrates in black beans make them nutritionally powerful. A diet rich in beans can reduce your risk of several serious medical conditions and help your body to process calories more effectively
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (172g) </h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 227 <span>Calories from Fat 4.8</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.9g <span>1%</span></p>
                            <p>Saturated Fat 0.2g<span>1%</span></p>
                            <p>Trans Fat 0.0g<span></span></p>
                            <p><b>Sodium</b> 1.7mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 41g<span>14%</span></p>
                            <p>Dietary Fiber 15g<span>60%</span></p>
                            <p><b>Protein</b> 12g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.2%</span> || Calcium <span>3.6%</span></h3>
                            <h3>Vitamin B <span>0%</span> || Iron <span>20%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/products/Split Navey beans.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2> Navey</h2>
                        <p>The navy bean, haricot, pearl haricot bean, Boston bean, white pea bean, or pea bean is a variety of the common bean native to the Americas, where it was first domesticated. It is a dry white bean that is smaller than many other
                            types of white beans, and has an oval, slightly flattened shape.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>0.5 </span> cup </h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 20 <span>Calories from Fat 0</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0g <span>0%</span></p>
                            <p>Saturated Fat 0g<span>0%</span></p>
                            <p>Trans Fat 0.0g<span></span></p>
                            <p><b>Sodium</b> 0mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 3g<span>1%</span></p>
                            <p>Dietary Fiber 2g<span>1%</span></p>
                            <p>Sugars 1g<span>0%</span></p>
                            <p><b>Protein</b> 1g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>4%</span> || Calcium <span>4%</span></h3>
                            <h3>Vitamin B <span>2%</span> || Iron <span>6%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/products/Split Navey beans.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2> Navey</h2>
                        <p>The navy bean, haricot, pearl haricot bean, Boston bean, white pea bean, or pea bean is a variety of the common bean native to the Americas, where it was first domesticated. It is a dry white bean that is smaller than many other
                            types of white beans, and has an oval, slightly flattened shape.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>0.5 </span> cup </h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 20 <span>Calories from Fat 0</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0g <span>0%</span></p>
                            <p>Saturated Fat 0g<span>0%</span></p>
                            <p>Trans Fat 0.0g<span></span></p>
                            <p><b>Sodium</b> 0mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 3g<span>1%</span></p>
                            <p>Dietary Fiber 2g<span>1%</span></p>
                            <p>Sugars 1g<span>0%</span></p>
                            <p><b>Protein</b> 1g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>4%</span> || Calcium <span>4%</span></h3>
                            <h3>Vitamin B <span>2%</span> || Iron <span>6%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/products/Pinto Beans.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Pinto</h2>
                        <p>The pinto bean is a variety of common bean. In Spanish they are called frijol pinto, literally "speckled bean". It is the most popular bean by crop production in Northern Mexico and the Southwestern United States, and is most often
                            eaten whole, or mashed and then refried.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (171g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 245 <span>Calories from Fat 10</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 1.1g <span>2%</span></p>
                            <p>Saturated Fat 0.2g<span>1%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b> 1.7mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 45g<span>15%</span></p>
                            <p>Dietary Fiber 15g<span>60%</span></p>
                            <p>Sugars 0.6g<span>0%</span></p>
                            <p><b>Protein</b> 15g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>6.1%</span></h3>
                            <h3>Vitamin B <span>2.3%</span> || Iron <span>10%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/products/Split Pinto beans.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Split Pinto</h2>
                        <p>The pinto bean is a variety of common bean. In Spanish they are called frijol pinto, literally "speckled bean". It is the most popular bean by crop production in Northern Mexico and the Southwestern United States, and is most often
                            eaten whole, or mashed and then refried.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (171g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 245 <span>Calories from Fat 10</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 1.1g <span>2%</span></p>
                            <p>Saturated Fat 0.2g<span>1%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b> 1.7mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 45g<span>15%</span></p>
                            <p>Dietary Fiber 15g<span>60%</span></p>
                            <p>Sugars 0.6g<span>0%</span></p>
                            <p><b>Protein</b> 15g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>6.1%</span></h3>
                            <h3>Vitamin B <span>2.3%</span> || Iron <span>10%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/products/Split Pinto beans.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Black Matpe</h2>
                        <p>Vigna mungo, the black gram, urad bean, ulundu paruppu, minapa pappu, mungo bean or black matpe bean is a bean grown in South Asia. Like its relative, the mung bean, it has been reclassified from the Phaseolus to the Vigna genus.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (171g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 245 <span>Calories from Fat 10</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 1.1g <span>2%</span></p>
                            <p>Saturated Fat 0.2g<span>1%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b> 1.7mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 45g<span>15%</span></p>
                            <p>Dietary Fiber 15g<span>60%</span></p>
                            <p>Sugars 0.6g<span>0%</span></p>
                            <p><b>Protein</b> 15g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>6.1%</span></h3>
                            <h3>Vitamin B <span>2.3%</span> || Iron <span>10%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/products/Split Pinto beans.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Mung Dal</h2>
                        <p>The mung bean, alternatively known as the green gram, maash, moong, monggo, or munggo, is a plant species in the legume family. The mung bean is mainly cultivated in East Asia, Southeast Asia and the Indian subcontinent. It is
                            used as an ingredient in both savoury and sweet dishes.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (202g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 212 <span>Calories from Fat 6.9</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.8g <span>1%</span></p>
                            <p>Saturated Fat 0.2g<span>1%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>4mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 39g<span>13%</span></p>
                            <p>Dietary Fiber 15g<span>60%</span></p>
                            <p>Sugars 4g<span>0%</span></p>
                            <p><b>Protein</b> 14g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>1%</span> || Calcium <span>4.2%</span></h3>
                            <h3>Vitamin B <span>3.4%</span> || Iron <span>16%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/products/Split Pinto beans.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Mung Bean</h2>
                        <p>The mung bean, alternatively known as the green gram, maash, moong, monggo, or munggo, is a plant species in the legume family. The mung bean is mainly cultivated in East Asia, Southeast Asia and the Indian subcontinent. It is
                            used as an ingredient in both savoury and sweet dishes.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (202g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 212 <span>Calories from Fat 6.9</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.8g <span>1%</span></p>
                            <p>Saturated Fat 0.2g<span>1%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>4mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 39g<span>13%</span></p>
                            <p>Dietary Fiber 15g<span>60%</span></p>
                            <p>Sugars 4g<span>0%</span></p>
                            <p><b>Protein</b> 14g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>1%</span> || Calcium <span>4.2%</span></h3>
                            <h3>Vitamin B <span>3.4%</span> || Iron <span>16%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/products/Split Pinto beans.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Soybean</h2>
                        <p>The soybean, soy bean, or soya bean is a species of legume native to East Asia, widely grown for its edible bean, which has numerous uses. Traditional unfermented food uses of soybeans include soy milk, from which tofu and tofu
                            skin are made.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (172g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 296 <span>Calories from Fat 139</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 15g <span>23%</span></p>
                            <p>Saturated Fat 2.2g<span>11%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>1.7mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 14g<span>5%</span></p>
                            <p>Dietary Fiber 10g<span>40%</span></p>
                            <p>Sugars 4g<span>0%</span></p>
                            <p><b>Protein</b> 14g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.3%</span> || Calcium <span>13%</span></h3>
                            <h3>Vitamin B <span>4.9%</span> || Iron <span>49%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/beans/chickpeas.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Chick Peas </h2>
                        <p>Kabuli Chickpeas are nutritional powerhouses loaded with fibre, protein and nutrients. Kabuli's are known for their large size, creamy colour and smooth coat. When soaked and boiled, these dried pulses cook up tastier and creamier
                            than their cousins from a can. To cook, soak the beans in clean water for 12-24 hours.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (164g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 269 <span>Calories from Fat 38</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 4.2g <span>6%</span></p>
                            <p>Saturated Fat 0.4g<span>2%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>11mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 45g<span>15%</span></p>
                            <p>Dietary Fiber 12g<span>48%</span></p>
                            <p>Sugars 7.9g<span>0%</span></p>
                            <p><b>Protein</b> 15g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.9%</span> || Calcium <span>6.2%</span></h3>
                            <h3>Vitamin B <span>3.6%</span> || Iron <span>26%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/beans/cranberry.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Cranberry </h2>
                        <p>The borlotti bean is a variety of common bean first bred in Colombia as the cargamanto. It is also known as the cranberry bean, Roman bean, romano bean, saluggia bean, gadhra bean or rosecoco bean. The bean is a medium to large
                            tan or hazelnut-colored bean splashed or streaked with red, magenta or black.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (177g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 241 <span>Calories from Fat 7.3</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b>0.2g <span>1%</span></p>
                            <p>Saturated Fat 0.2g<span>1%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>1.8mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 48g<span>20%</span></p>
                            <p>Dietary Fiber 15g<span>60%</span></p>
                            <p>Sugars 7.9g<span>0%</span></p>
                            <p><b>Protein</b> 17g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>6.8%</span></h3>
                            <h3>Vitamin B <span>0%</span> || Iron <span>21%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/beans/desipea.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Desi Chick pea </h2>
                        <p>The chickpea or chick pea is an annual legume of the family Fabaceae, subfamily Faboideae. Its different types are variously known as gram or Bengal gram, garbanzo or garbanzo bean, or Egyptian pea. Chickpea seeds are high in protein.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (177g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 241 <span>Calories from Fat 7.3</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b>0.2g <span>1%</span></p>
                            <p>Saturated Fat 0.2g<span>1%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>1.8mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 48g<span>20%</span></p>
                            <p>Dietary Fiber 15g<span>60%</span></p>
                            <p>Sugars 7.9g<span>0%</span></p>
                            <p><b>Protein</b> 17g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>6.8%</span></h3>
                            <h3>Vitamin B <span>0%</span> || Iron <span>21%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Grains -->
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Grains/oats.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Oats</h2>
                        <p>The oat, sometimes called the common oat, is a species of cereal grain grown for its seed, which is known by the same name. While oats are suitable for human consumption as oatmeal and rolled oats, one of the most common uses is
                            as livestock feed.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>0.5 </span> cup (41g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 153 <span>Calories from Fat 24</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 2.6g <span>4%</span></p>
                            <p>Saturated Fat 0.5g<span>2%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>2.4mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 27g<span>9%</span></p>
                            <p>Dietary Fiber 4.1g<span>9%</span></p>
                            <p>Sugars 0.4g<span>0%</span></p>
                            <p><b>Protein</b> 5.3g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>1.6%</span></h3>
                            <h3>Vitamin B <span>0%</span> || Iron <span>9.6%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Grains/barley.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Barley</h2>
                        <p>Barley, a member of the grass family, is a major cereal grain grown in temperate climates globally. It was one of the first cultivated grains, particularly in Eurasia as early as 10,000 years ago.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (57g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 193 <span>Calories from Fat 6.2</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.7g <span>1%</span></p>
                            <p>Saturated Fat 0.1g<span>15</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>4.7mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 44g<span>15%</span></p>
                            <p>Dietary Fiber 4.1g<span>9%</span></p>
                            <p>Sugars 6g<span>24%</span></p>
                            <p><b>Protein</b> 3.5g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.2%</span> || Calcium <span>1.3%</span></h3>
                            <h3>Vitamin B <span>0%</span> || Iron <span>12%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Grains/feedbarley.png" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Feed Barley</h2>
                        <p>Barley, a member of the grass family, is a major cereal grain grown in temperate climates globally. It was one of the first cultivated grains, particularly in Eurasia as early as 10,000 years ago.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (57g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 193 <span>Calories from Fat 6.2</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.7g <span>1%</span></p>
                            <p>Saturated Fat 0.1g<span>15</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>4.7mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 44g<span>15%</span></p>
                            <p>Dietary Fiber 4.1g<span>9%</span></p>
                            <p>Sugars 6g<span>24%</span></p>
                            <p><b>Protein</b> 3.5g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.2%</span> || Calcium <span>1.3%</span></h3>
                            <h3>Vitamin B <span>0%</span> || Iron <span>12%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Grains/rye.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Rye</h2>
                        <p>Rye is a grass grown extensively as a grain, a cover crop and a forage crop. It is a member of the wheat tribe and is closely related to both wheat and barley. Rye grain is used for flour, bread, beer, crispbread, some whiskeys,
                            some vodkas, and animal fodder.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (32g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 83 <span>Calories from Fat 9.5</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 1.1g <span>2%</span></p>
                            <p>Saturated Fat 0.2g<span>1%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>193mg<span>8%</span></p>
                            <p><b>Total Carbohydrates</b> 15g<span>5%</span></p>
                            <p>Dietary Fiber 1.9g<span>5%</span></p>
                            <p>Sugars 1.2g<span></span></p>
                            <p><b>Protein</b> 3.5g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>1.8%</span></h3>
                            <h3>Vitamin B <span>0.2%</span> || Iron <span>5%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Grains/durrum wheat.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Durum Wheat</h2>
                        <p>Durum wheat, also called pasta wheat or macaroni wheat, is a tetraploid species of wheat. It is the second most cultivated species of wheat after common wheat, although it represents only 5% to 8% of global wheat production.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (33g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 632 <span>Calories from Fat 33</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 3.7g <span>6%</span></p>
                            <p>Saturated Fat 0.6g<span>3%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>3.8mg<span>8%</span></p>
                            <p><b>Total Carbohydrates</b> 131g<span>54%</span></p>
                            <p>Dietary Fiber 23g<span>92%</span></p>
                            <p>Sugars 1.2g<span></span></p>
                            <p><b>Protein</b> 3.5g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.3%</span> || Calcium <span>3.7%</span></h3>
                            <h3>Vitamin B <span>0.2%</span> || Iron <span>38%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Grains/wheat.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2> Wheat</h2>
                        <p>Wheat is a grass widely cultivated for its seed, a cereal grain which is a worldwide staple food. The many species of wheat together make up the genus Triticum; the most widely grown is common wheat.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (33g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 632 <span>Calories from Fat 33</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 3.7g <span>6%</span></p>
                            <p>Saturated Fat 0.6g<span>3%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>3.8mg<span>8%</span></p>
                            <p><b>Total Carbohydrates</b> 131g<span>54%</span></p>
                            <p>Dietary Fiber 23g<span>92%</span></p>
                            <p>Sugars 1.2g<span></span></p>
                            <p><b>Protein</b> 3.5g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.3%</span> || Calcium <span>3.7%</span></h3>
                            <h3>Vitamin B <span>0.2%</span> || Iron <span>38%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Grains/red-millet.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Red Millet</h2>
                        <p>Panicum miliaceum is a grain crop with many common names, including proso millet, broomcorn millet, common millet, hog millet, Kashfi millet, red millet, and white millet. Archaeological evidence suggests that the crop was first
                            domesticated before 10,000 BCE in Northern China
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (174g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 207 <span>Calories from Fat 16</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 1.7g <span>3%</span></p>
                            <p>Saturated Fat 0.3g<span>2%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>3.5mg<span>8%</span></p>
                            <p><b>Total Carbohydrates</b> 41g<span>14%</span></p>
                            <p>Dietary Fiber 2.3g<span>9%</span></p>
                            <p>Sugars 0.2g<span></span></p>
                            <p><b>Protein</b> 6.1g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.1%</span> || Calcium <span>0.4%</span></h3>
                            <h3>Vitamin B <span>0%</span> || Iron <span>6.1%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Grains/white millet.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>White Millet</h2>
                        <p>Panicum miliaceum is a grain crop with many common names, including proso millet, broomcorn millet, common millet, hog millet, Kashfi millet, red millet, and white millet. Archaeological evidence suggests that the crop was first
                            domesticated before 10,000 BCE in Northern China
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (174g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 207 <span>Calories from Fat 16</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 1.7g <span>3%</span></p>
                            <p>Saturated Fat 0.3g<span>2%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>3.5mg<span>8%</span></p>
                            <p><b>Total Carbohydrates</b> 41g<span>14%</span></p>
                            <p>Dietary Fiber 2.3g<span>9%</span></p>
                            <p>Sugars 0.2g<span></span></p>
                            <p><b>Protein</b> 6.1g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.1%</span> || Calcium <span>0.4%</span></h3>
                            <h3>Vitamin B <span>0%</span> || Iron <span>6.1%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Grains/oat groats.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Oats Groats</h2>
                        <p>Groats are the hulled kernels of various cereal grains, such as oat, wheat, rye, and barley. Groats are whole grains that include the cereal germ and fiber-rich bran portion of the grain, as well as the endosperm. Groats can also
                            be produced from pseudocereal seeds such as buckwheat.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>0.5 </span> cup (41g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 153 <span>Calories from Fat 24</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 2.6g <span>4%</span></p>
                            <p>Saturated Fat 0.5g<span>2%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>2.4mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 27g<span>9%</span></p>
                            <p>Dietary Fiber 4.1g<span>9%</span></p>
                            <p>Sugars 0.4g<span>0%</span></p>
                            <p><b>Protein</b> 5.3g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>1.6%</span></h3>
                            <h3>Vitamin B <span>0%</span> || Iron <span>9.6%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Lentis -->
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Lentils/Laird no 1.png" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Laird No 1</h2>
                        <p>Laird lentils are large (6-7 mm) in diameter, have a green seed coat and yellow cotyledons. The size range is 60-70 grams/1000 seeds
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (198g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 230 <span>Calories from Fat 6.8</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.8g <span>2%</span></p>
                            <p>Saturated Fat 0.2g<span>2%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>4mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 40g<span>13%</span></p>
                            <p>Dietary Fiber 16g<span>13%</span></p>
                            <p>Sugars 3.6g<span>64%</span></p>
                            <p><b>Protein</b> 18g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.3%</span> || Calcium <span>2.9%</span></h3>
                            <h3>Vitamin B <span>5%</span> || Iron <span>37%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Lentils/Laird no 1.png" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Laird No 2</h2>
                        <p>Laird lentils are large (6-7 mm) in diameter, have a green seed coat and yellow cotyledons. The size range is 60-70 grams/1000 seeds
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (198g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 230 <span>Calories from Fat 6.8</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.8g <span>2%</span></p>
                            <p>Saturated Fat 0.2g<span>2%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>4mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 40g<span>13%</span></p>
                            <p>Dietary Fiber 16g<span>13%</span></p>
                            <p>Sugars 3.6g<span>64%</span></p>
                            <p><b>Protein</b> 18g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.3%</span> || Calcium <span>2.9%</span></h3>
                            <h3>Vitamin B <span>5%</span> || Iron <span>37%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Lentils/Eston-Lentils.png" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Eston</h2>
                        <p>Green Eston Lentils, or "Lens esculenta," are a smaller, speckled variety of green lentils that are hearty and firm. If desired, they can be cooked for a longer time, ...
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>0.3 </span> cup (48g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 170 <span>Calories from Fat 4.5</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.5g <span>1%</span></p>
                            <p>Saturated Fat 0g<span>0%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>0mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 29g<span>10%</span></p>
                            <p>Dietary Fiber 15g<span>60%</span></p>
                            <p>Sugars 1g<span></span></p>
                            <p><b>Protein</b> 18g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>3%</span></h3>
                            <h3>Vitamin B <span>4%</span> || Iron <span>20%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Lentils/Crimson lentil.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Crimson</h2>
                        <p>Petite Crimson Lentils, or "Lens esculenta," are a small, orange to red variety of lentils, averaging about half the size of the standard type. They break down more quickly than other lentils when cooked, making them ideal for
                            thickening soups, stews and sauces. ... The word lentil stems from the Latin "lens."
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>0.3 </span> cup (32g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 110 <span>Calories from Fat 0</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.5g <span>1%</span></p>
                            <p>Saturated Fat 0g<span>0%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>0mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 20g<span>7%</span></p>
                            <p>Dietary Fiber 3g<span>12%</span></p>
                            <p>Sugars 1g<span></span></p>
                            <p><b>Protein</b> 8g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>13%</span></h3>
                            <h3>Vitamin B <span>1%</span> || Iron <span>6%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Lentils/red lentils.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2> Red</h2>
                        <p>The lentil is an edible legume. It is an annual plant known for its lens-shaped seeds. It is about 40 cm tall, and the seeds grow in pods, usually with two seeds in each. As a food crop, the majority of world production comes from
                            Canada and India, producing 58% combined of the world total.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (198g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 226 <span>Calories from Fat 6.8</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.8g <span>1%</span></p>
                            <p>Saturated Fat 1g<span>1%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>471mg<span>20%</span></p>
                            <p><b>Total Carbohydrates</b> 39g<span>13%</span></p>
                            <p>Dietary Fiber 16g<span>64%</span></p>
                            <p>Sugars 2.6g<span></span></p>
                            <p><b>Protein</b>18g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.3%</span> || Calcium <span>2.9%</span></h3>
                            <h3>Vitamin B <span>5%</span> || Iron <span>37%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Lentils/red split lentils.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Split Red</h2>
                        <p>The lentil is an edible legume. It is an annual plant known for its lens-shaped seeds. It is about 40 cm tall, and the seeds grow in pods, usually with two seeds in each. As a food crop, the majority of world production comes from
                            Canada and India, producing 58% combined of the world total.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (198g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 226 <span>Calories from Fat 6.8</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.8g <span>1%</span></p>
                            <p>Saturated Fat 1g<span>1%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>471mg<span>20%</span></p>
                            <p><b>Total Carbohydrates</b> 39g<span>13%</span></p>
                            <p>Dietary Fiber 16g<span>64%</span></p>
                            <p>Sugars 2.6g<span></span></p>
                            <p><b>Protein</b>18g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.3%</span> || Calcium <span>2.9%</span></h3>
                            <h3>Vitamin B <span>5%</span> || Iron <span>37%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Lentils/french lentils.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>French</h2>
                        <p>Premium French Style Lentils are a premium lentil, renowned for their deep nutty flavour and holding their shape when cooked. They are as an excellent source of protein, dietary hand carbohydrates. French Style lentils contain
                            little fat and are a healthy addition to any balanced diet.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (198g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 226 <span>Calories from Fat 6.8</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.8g <span>1%</span></p>
                            <p>Saturated Fat 1g<span>1%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>471mg<span>20%</span></p>
                            <p><b>Total Carbohydrates</b> 39g<span>13%</span></p>
                            <p>Dietary Fiber 16g<span>64%</span></p>
                            <p>Sugars 2.6g<span></span></p>
                            <p><b>Protein</b>18g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.3%</span> || Calcium <span>2.9%</span></h3>
                            <h3>Vitamin B <span>5%</span> || Iron <span>37%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Lentils/green lentils.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Green</h2>
                        <p>Green lentils are rich in antioxidants, iron, and magnesium. They work particularly well over salads and as a warm side, because of their peppery taste. They do take the longest to cook of all the varieties, about 45 minutes, but
                            hold their shape well.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (198g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 226 <span>Calories from Fat 6.8</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.8g <span>1%</span></p>
                            <p>Saturated Fat 1g<span>1%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>471mg<span>20%</span></p>
                            <p><b>Total Carbohydrates</b> 39g<span>13%</span></p>
                            <p>Dietary Fiber 16g<span>64%</span></p>
                            <p>Sugars 2.6g<span></span></p>
                            <p><b>Protein</b>18g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.3%</span> || Calcium <span>2.9%</span></h3>
                            <h3>Vitamin B <span>5%</span> || Iron <span>37%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Lentils/split green lentils.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Split Green</h2>
                        <p>Green lentils are rich in antioxidants, iron, and magnesium. They work particularly well over salads and as a warm side, because of their peppery taste. They do take the longest to cook of all the varieties, about 45 minutes, but
                            hold their shape well.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (198g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 226 <span>Calories from Fat 6.8</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.8g <span>1%</span></p>
                            <p>Saturated Fat 1g<span>1%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>471mg<span>20%</span></p>
                            <p><b>Total Carbohydrates</b> 39g<span>13%</span></p>
                            <p>Dietary Fiber 16g<span>64%</span></p>
                            <p>Sugars 2.6g<span></span></p>
                            <p><b>Protein</b>18g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.3%</span> || Calcium <span>2.9%</span></h3>
                            <h3>Vitamin B <span>5%</span> || Iron <span>37%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Oil seed  -->
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/oil seed/canola seed.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Canola</h2>
                        <p>Brown Flaxseed, also known as linseed, are harvested from the flax plant. Our brown flax seeds, just a little larger than sesame seeds, contain omega-3 fatty acids, lignans, dietary fiber and protein. Add our delicious flax seeds
                            to breads, cookies, cereals and pilafs, or grind them into flaxseed meal!
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (198g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 226 <span>Calories from Fat 6.8</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.8g <span>1%</span></p>
                            <p>Saturated Fat 1g<span>1%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>471mg<span>20%</span></p>
                            <p><b>Total Carbohydrates</b> 39g<span>13%</span></p>
                            <p>Dietary Fiber 16g<span>64%</span></p>
                            <p>Sugars 2.6g<span></span></p>
                            <p><b>Protein</b>18g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.3%</span> || Calcium <span>2.9%</span></h3>
                            <h3>Vitamin B <span>5%</span> || Iron <span>37%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/oil seed/brown flax.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Brown Flax</h2>
                        <p>Brown Flaxseed, also known as linseed, are harvested from the flax plant. Our brown flax seeds, just a little larger than sesame seeds, contain omega-3 fatty acids, lignans, dietary fiber and protein. Add our delicious flax seeds
                            to breads, cookies, cereals and pilafs, or grind them into flaxseed meal!
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (10g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 55 <span>Calories from Fat 39</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 4.3g <span>7%</span></p>
                            <p>Saturated Fat 0.4g<span>2%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>3.1mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 3g<span>1%</span></p>
                            <p>Dietary Fiber 2.8g<span>11%</span></p>
                            <p>Sugars 0.2g<span></span></p>
                            <p><b>Protein</b>18g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>2%</span></h3>
                            <h3>Vitamin B <span>0.1%</span> || Iron <span>3.3%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/oil seed/yellow flax.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Yellow Flax</h2>
                        <p>Brown Flaxseed, also known as linseed, are harvested from the flax plant. Our brown flax seeds, just a little larger than sesame seeds, contain omega-3 fatty acids, lignans, dietary fiber and protein. Add our delicious flax seeds
                            to breads, cookies, cereals and pilafs, or grind them into flaxseed meal!
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (10g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 55 <span>Calories from Fat 39</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 4.3g <span>7%</span></p>
                            <p>Saturated Fat 0.4g<span>2%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>3.1mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 3g<span>1%</span></p>
                            <p>Dietary Fiber 2.8g<span>11%</span></p>
                            <p>Sugars 0.2g<span></span></p>
                            <p><b>Protein</b>18g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>2%</span></h3>
                            <h3>Vitamin B <span>0.1%</span> || Iron <span>3.3%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/oil seed/golden flax.png" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Golden Flax</h2>
                        <p>Brown Flaxseed, also known as linseed, are harvested from the flax plant. Our brown flax seeds, just a little larger than sesame seeds, contain omega-3 fatty acids, lignans, dietary fiber and protein. Add our delicious flax seeds
                            to breads, cookies, cereals and pilafs, or grind them into flaxseed meal!
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (10g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 55 <span>Calories from Fat 39</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 4.3g <span>7%</span></p>
                            <p>Saturated Fat 0.4g<span>2%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>3.1mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 3g<span>1%</span></p>
                            <p>Dietary Fiber 2.8g<span>11%</span></p>
                            <p>Sugars 0.2g<span></span></p>
                            <p><b>Protein</b>18g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>2%</span></h3>
                            <h3>Vitamin B <span>0.1%</span> || Iron <span>3.3%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/oil seed/yellow mustard seed.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Yellow Mustard</h2>
                        <p>Mustard seeds are the small round seeds of various mustard plants. The seeds are usually about 1 to 2 millimetres in diameter and may be colored from yellowish white to black.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> tsp (2g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 10 <span>Calories from Fat 6.5</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.7g <span>1%</span></p>
                            <p>Saturated Fat 0g<span>0%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>0.3mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 0.6g<span>0%</span></p>
                            <p>Dietary Fiber 0.2g<span>1%</span></p>
                            <p>Sugars 0.1g<span></span></p>
                            <p><b>Protein</b>0.5g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>0.4%</span></h3>
                            <h3>Vitamin B <span>0.2%</span> || Iron <span>1%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/oil seed/brown mustard seeds.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Brown Mustard</h2>
                        <p>Mustard seeds are the small round seeds of various mustard plants. The seeds are usually about 1 to 2 millimetres in diameter and may be colored from yellowish white to black.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> tsp (2g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 10 <span>Calories from Fat 6.5</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.7g <span>1%</span></p>
                            <p>Saturated Fat 0g<span>0%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>0.3mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 0.6g<span>0%</span></p>
                            <p>Dietary Fiber 0.2g<span>1%</span></p>
                            <p>Sugars 0.1g<span></span></p>
                            <p><b>Protein</b>0.5g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>0.4%</span></h3>
                            <h3>Vitamin B <span>0.2%</span> || Iron <span>1%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/oil seed/hemp seed.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Hemp Seed</h2>
                        <p>Hemp seeds are a great source of magnesium, which helps regulate your heartbeat and is linked to the prevention of coronary heart disease. They also contain Linoleic acid, which one study found reduced participants' cholesterol
                            levels by 15% and may act to reduce blood pressure.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>3 </span> tsp (30g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 166 <span>Calories from Fat 132</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 15g <span>23%</span></p>
                            <p>Saturated Fat 1.4g<span>7%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>1.5mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 2.6g<span>1%</span></p>
                            <p>Dietary Fiber 1.2g<span>5%</span></p>
                            <p>Sugars 0.5g<span></span></p>
                            <p><b>Protein</b>0.5g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.1%</span> || Calcium <span>1.6%</span></h3>
                            <h3>Vitamin B <span>0.3%</span> || Iron <span>13%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/oil seed/sunflower seeds.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Sunflower Seed</h2>
                        <p>The sunflower seed is the fruit of the sunflower. There are three types of commonly used sunflower seeds: linoleic, high oleic, and sunflower oil seeds. Each variety has its own unique levels of monounsaturated, saturated, and
                            polyunsaturated fats. The information in this article refers mainly to the linoleic variety.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1</span> tsp (128g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 699 <span>Calories from Fat 574</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 64g <span>98%</span></p>
                            <p>Saturated Fat 6.7g<span>34%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>7690mg<span>320%</span></p>
                            <p><b>Total Carbohydrates</b> 20g<span>7%</span></p>
                            <p>Dietary Fiber 12g<span>48%</span></p>
                            <p>Sugars 0.5g<span></span></p>
                            <p><b>Protein</b>0.5g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.2%</span> || Calcium <span>6.9%</span></h3>
                            <h3>Vitamin B <span>3%</span> || Iron <span>27%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/oil seed/coriander seeds.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Coriander seeds</h2>
                        <p>
                            Coriander is an annual herb in the family Apiaceae. It is also known as Chinese parsley, dhania or cilantro. All parts of the plant are edible, but the fresh leaves and the dried seeds are the parts most traditionally used in cooking.

                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1</span> tsp (1.8g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 5.4 <span>Calories from Fat 2.9</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.3g <span>0%</span></p>
                            <p>Saturated Fat 0g<span>0%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>0.6mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 1g<span>0%</span></p>
                            <p>Dietary Fiber 0.8g<span>3%</span></p>
                            <p>Sugars 0.5g<span></span></p>
                            <p><b>Protein</b>0.2g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.%</span> || Calcium <span>1%</span></h3>
                            <h3>Vitamin B <span>0.6%</span> || Iron <span>1.6%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/oil seed/rape seeds.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Rape Seeds</h2>
                        <p>
                            Rapeseed is a bright-yellow flowering member of the family Brassicaceae, cultivated mainly for its oil-rich seed, which naturally contains appreciable amounts of erucic acid.

                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1</span> tsp (1.8g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 5.4 <span>Calories from Fat 2.9</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.3g <span>0%</span></p>
                            <p>Saturated Fat 0g<span>0%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>0.6mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 1g<span>0%</span></p>
                            <p>Dietary Fiber 0.8g<span>3%</span></p>
                            <p>Sugars 0.5g<span></span></p>
                            <p><b>Protein</b>0.2g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.%</span> || Calcium <span>1%</span></h3>
                            <h3>Vitamin B <span>0.6%</span> || Iron <span>1.6%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/oil seed/sesame seeds.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Sesame Seeds</h2>
                        <p>
                            Sesame is a flowering plant in the genus Sesamum, also called benne. Numerous wild relatives occur in Africa and a smaller number in India. It is widely naturalized in tropical regions around the world and is cultivated for its edible seeds, which grow
                            in pods.

                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1</span> oz (28g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 160 <span>Calories from Fat 122</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 14g <span>22%</span></p>
                            <p>Saturated Fat 1.9g<span>10%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>3.1mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 7.3g<span>2%</span></p>
                            <p>Dietary Fiber 4g<span>16%</span></p>
                            <p><b>Protein</b>0.2g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.1%</span> || Calcium <span>22%</span></h3>
                            <h3>Vitamin B <span>0%</span> || Iron <span>23%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/oil seed/canary seeds.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Canary</h2>
                        <p>
                            It reportedly helps gout, edema, gastritis and stomach ulcers. Moreover, the canary concoction is said to aid fat burning and helps purify fat in veins, arteries, or simply fat deposits which allegedly makes it a great remedy for obesity.

                        </p>
                        <p>
                            Baked goods and mixes for bagels, biscuits, breads, rolls, cookies, crackers, doughnuts, pancakes, waffles, muffins, pies, breakfast cereals, flours and brans. It can be sprinkled like sesame seed and can also be used in energy, meal replacement, and
                            fortified bars; granola and cereal bars; pasta; and snack foods.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1</span> oz (28g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 160 <span>Calories from Fat 122</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 14g <span>22%</span></p>
                            <p>Saturated Fat 1.9g<span>10%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>3.1mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 7.3g<span>2%</span></p>
                            <p>Dietary Fiber 4g<span>16%</span></p>
                            <p><b>Protein</b>0.2g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.1%</span> || Calcium <span>22%</span></h3>
                            <h3>Vitamin B <span>0%</span> || Iron <span>23%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/oil seed/Niger seeds.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Niger Seeds</h2>
                        <p>
                            Guizotia abyssinica is an erect, stout, branched annual herb, grown for its edible oil and seed. Its cultivation originated in the Eritrean and Ethiopian highlands, and has spread to other parts of Ethiopia.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> tsp (2g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 10 <span>Calories from Fat 6.5</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.7g <span>1%</span></p>
                            <p>Saturated Fat 0g<span>0%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>0.3mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 0.6g<span>0%</span></p>
                            <p>Dietary Fiber 0.2g<span>1%</span></p>
                            <p>Sugars 0.1g<span></span></p>
                            <p><b>Protein</b>0.5g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>0.4%</span></h3>
                            <h3>Vitamin B <span>0.2%</span> || Iron <span>1%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/oil seed/oriental mustard seed.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Oriental Mustard</h2>
                        <p>Mustard seeds are the small round seeds of various mustard plants. The seeds are usually about 1 to 2 millimetres in diameter and may be colored from yellowish white to black.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> tsp (2g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 10 <span>Calories from Fat 6.5</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.7g <span>1%</span></p>
                            <p>Saturated Fat 0g<span>0%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>0.3mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 0.6g<span>0%</span></p>
                            <p>Dietary Fiber 0.2g<span>1%</span></p>
                            <p>Sugars 0.1g<span></span></p>
                            <p><b>Protein</b>0.5g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>0.4%</span></h3>
                            <h3>Vitamin B <span>0.2%</span> || Iron <span>1%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Peas -->
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Peas/green peas.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Green</h2>
                        <p>The pea is most commonly the small spherical seed or the seed-pod of the pod fruit Pisum sativum. Each pod contains several peas, which can be green or yellow. Botanically, pea pods are fruit, since they contain seeds and develop
                            from the ovary of a flower
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> tsp (160g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 134 <span>Calories from Fat 3.2</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.3g <span>1%</span></p>
                            <p>Saturated Fat 0.1g<span>0%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>4.8mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 25g<span>8%</span></p>
                            <p>Dietary Fiber 8.8g<span>35%</span></p>
                            <p>Sugars 0.1g<span></span></p>
                            <p><b>Protein</b>0.5g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>26%</span> || Calcium <span>3.3%</span></h3>
                            <h3>Vitamin B <span>38%</span> || Iron <span>14%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Peas/green split peas.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Split Green</h2>
                        <p>Split peas are an agricultural or culinary preparation consisting of the dried, peeled and split seeds of Pisum sativum, the pea.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> tsp (160g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 134 <span>Calories from Fat 3.2</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.3g <span>1%</span></p>
                            <p>Saturated Fat 0.1g<span>0%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>4.8mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 25g<span>8%</span></p>
                            <p>Dietary Fiber 8.8g<span>35%</span></p>
                            <p>Sugars 0.1g<span></span></p>
                            <p><b>Protein</b>0.5g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>26%</span> || Calcium <span>3.3%</span></h3>
                            <h3>Vitamin B <span>38%</span> || Iron <span>14%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Peas/yellow peas.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Yellow</h2>
                        <p>Split peas are an agricultural or culinary preparation consisting of the dried, peeled and split seeds of Pisum sativum, the pea.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> tsp (160g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 134 <span>Calories from Fat 3.2</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.3g <span>1%</span></p>
                            <p>Saturated Fat 0.1g<span>0%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>4.8mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 25g<span>8%</span></p>
                            <p>Dietary Fiber 8.8g<span>35%</span></p>
                            <p>Sugars 0.1g<span></span></p>
                            <p><b>Protein</b>0.5g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>26%</span> || Calcium <span>3.3%</span></h3>
                            <h3>Vitamin B <span>38%</span> || Iron <span>14%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Peas/split yellow peas.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Split Yellow</h2>
                        <p>Split peas are an agricultural or culinary preparation consisting of the dried, peeled and split seeds of Pisum sativum, the pea.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> tsp (160g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 134 <span>Calories from Fat 3.2</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.3g <span>1%</span></p>
                            <p>Saturated Fat 0.1g<span>0%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>4.8mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 25g<span>8%</span></p>
                            <p>Dietary Fiber 8.8g<span>35%</span></p>
                            <p>Sugars 0.1g<span></span></p>
                            <p><b>Protein</b>0.5g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>26%</span> || Calcium <span>3.3%</span></h3>
                            <h3>Vitamin B <span>38%</span> || Iron <span>14%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Peas/marrowfat peas.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Marrowfat</h2>
                        <p>Marrowfat peas are green mature peas that have been allowed to dry out naturally in the field, rather than being harvested while still young like the normal .
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> tsp (90g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 59 <span>Calories from Fat 2.7</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.3g <span>0%</span></p>
                            <p>Saturated Fat 0.1g<span>1%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>124mg<span>5%</span></p>
                            <p><b>Total Carbohydrates</b> 8.2g<span>3%</span></p>
                            <p>Dietary Fiber 2.9g<span>12%</span></p>
                            <p>Sugars 1.3g<span></span></p>
                            <p><b>Protein</b>4.4g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Peas/Pigeon-Peas.png" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Pigeon</h2>
                        <p>The pigeon pea, also known as arhar, tur, red gram, or gungo peas in Jamaica is a perennial legume from the family Fabaceae. Since its domestication in the Indian subcontinent at least 3,500 years ago, its seeds have become a common
                            food in Asia, Africa, and Latin America.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (168g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 203 <span>Calories from Fat 5.7</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.6g <span>1%</span></p>
                            <p>Saturated Fat 0.1g<span>1%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>8.4mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 39g<span>13%</span></p>
                            <p>Dietary Fiber 11g<span>44%</span></p>
                            <p><b>Protein</b>11g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.1%</span> || Calcium <span>5.6%</span></h3>
                            <h3>Vitamin B <span>0%</span> || Iron <span>10%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Peas/maple peas.jpg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Maple</h2>
                        <p>The pigeon pea, also known as arhar, tur, red gram, or gungo peas in Jamaica is a perennial legume from the family Fabaceae. Since its domestication in the Indian subcontinent at least 3,500 years ago, its seeds have become a common
                            food in Asia, Africa, and Latin America.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> cup (168g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 203 <span>Calories from Fat 5.7</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.6g <span>1%</span></p>
                            <p>Saturated Fat 0.1g<span>1%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>8.4mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 39g<span>13%</span></p>
                            <p>Dietary Fiber 11g<span>44%</span></p>
                            <p><b>Protein</b>11g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0.1%</span> || Calcium <span>5.6%</span></h3>
                            <h3>Vitamin B <span>0%</span> || Iron <span>10%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Corn -->
        <div id="openModal-about " class="modalDialog ">
            <div>
                <a href="#close " title="Close " class="close ">X</a>
                <div class="modaldeatiles ">
                    <div class="ima ">
                        <img class="figureimg " src="image/Corn/yellow corn.jpeg" alt=" ">
                    </div>
                    <div class="modaldes ">
                        <h2>Yellow Corn</h2>
                        <p>Mustard seeds are the small round seeds of various mustard plants. The seeds are usually about 1 to 2 millimetres in diameter and may be colored from yellowish white to black.
                        </p>
                    </div>
                    <div class="modalnuration">
                        <h2>Nutrition</h2>
                        <div class="nutrition">
                            <h6>Serving Size Per <span>1 </span> tsp (2g)</h6>
                            <h2 class="bottomline"></h2>
                            <p>Amount Per Serving</p>
                            <p>Calories 10 <span>Calories from Fat 6.5</span></p>
                            <p style="text-align: right;"><b>% Daily Value*</b></p>
                            <p><b>Total Fat</b> 0.7g <span>1%</span></p>
                            <p>Saturated Fat 0g<span>0%</span></p>
                            <p>Trans Fat 0g<span></span></p>
                            <p><b>Sodium</b>0.3mg<span>0%</span></p>
                            <p><b>Total Carbohydrates</b> 0.6g<span>0%</span></p>
                            <p>Dietary Fiber 0.2g<span>1%</span></p>
                            <p>Sugars 0.1g<span></span></p>
                            <p><b>Protein</b>0.5g<span></span></p>
                            <h2 class="bottomline"></h2>
                            <h3>Vitamin A <span>0%</span> || Calcium <span>0.4%</span></h3>
                            <h3>Vitamin B <span>0.2%</span> || Iron <span>1%</span></h3>
                            <h5>Based on a regular 2000 calorie diet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= FOOTER =================== -->
    <section id="footer">
        <div class="footer">
            <div class="translate">
                <div class="language">
                    <h3>Translate :</h3>
                    <div id="language"></div>
                    <!-- <ul>
                        <li>
                            <a href=""> Hindi</a>
                        </li>
                        <li>
                            <a href="">English</a>
                        </li>
                        <li>
                            <a href="">Urdu</a>
                        </li>
                        <li>
                            <a href="">French</a>
                        </li>
                        <li>
                            <a href="">Spanish</a>
                        </li>
                        <li>
                            <a href="">Arabic</a>
                        </li>
                        <li>
                            <a href="">Turkish</a>
                        </li>
                    </ul> -->
                </div>
                <div class="copyRight">
                    <p>Copyright © KRUZ GRAINS & PULSES</p>
                </div>
                <div class="social">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-linkedin"></i>
                </div>
            </div>
        </div>
    </section>
    <a href="#navbar " class="back-to-top "><i class="fa fa-arrow-up "></i></a>

    <!-- =========================FONT AEWSOME =================== -->
    <script src="https://kit.fontawesome.com/27aef624bb.js " crossorigin="anonymous "></script>
    <!-- ========================= Google translate =================== -->
    <script type="text/javascript " src="js/language.js "></script>
    <!-- =========================Custom Java Script =================== -->
    <script src="js/script.js "></script>

</body>

</html>