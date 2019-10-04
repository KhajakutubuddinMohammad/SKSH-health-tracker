<!DOCTYPE html>
<html>
<head>
<title>Update Password</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>

<div class="jumbotron"  style="background:url('project_images/pic5.jpg')  no-repeat; background-size:cover;height:230px" >
<a href="user_doc_main_page1(1).php" style="float:right" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left"></i>Go back</a>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="card" style="margin-top:50px">
<div class="card-header" style="background-color:orange;color:#000000"><h3>Update/Set Password</h3></div>
<div class="card-body">
<form class="form-group" method="post" action="doctor_update_password(1).php">
<label>Enter Doctor Name:</label><br>
<input type="text" name="card_name" class="form-control">
<label>Enter Doctor Email id:</label><br>
<input type="text" name="card_email" class="form-control"><br>
<label>Enter Password:</label><br>
<input type="password" name="card_password" class="form-control"><br><br>
<input type="submit" value="Update" name="update_password">
</form>
</div>
</div>
</div>

<div class="col-md-4"></div>
</div>
</div>