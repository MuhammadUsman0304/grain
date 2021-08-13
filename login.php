<?php 
session_start();
if (isset($_SESSION['username'])) {
     header('location: user-dash/dashboard.php');
 }
 // including database file
 require_once 'template/pages/samples/config.php';

 $error_message = '';
 $success_message = '';
 if (isset($_POST['login'])) {
 	$surename = $_POST['surename'];
 	$password = $_POST['password'];
 	$query = "SELECT * FROM `buyers` WHERE `surename` = ? AND binary `password` = ?";
 	$stmt = mysqli_prepare($con,$query) or die($con);
 	if (is_object($stmt)) {
 		$stmt->bind_param('ss',$surename, $password);
 		$stmt->execute();
 		$result = $stmt->get_result();
 		$row = $result->num_rows;
 		if ($row > 0) {
 			$data = $result->fetch_assoc();
 			$_SESSION['buyer_id'] = $data['buyer_id'];
 			$_SESSION['username'] = $data['surename'];
 			$_SESSION['email'] = $data['email'];
 			header('location: index.php');
 			exit();
 		}else{
 			$error_message = "<div class='alert alert-danger'>username or password is wrong</div>";
 		}
 		$stmt->free_result();
 		$stmt->close();
 		$con->close();
 	}
 }
 
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
     <!-- ================= Navbar ================= -->
    <section id="navbar">
        <div class="headline">
            <div class="brandname">
                <div class="login">
                  <a href="register.php"><i class="fa fa-user-plus"></i> Register</a> |
                   <a href="login.php"><i class="fa fa-sign-in"></i> Login</a>
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

    <section class="form mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    echo $success_message;
                                      
                    echo $error_message;
                    ?>
                    <div class="card shadow p-3 mb-5 rounded">
                        <div class="card-header bg-dark">
                            <h3 class="text-center text-white">Login Now</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Enter Email or Username</label>
                                            <input type="text" name="surename" class="form-control" required autocomplete="false">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Enter Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                                <div class="form-group">
                                <input type="submit" name="login" class="btn btn-dark btn-lg" value="Login">
                                </div>
                            </form>
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
    <!-- =========================bootstrap =================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>