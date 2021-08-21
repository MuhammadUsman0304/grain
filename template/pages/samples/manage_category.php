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
				<div class="card shadow-lg text-dark">
					<div class="card-header">
						<h3>All Categories<span><a href="add_new_category.php" class="float-right"><button type="button" class="btn btn-dark btn-lg">Add New Category</button></a></span></h3>
					</div>
					<div class="card-body text-center">
						<table class="table table-responsive table-hover table-bordared">
							<thead>
								<tr>
									<th>Category Name</th>
									<th>Category Descripation</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								 // fetching categories 
								  $query = "SELECT * FROM categories";
								  $result = mysqli_query($con, $query) or die(mysqli_error($con));
								  if ($row = mysqli_num_rows($result)>0) {
								  	while($data = mysqli_fetch_assoc($result)){
								  ?>
								   <tr>
									 <td><?php echo htmlentities($data['CategoryName']); ?></td>
									 <td><?php echo htmlentities($data['category_desc']); ?></td>
									 <td><a href="handler/delete_cate.php?cate_id=<?php echo htmlentities($data['cate_id']); ?>"><i class="fa fa-trash"></i></a></td>
						     	   </tr>
								 <?php
								  	}
								  }else{
								  	echo "<div class='alert alert-inof'>no category found!</div>";
								  }
								?>
								
							</tbody>
						</table>
						<?php if (isset($_SESSION['status'])) {
							echo $_SESSION['status'];
							unset($_SESSION['status']);
						} ?>
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