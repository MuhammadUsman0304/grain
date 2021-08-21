<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body class="bg-dark">

<div class="jumbotron text-center bg-dark">
  <div class="row">
    <div class="col-md-6">
      <button type="button" id="btn_1" class="btn btn-info btn-lg text-white">Add Company</button>
    </div>
    <div class="col-md-6">
      <button type="button" id="btn_2" class="btn btn-info btn-lg text-white">Add Sub Product</button>
    </div>
  </div>
   
</div>

<div class="container-fluid"> 
  <div id="add_compny"></div>
  <div id="add_sub_product"></div>
</div>
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $('#btn_1').click(function(){
    $('#add_compny').load('addproduct.php');
    $('#add_compny').toggle('addproduct.php');
  });
  $('#btn_2').click(function(){
    $('#add_sub_product').load('addsubproduct.php');
    $('#add_compny').toggle('addproduct.php');
  });
</script>
</body>
</html>