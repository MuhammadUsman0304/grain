<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body class="bg-dark">

<div class="jumbotron text-center bg-dark">
  <div class="row">
    <div class="col-md-6">
      <button type="button" id="btn_3" class="btn btn-info btn-lg text-white"> Company</button>
    </div>
    <div class="col-md-6">
      <button type="button" id="btn_4" class="btn btn-info btn-lg text-white"> Sub Product</button>
    </div>
  </div>
   
</div>

<div class="container-fluid"> 
  <div id="compny"></div>
  <div id="sub_product"></div>
</div>
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $('#btn_3').click(function(){
    $('#compny').load('company.php');
    $('#compny').toggle('company.php');
  });
  $('#btn_4').click(function(){
    $('#sub_product').load('subproduct.php');
    $('#compny').toggle('company.php');
  });
</script>
</body>
</html>