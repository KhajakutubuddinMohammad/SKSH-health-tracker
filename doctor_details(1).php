<!DOCTYPE html>
<html>
<head>
<title>doctor details</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
<div class="jumbotron"  style="background-image:url('project_images/pic5.jpg') ; background-repeat:repeat-x ;background-size:cover;  height:230px">
<a href="doctor_appointment(1).php" class="btn btn-primary" style="background-color:#A4A4A4; color:#000000; position:relative;top:0;right:0;float:right">Back to main page</a></button>
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
<div class="card-header" style="background-color:#0080FF">Welcome Admin,Do you want to add doctor details??</div>
<div class="card-body">
<form class="form-group" method="post" action="doctor_func(1).php">
<label>Doctor name:</label>
<input type="text" name="doc_name" placeholder="enter doctor name" class="form-control"></br>
<label>Doctor Qualification:</label>
<input type="text" name="doc_qual" placeholder="enter doctor qualification" class="form-control"></br>
<label>Specialization</label>
 <select class="form-control" name="doc_spec">
   <option value="cardiologist">cardiologist</option> 
  <option value="dermatologist">dermatologist</option>
 <option value="endocrinologist">endocrinologist</option>
 <option value="neurologist">neurologist</option>
 <option value="gynocologist">gynocologist</option>
 <option value="psychologist">psychologist</option>
 <option value="Physician">Physician</option>
 <option value="gastroentrologist">gastroentrologist</option>
 <option value="hematologist">Hematologist</option>
 <option value="Nephrologist">Nephrologist</option>
 <option value="Oncologist">Oncologist</option>
 <option value="Opthalmologist">Opthalmologist</option>
 <option value="Pediatrician">Pediatrician</option> 
 <option value="General Surgeon">General Surgeon</option>
 </select></br></br>
 <label>Email id:</label>
<input type="email" name="doc_email" placeholder="enter email address" class="form-control"></br>
<label>Contact no:</label>
<input type="text" name="doc_cno" placeholder="enter doctor contact no" class="form-control"></br>
<label>Doctor  address</label>
<input type="text" name="doc_addr" placeholder="enter doctor address" class="form-control"></br>
 <input type="submit" value="register a doctor" name="doc_register" class="btn btn-primary" type="button">
</form>
</div>
</div>
</div>

</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>