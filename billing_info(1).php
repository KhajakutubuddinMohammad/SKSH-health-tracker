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
<a href="payment_page(1).php" class="list-group-item">payment details</a>
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
<div class="card-header" style="background-color:#D8D8D8">BILLING INFORMATION</div>
<div class="card-body">
<form class="form-group" method="post" action="payment_page(1).php">
<label>Patient email:</label>
<input type="email" class="form-control" name="pat_email">
<label>Doctor charge:</label>
<input type="text"  class="form-control" name="doc_charge">
<label>Medicine Charge:</label>
<input type="text" class="form-control" name="medicine_charge">
<label>Room Charge:</label>
<input type="text" class="form-control" name="room_charge">
<label>Operation charge:</label>
<input type="text" class="form-control" name="optn_charge">
<label>No of days stayed:</label>
<input type="text" class="form-control" name="no_of_days">
<label>Nursing Charge</label>
<input type="text" class="form-control" name="nursing_charge">
<label>Lab charge:</label>
<input type="text" class="form-control" name="lab_charge"><br><br>
<input type="submit" class="btn btn-primary" value="Calculate Bill" name="cal_bill">
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