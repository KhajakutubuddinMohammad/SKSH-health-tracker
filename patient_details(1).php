<!DOCTYPE html>
<html>
<head>
<title>patient details</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
<div class="jumbotron"  style="background-image:url('project_images/pic5.jpg') ; background-repeat:repeat-x ;background-size:cover;  height:230px">
<a href="user_doc_main_page(1).php" class="btn btn-primary" style="background-color:#D8D8D8;margin-top:100px;float:right">Back to main page</a>
</div>
<div class="container-fluid">
<div class="row">

<div class="col-md-3">
<div class="list-group">
<a href="" class="list-group-item active">Patients<span class="badge">1320</span></a>
<a href="patient_details(1).php" class="list-group-item">Book appointment</a>
<a href="patient_search(1).php" class="list-group-item">patient search</a>
<a href="payment_page.php" class="list-group-item">payment details</a>
</div>
<hr>
<div class="list-group">
<a href="" class="list-group-item active">Doctors<span class="badge">328</span></a>
<a href="doctor_details(1).php" class="list-group-item ">Doctors  details</a>
<a href="doctor_search(1).php" class="list-group-item ">Add or remove doctors</a>
<a href="doctor_search(1).php" class="list-group-item">Doctor search</a>
<a href="doctors_schedule.php" class="list-group-item">Doctors Schedule</a>
</div>
</div>

<div class="col-md-9">
<div class="card">
<div class="card-header" style="background-color:#0080FF">Welcome Admin,Do you want to add patient details??</div>
<div class="card-body">
<form class="form-group" method="post" action="patient_func(1).php">
<label>patient name:</label>
<input type="text" name="pat_name" placeholder="enter patient name" class="form-control"></br>
<label>Patient age:</label>
<input type="text" name="pat_age" placeholder="enter patient age" class="form-control"></br>
<label>Disease:</label>
 <input type="text" name="pat_dis" placeholder="enter patient disease" class="form-control"></br>
 <label>Date of joining:</label></br>
 <input type="date" name="pat_joining"></br></br>
<label>Address:</label>
<input type="text" name="pat_addr" placeholder="enter patient address" class="form-control"></br>
<label>Email id:</label>
<input type="text" name="pat_email" placeholder="enter patient email" class="form-control"></br>
<label>Contact no:</label>
<input type="text" name="pat_cno" placeholder="enter patient contact no" class="form-control"></br>
 <label>Gender:</label>
 <select class="form-control" name="pat_gender">
 <option value="Male">Male</option>
 <option value="Female">Female</option>
 <option value="Others">Others</option>
 </select></br>
 <label>Doctors</label>
 <select class="form-control" name="pat_doc">
 <option value="Dr.Srivani">Dr.Srivani</option>
 <option value="Dr.Chaitanya">Dr.Chaitanya</option>
 <option value="Dr.Krishna">Dr.Krishna</option>
 <option value="Dr.Harshitha">Dr.Harshitha</option>
 <option value="Dr.Katyayini">Dr.Katyayini</option>
 <option value="Dr.Saiteja FRCS">Dr.Saiteja</option>
 <option value="Dr.Sainadh">Dr.Sainadh</option>
 <option value="Dr.Mallika">Dr.Mallika</option>
 <option value="Dr.Dinesh">Dr.Dinesh</option>
 <option value="Dr.Prasad">Dr.Prasad</option>
 <option value="Dr.Chandrasekhar">Dr.Chandrasekhar</option>
 </select></br></br>
 <input type="submit" value="create appointment" name="pat_register" class="btn btn-primary" type="button">
</form>
</div>
</div>
</div>

</div>
<div class="col-md-2"></div>
</div>
<
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>