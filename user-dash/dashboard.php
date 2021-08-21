<?php 
 session_start();
 // including database file
 require_once '../template/pages/samples/config.php';
 if (!isset($_SESSION['username'])) {
     header('location: ../login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <!-- ================= Favicon ================= -->
    <link rel="shortcut icon" href="../Image/logo.png" type="image/x-icon">
    <!-- ================= Custom Css ================= -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<!-- ================= Navbar ================= -->
    <section id="navbar">
        <!-- Headline -->
        <div class="headline">
            <div class="brandname">
              <div class="login">
                <?php if (isset($_SESSION['username'])) {
                    echo '<h3><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a></h3>';
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
            <a href="../index.php"><img src="../image/logo.png" alt=""></a>
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
                    <a href="../index.php">Home</a>
                </li>
                <li>
                    <a href="../careers.html">CAREERS</a>
                </li>
                <li class="subMenu">
                    <a href="../pro.html">PRODUCTS  </a>
                </li>
                <li>
                    <a href="../about.html">About Us</a>
                </li>
                <li>
                    <a href="../expertise.html">Expertise</a>
                </li>
                <li>
                    <a href="../contact.html">Contact</a>
                </li>
            </ul>
        </nav>
    </section>
    
    <section class="mt-5 mb-5">
        <div class="container">
            <?php 
              if (isset($_SESSION['status'])) {
                echo $_SESSION['status'];
                unset($_SESSION['status']);
               }
            ?>
    <div class="row">
        <div class="col-md-4">
            <aside>
                <div class="card text-center shadow p-3 mb-5 rounded">
                    <div class="card-header bg-dark text-white">
                        <h3><?php echo $_SESSION['username']; ?>'s Dashbaord</h3>
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <p><i class="fa fa-hand-o-right"></i> <a href="contact-us.php" class="text-dark" style="text-decoration: none;"> Request Information</a></p>
                            <hr>
                            <p><i class="fa fa-hand-o-right"></i> <a href="logout.php" class="text-dark" style="text-decoration: none;"> Log Out</a></p>
                            <hr>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <div class="col-md-8">
            <?php 
             $username = $_SESSION['username'];
             $query = "SELECT * FROM `buyers` WHERE `surename` = '$username'";
             $result = mysqli_query($con, $query) or die(mysqli_error($con));
             if ($row = mysqli_num_rows($result)>0) {
                 while ($data = mysqli_fetch_assoc($result)) {
            ?>
               <div class="card shadow p-3 mb-5 rounded">
                <div class="card-header bg-dark text-white">
                    <h3>Your Profile Info</h3>
                </div>
                <div class="card-body">
                    <form class="form" method="post" action="update_profile.php">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="hidden" name="buyer_id" class="form-control" value="<?php echo htmlentities($data['buyer_id']) ?>">
                            <input type="text" name="fname" class="form-control" value="<?php echo htmlentities($data['fullname']) ?>">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="uname" class="form-control" value="<?php echo htmlentities($data['surename']) ?>">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="cname" class="form-control" value="<?php echo htmlentities($data['companyName']) ?>">
                        </div>
                        <div class="form-group">
                            <label>Official Email </label>
                            <input type="email" name="email" class="form-control" value="<?php echo htmlentities($data['email']) ?>">
                        </div>
                        <input type="submit" name="update" class="btn btn-dark btn-lg" value="Update Profile">
                    </form>
                </div>
            </div>
            <?php 
                 }
             }
            ?>
            
        </div>
    </div> 
</div>
    </section>
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- =========================FONT AEWSOME =================== -->
<script src="https://kit.fontawesome.com/27aef624bb.js" crossorigin="anonymous"></script>
<!-- ========================= Google translate =================== -->
<script type="text/javascript" src="../js/language.js"></script>
<!-- =========================Custom Java Script =================== -->
<script src="../js/script.js"></script>
</body>
</html>