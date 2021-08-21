<?php
session_start();
require_once 'config.php';
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
				<div class="card shadow-lg text-dark">
					<div class="card-header">
						<h3>Add New Product<span><a href="manage_site_front_product.php" class="float-right"><button type="button" class="btn btn-dark btn-lg">View ALL Products</button></a></span></h3>
					</div>
					<div class="card-body text-center">
						<form class="form" method="post" action="handler/add_new_product.php" enctype="multipart/form-data">
							<div class="row">
									<div class="col-6">
										<div class="form-group">
											<select class="form-control" name="category">
												<option value="#">Food Category</option>
												<?php
												 $qry = "SELECT * FROM `categories`";
												 $result = mysqli_query($con, $qry);
												 if ($row = mysqli_num_rows($result)>0) {
												 	while ($data = mysqli_fetch_assoc($result)) {
												?>
												<option value="<?php echo $data['cate_id'] ;?>"><?php echo $data['CategoryName']; ?></option>
												<?php
												 	}
												 }else{
												 	echo "no category found";
												 }
												?>
												
											</select>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<input type="text" name="produc_name" placeholder="Product Name" class="form-control">
										</div>
									</div>
							</div>
							<div class="row">
									<div class="col-6">
										<div class="form-group">
											<input type="text" name="produc_desc" placeholder="Product Descripation" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<input type="file" name="produc_img" class="form-control">
										</div>
									</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-12">
									<h3 class="text-center">Pricing & Shipping Details</h3>
								</div>
							</div>
							<div class="row">
								<div class="col-4">
									<div class="form-group">
									<input type="checkbox" name="shipping" id="shipping" onchange="shipping_Function()"> Add Shipping Details
									<input type="text" class="form-control shipping" name="continr_size" placeholder="Container Size"><br>
									<input type="text" name="shipping_short_note" class="form-control shipping" placeholder="Short note if any">
								    </div>
								</div>
								<div class="col-4">
									<div class="form-group">
									<input type="checkbox" name="cost" id="cost" onchange="cost_function()"> Add Cost Price
									<input type="text" class="form-control cost" name="cost_price" placeholder="Cost Price"><br>
									<input type="text" name="cost_short_note" class="form-control cost" placeholder="Short note if any">
								    </div>
								</div>
								<div class="col-4">
									<div class="form-group">
									<input type="checkbox" name="sale" id="sale" onchange="sale_function()"> Add Sale Price
									<input type="text" class="form-control sale" name="sale_price" placeholder="Sale Price"><br>
									<input type="text" name="sale_short_note" class="form-control sale" placeholder="Short note if any">
								    </div>
								</div>
							</div>
							<hr>
							<hr>
							<div class="row">
								<div class="col-12">
									<h3 class="text-center">Nutration Detsils</h3>
								</div>
							</div>
							<hr>
							<div class="row">
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="serving_size" placeholder="Serving size e.g 100g" class="form-control">
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="calories" placeholder="Calories e.g 209" class="form-control">
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="calories_from_fat" placeholder="Calories from Fat e.g 7.2" class="form-control">
										</div>
									</div>
							</div>
							<div class="row">
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="total_fat" placeholder="Total Fat e.g 0.8" class="form-control">
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="total_fat_percent" placeholder="Totla Fat e.g 1%" class="form-control">
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="saturated_fat" placeholder="Saturated Fat e.g 0.3g" class="form-control">
										</div>
									</div>
							</div>
							<div class="row">
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="saturated_fat_percent" placeholder="Saturated Fat e.g 1%" class="form-control">
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="trans_fat" placeholder="trans Fat e.g 0.1g" class="form-control">
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="trans_fat_percent" placeholder="trans Fat e.g 0%" class="form-control">
										</div>
									</div>
							</div>
							<div class="row">
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="sodium_fat" placeholder="sodium Fat e.g 3.0mg" class="form-control">
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="sodium_fat_percent" placeholder="sodium Fat e.g 0%" class="form-control">
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="carbo_fat" placeholder="Carbohydrates e.g 37g" class="form-control">
										</div>
									</div>
							</div>
							<div class="row">
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="carbo_fat_percent" placeholder="Carbohydrates e.g 20%" class="form-control">
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="dietry_fiber" placeholder="Dietry Fiber e.g 12g" class="form-control">
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="dietry_fiber_percent" placeholder="Carbohydrates e.g 10%" class="form-control">
										</div>
									</div>
							</div>
							<div class="row">
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="protien" placeholder="Protien e.g 12g" class="form-control">
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="protien_percent" placeholder="Protien  e.g 4%" class="form-control">
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="vitamin_a" placeholder="Vitamin A e.g 0%" class="form-control">
										</div>
									</div>
							</div>
							<div class="row">
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="vitamin_b" placeholder="Vitamin B e.g 0%" class="form-control">
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="calcium" placeholder="Calcium   e.g 4%" class="form-control">
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<input type="text" name="iron" placeholder="Iron  e.g 0%" class="form-control">
										</div>
									</div>
							</div>
							<div class="form-group">
								<input type="submit" name="add_pro" class="btn btn-dark btn-lg" value="Add Product">
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
<script type="text/javascript">
	// managing shipping details fields
	$('.shipping').css('display', 'none');
	function shipping_Function(){
		if ($('#shipping').prop('checked')) {
			$('.shipping').css('display', 'block');
		}else{
			$('.shipping').css('display', 'none');
		}
	}
	// now managing cost price fileds
	$('.cost').css('display', 'none');
	function cost_function(){
		if ($('#cost').prop('checked')) {
			$('.cost').css('display', 'block');
		}else{
			$('.cost').css('display', 'none');
		}
	}
	// now managing sale price fields
	$('.sale').css('display', 'none');
	function sale_function(){
		if ($('#sale').prop('checked')) {
			$('.sale').css('display', 'block');
		}else{
			$('.sale').css('display', 'none');
		}
	}
</script>
</body>
</html>