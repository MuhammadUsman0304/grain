<?php
session_start();
require_once('config.php');
$success_message = '';
$error_message = '';
if (isset($_POST['add_cate'])) {
	$cate_name = $_POST['cate_name'];
	$cate_desc = $_POST['cate_desc'];

	$query = "INSERT INTO `categories`(`CategoryName`, `category_desc`) VALUES (?,?)";
	$stmt = mysqli_prepare($con, $query) or die(mysqli_error($con));
	if (is_object($stmt)) {
		$stmt->bind_param('ss', $cate_name, $cate_desc);
		$stmt->execute();
		$success_message = "<div class='alert alert-success'>Category Added Success...</div>";
	}else{
		$error_message = "<div class='alert alert-success'>Oh Snap! Something went wrong</div>";
	}
	$stmt->close();
	$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KGP || Admin </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
<section class="mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php 
				 echo $success_message;
				 echo $error_message;
				?>
				<div class="card shadow-lg text-dark">
					<div class="card-header">
						<h3>Add New Category<span><a href="manage_category.php" class="float-right"><button type="button" class="btn btn-dark btn-lg">View ALL Categories</button></a></span></h3>
					</div>
					<div class="card-body text-center">
						<form class="form" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
							<div class="row">
									<div class="col-6">
										<div class="form-group">
											<input type="text" name="cate_name" placeholder="Category Name" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<input type="text" name="cate_desc" placeholder="Category Descripation" class="form-control">
										</div>
									</div>
							</div>
							<div class="form-group">
								<input type="submit" name="add_cate" class="btn btn-dark btn-lg" value="Add Category">
							</div>
						</form>
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