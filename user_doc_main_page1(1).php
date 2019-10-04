<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>Patient search</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body >
<div class="jumbotron"  style="background:url('project_images/pic5.jpg')  no-repeat; background-size:cover;height:230px" >
<h3 style="margin-left:500px">Welcome to SKSH Hospitals</h3>
<a href="login_entry_page(1).php" class="btn btn-primary" style="float:right">Logout</a>
</div>
<div class="container-fluid">
<div class="row" >
<div class="col-md-3" >
<div class="list-group">
<a href="user_doc_main_page1(1).php" class="list-group-item " style="height:100px ;background-color:#D8D8D8;color:#000000"><h4 >Dashboard</h4></a>
<a href="cancel_appointment.php" class="list-group-item " style="height:100px;background-color:#D8D8D8;color:#000000;margin-top:20px"><h4>Cancel Appointment</h4></a>
<a href="appointment_check(1).php" class="list-group-item " style="height:100px;background-color:#D8D8D8;color:#000000;margin-top:20px""><h4>Appointment History</h4></a>
<a href="doctor_update_password_front(1).php" class="list-group-item " style="height:100px;background-color:#D8D8D8;color:#000000;margin-top:20px""><h4>Change Password</h4></a>
<a href="#" class="list-group-item " style="height:100px;background-color:#D8D8D8;color:#000000;margin-top:20px""><h4>Feedback</h4></a>
</div>
</div>
<div class="col-md-9">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body" style="background-color:#D8D8D8">
<h3>DOCTOR | DASHBOARD</h3>

</div>
</div>
</div>
</div>
</div>
<div class="row" style="margin-top:100px">
<div class="col-md-4">
<div class="card style="background-color:#D8D8D8"">
<div class="card-body" style="background-color:#81BEF7;height:200px">
<i class="fas fa-calendar-alt" style="margin-left:100px;font-size:50px"></i>
<h2>My Appointments</h2>
<a href="appointment_check(1).php">View Appointment History</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card">
<div class="card-body" style="background-color:#81BEF7;height:200px">
<i class="fas fa-user" style="margin-left:100px ;font-size:50px"></i>
<br><h2 style="margin-left:50px">My Profile</h2>
<a href="doctor_update_profile(1).php" style="margin-left:70px;margin-top:15px">Update Profile</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card">
<div class="card-body" style="background-color:#81BEF7;height:200px">
<i class="fas fa-user-md" style="margin-left:100px;font-size:50px"></i>
<h2 style="margin-left:30px">Check My Schedule</h2>
<a href="doctors_schedule.php" style="margin-left:30px">Check my schedule</a>
</div>
</div>
</div>

</div>
</div>
</body>