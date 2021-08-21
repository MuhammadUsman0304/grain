<?php
session_start();
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KGP || Admin </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-dark text-white">
<section class="mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if (isset($_SESSION['status'])) {
					echo $_SESSION['status'];
					unset($_SESSION['status']);
				} ?>
				<div class="card shadow-lg text-dark">
					<div class="card-header">
						<h3>All Buyers</h3>
					</div>
					<div class="card-body text-center">
						<table class="table table-responsive table-hover table-bordared">
							<thead>
								<tr>
									<th>Buyer Id</th>
									<th>Buyer Name</th>
									<th>Surname</th>
									<th>Company Name</th>
									<th>Email</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								 $query = "SELECT * FROM `buyers`";
								 $result = mysqli_query($con, $query);
								 if ($row = mysqli_num_rows($result)>0) {
								 	while($data = mysqli_fetch_assoc($result)){
								?>
								<tr>
									<td><?php echo htmlentities($data['buyer_id']); ?></td>
									<td><?php echo htmlentities($data['fullname']); ?></td>
									<td><?php echo htmlentities($data['surename']); ?></td>
									<td><?php echo htmlentities($data['companyName']); ?></td>
									<td><?php echo htmlentities($data['email']); ?></td>
									<td><a href="handler/delete_buyer.php?bid=<?php echo htmlentities($data['buyer_id']); ?>"><i class="fa fa-trash"></i></a></td>
								</tr>
								<?php
								 	}
								 }else{
								 	echo  "No Buyer Registred yet!";
								 }
								 ?>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<center>
	<a href="../../index.php?id="><button type="button" class="btn btn-info btn-lg">< Go Back</button></a>
</center>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
</script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>