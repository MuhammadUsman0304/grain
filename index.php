<?php 
 session_start();
 // including database file
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
            <a href="index.html"><img src="image/logo.png" alt=""></a>
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
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="careers.html">CAREERS</a>
                </li>
                <li class="subMenu">
                    <a href="pro.html">PRODUCTS  </a>
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
    <!-- ========================= Slider =================== -->
    <section id="slider">
        <div class="img-slider">
            <div class="slide " style="background-image: url('image/sl2.jpg');background-size: cover;">
                <div class="sliderLinner">
                    <div class="info ">
                        <h1>We Care</h1>
                        <h5>We care about the people we do business with.
                        </h5>
                        <button><a href="#">OUR EXPERTISE</a></button>
                    </div>
                    <img src="image/slidesmall.jpg" alt="">
                </div>
            </div>
            <div class="slide active" style="background-image: url('image/sl1.jpg');background-size: cover;">
                <div class="sliderLinner">
                    <div class="info">
                        <h1>Quality Products</h1>
                        <h5>We make sure our products meet industry standards.</h5>
                        <button><a href="pro.html">OUR PRODUCTS</a></button>
                    </div>
                    <img src="image/products/grains400-500.jpg" alt="">
                </div>
            </div>
            <div class="slide " style="background-image: url('image/baner3.jpg');background-size: cover;">
                <div class="sliderLinner">
                    <div class="info">
                        <h1>Nutrition</h1>
                        <h5>Experience the high nutritional value our Canadian growers are able to offer in Canada.
                        </h5>
                        <button><a href="about.html">ABOUT US</a></button>
                    </div>
                    <img src="image/products/nutrition400-500.jpg" alt="">
                </div>
            </div>
            <div class="navigation">
                <div class="btn "></div>
                <div class="btn active"></div>
                <div class="btn  "></div>
            </div>
        </div>
    </section>

    <!-- ========================= PRODUCTS =================== -->
    <section id="Products"></section>
    <div class="products" style="">
        <div class="linner">
            <div class="pro-title">
                <h1 style="color: black;">PRODUCTS</h1>
            </div>
            <div class="productsCategory">
                <div class="SingelProductsCategory homeproduct">
                    <figure>
                        <img class="figureimg" src="image/beans.jpg" alt="">
                        <figcaption>
                            <h5 class="gallary-title"><a href="pro.html">Beans </a></h5>
                        </figcaption>
                    </figure>
                </div>
                <div class="SingelProductsCategory homeproduct">
                    <figure>
                        <img class="figureimg" src="image/grains.jpg" alt="">
                        <figcaption>
                            <h5 class="gallary-title"><a href="pro.html">Grains </a></h5>
                        </figcaption>
                    </figure>
                </div>
                <div class="SingelProductsCategory homeproduct">
                    <figure>
                        <img class="figureimg" src="image/lentils.jpg" alt="">
                        <figcaption>
                            <h5 class="gallary-title"><a href="pro.html">Lentils </a></h5>
                        </figcaption>
                    </figure>
                </div>
                <div class="SingelProductsCategory homeproduct">
                    <figure>
                        <img class="figureimg" src="image/peas.jpg" alt="">
                        <figcaption>
                            <h5 class="gallary-title"><a href="pro.html">Peas </a></h5>
                        </figcaption>
                    </figure>
                </div>
                <div class="SingelProductsCategory homeproduct">
                    <figure>
                        <img class="figureimg" src="image/oilseed.jpg" alt="">
                        <figcaption>
                            <h5 class="gallary-title"><a href="pro.html">Oil Seed </a></h5>
                        </figcaption>
                    </figure>
                </div>
                <div class="SingelProductsCategory homeproduct">
                    <figure>
                        <img class="figureimg" src="image/corn.jpg" alt="">
                        <figcaption>
                            <h5 class="gallary-title"><a href="pro.html">Corn </a></h5>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- =======================  About Us ===================== -->
    <section id="about">
        <div class="about">
            <h2>About us</h2>
            <div class="aboutUS">
                <div class="ab-logo">
                    <img src="image/we care grains.jpg" alt="">
                </div>
                <div class="ab-text">
                    <h2>KRUZ GRAINS & PULSES</h2>
                    <p>With the rising consumerism peaking to even higher heights in the 21st century, it is prudent to ensure that you are consuming the right products; as the old adage goes, health is wealth and that is where Kruz grains and pulses comes in. 
The propelled demand for food has led to malicious trends in the agriculture  industry where unethical participants deliver low quality grains to consumers, in worst case-scenarios contaminated foods or synthetic grains, something you don't want to be a victim of considering your health is at stake. Kruz Grains &amp; Pulses aims to mitigate the mentioned problems among other issues in the industry by providing quality grains and pulses sorted carefully from the best producers in Canada. </p>
<h2>Why Kruz grains and pulses?</h2>
<p>Kruz grains and pulses has created a standard of quality in both product and trade execution unmatched by any other supplier in Canada, establishing a specialty market within the Canadian Grain and Pulse Industry. Kruz grains and pulses maintains excellent ties with all parties in the industry, from producers to processors, to end consumers, with many long-standing clients and suppliers. Kruz grains and pulses has built a reputation for honesty, trustworthiness, and integrity, and has established itself as a market leader.</p><p>
Kruz grains and pulses is committed to ensuring that you get value for your money by delivering quality grains that offer the required nutritional value. This is why we are your top priority grain and pulses supplier:</p>

                    <a class="aboutLearn" href="about.html">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================  contact us ===================== -->
    <section id="contact">
        <div class="contactus">
            <div class="contactInfo">
                <i class="fa fa-map-marker-alt"></i>
                <h6 class="locationLine"></h6>
                <h2>Canada</h2>
                <h6 class="locationLine"></h6>


                <h5 class="address"> 23 Rue Bourque <br>Gatineau Quebec <br> J8Y 1X2</h5>
                <h5 class="fax"> <span><b>Fax : </b></span>819-205-2889 </h5>
                <h5 class="phone"> <span><b>Phone :</b> </span>613-799-2882 </h5>
                <h5 class="email"><a style="text-decoration: none;color: #676767;" href="mailto:info.kruzbox@gmail.com">info.kruzbox@gmail.com</a> </h5>
            </div>
            <div class="map">
                <div class="googlemap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2252.5913723946815!2d-75.73653438493307!3d45.44286607910071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce049e5d674d6f%3A0x7039b5e1b9fd596b!2s23%20Rue%20Bourque%2C%20Gatineau%2C%20QC%20J8Y%201X2%2C%20Canada!5e1!3m2!1sen!2sbd!4v1624437216700!5m2!1sen!2sbd"
                        width="650" height="370" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
    <a href="#navbar" class="back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- =========================FONT AEWSOME =================== -->
    <script src="https://kit.fontawesome.com/27aef624bb.js" crossorigin="anonymous"></script>
    <!-- ========================= Google translate =================== -->
    <script type="text/javascript" src="js/language.js"></script>
    <!-- =========================Custom Java Script =================== -->
    <script src="js/script.js"></script>

</body>

</html>