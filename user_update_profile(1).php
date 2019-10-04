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

<div class="card-body">
<form class="form-group" method="post" action="user_update_func(1).php">
<label>patient name:</label>
<input type="text" name="pat_name" placeholder="enter patient name" class="form-control"></br>
<label>Patient age:</label>
<input type="text" name="pat_age" placeholder="enter patient age" class="form-control"></br>
<label>Disease:</label>
 <input type="text" name="pat_dis" placeholder="enter patient disease" class="form-control"></br>
 <label>Date of joining:</label></br>
 <input type="date" name="pat_join"></br></br>
 <label>Address:</label>
<input type="text" name="pat_addr" placeholder="enter patient address" class="form-control"></br>
<label>Email id:</label>
<input type="text" name="pat_email" placeholder="enter patient email id" class="form-control"></br>
<label>Contact no:</label>
<input type="text" name="pat_con" placeholder="enter patient contact no" class="form-control"></br>
 <label>Gender:</label>
 <select class="form-control" name="pat_gender">
 <option value="Male">Male</option>
 <option value="Female">Female</option>
 <option value="Others">Others</option>
 </select></br>
 <label>Doctors</label>
 <select class="form-control" name="pat_doc">
 <option value="Dr.Harshitha">Dr.Harshitha</option>
 <option value="Dr.Katyayini">Dr.Katyayini</option>
 <option value="Dr.saiteja">Dr.saiteja</option>
 <option value="Dr.Sainadh">Dr.Srivani</option>
 <option value="Dr.Sainadh">Dr.khaja</option>
 <option value="Dr.Sainadh">Dr.Chandrasekhar</option>
 </select></br></br>
 <input type="submit" value="update Profile" name="pat_register" class="btn btn-primary" type="button">
</form>
</div>

</div>
</div>
</body>