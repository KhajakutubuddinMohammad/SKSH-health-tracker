<!DOCTYPE html>
<html>
<head>
<title>Main page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>

<div class="jumbotron"  style="background:url('project_images/pic5.jpg')  no-repeat; background-size:cover;height:230px" ></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="card" style="margin-top:50px">
<div class="card-header" style="background-color:orange;color:#000000"><h3>Payment  methods</h3></div>
<div class="card-body">
<form class="form-group" method="post" action="payment_func(1).php">
<p>Cards Accepted:</p>
<div class="row">
<div class="col-md-4">
<i class="fab fa-cc-visa" style="font-size:50px;margin-left:20px"></i></div>
<div class="col-md-4">
<i class="fab fa-cc-amazon-pay" style="font-size:50px;margin-left:5px"></i></div>
<div class="col-md-4">
<i class="fab fa-cc-mastercard" style="font-size:50px;margin-left:5px"></i></div>
</row><br>
<label>Enter Card Holder Name:</label><br>
<input type="text" name="card_name" class="form-control">
<label>Enter Card Holder Email id:</label><br>
<input type="text" name="card_email" class="form-control">
<label>Enter Card Number</label><br>
<input type="text" name="card_num" class="form-control">
<label>Enter CVV:</label><br>
<input type="text" name="card_cvv" class="form-control"><br><br>
<input type="submit" value="Confirm Payment" name="con_pay">
</form>
</div>
</div>
</div>

<div class="col-md-4"></div>
</div>
</div>