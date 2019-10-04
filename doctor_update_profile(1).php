<!DOCTYPE html>
<html>
<head>
<title>Main page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<div class="jumbotron"  style="background:url('project_images/pic5.jpg')  no-repeat; background-size:cover;height:230px" ></div>
<div class="container-fluid">
<div class="row" >
<div class="col-md-3" >
<div class="list-group">
<a href="#" class="list-group-item " style="height:100px ;background-color:#D8D8D8;color:#000000"><h4 >Dashboard</h4></a>
<a href="#" class="list-group-item " style="height:100px;background-color:#D8D8D8;color:#000000;margin-top:20px"><h4>Request Appointment</h4></a>
<a href="#" class="list-group-item " style="height:100px;background-color:#D8D8D8;color:#000000;margin-top:20px""><h4>Appointment History</h4></a>
<a href="#" class="list-group-item " style="height:100px;background-color:#D8D8D8;color:#000000;margin-top:20px""><h4>Feedback</h4></a>
</div>
</div>

<div class="col-md-9">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body" style="background-color:#D8D8D8">
<h3>Update Your Profile</h3>
</div>
</div>
</div>
</div>
</div>

<div class="card" style="margin-left:250px;margin-top:50px;width:400px ;">
<div class="card-body">
<form class="form-horizontal" method="post" action="update_doctor_func(1).php">
<div class="form-group">
<label>Doctor name:</label>
<input type="text" name="doc_name" placeholder="enter doctor name" class="form-control"></br>
<label>Doctor Qualification:</label>
<input type="text" name="doc_qual" placeholder="enter doctor qualification" class="form-control"></br>
<label>Specialization</label>
 <select class="form-control" name="doc_spec">
 <option value="cardiologist">cardiologist</option>
 <option value="neurologist">neurologist</option>
 <option value="gynocologist">gynocologist</option>
 <option value="psychologist">psychologist</option>
 <option value="dermatologist">dermatologist</option>
 </select></br></br>
 <label >Email id:</label>
<input type="email" name="doc_email" placeholder="enter email address" class="form-control"></br>
<label>Contact no:</label>
<input type="text" name="doc_cno" placeholder="enter doctor contact no" class="form-control"></br>
<label>Doctor  address</label>
<input type="text" name="doc_addr" placeholder="enter doctor address" class="form-control"></br>
 <input type="submit" value="update" name="doc_register" class="btn btn-primary" type="button">
 </div>
</form>
</div>
</div>
</div>

</div>
</div>
</body>