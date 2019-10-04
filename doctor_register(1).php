<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body style="background-color:#000000">
<div class="container" style="width:400px;margin-top:100px">
<form class="form-group" action="doctor_login_func(1).php" method="post">
<div class="card">
<img src="project_images/pic1.jpg" class="card-img-top";>
<div class="card-body">
<label>Username*: </label><br>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-users"></i></span>
  </div>
  <input type="text" name='username' placeholder="enter doctorname" class='form-control'></br>
</div>
<label>Email id*:</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
  </div>
  <input type="email" name="email_id" placeholder="enter your email id" class="form-control"></br>
</div>

<label>Password*:</label><br>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
  </div>
  <input type="password" name='password' placeholder="enter your password" class='form-control'></br>
</div>

<p>***The fields marked with * are mandatory</p>
<input type='submit' name='register_button' class='btn btn-primary'>
</div>
</div>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>