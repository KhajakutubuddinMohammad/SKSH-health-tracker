<!DOCTYPE html>
<html>
<head>
<title>Main page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>

<div class="jumbotron"  style="background:url('project_images/pic5.jpg')  no-repeat; background-size:cover;height:230px" ></div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="background-color:#B2BABB">
  <!-- Brand -->
  <a class="navbar-brand" href="project_images/pic5.jpg">Logo</a>

  <!-- Links -->
  <ul class="navbar-nav">
   
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
        Patient Course
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="">Find a doctor</a>
        <a class="dropdown-item" href="">Clinical quality and outcomes</a>
        <a class="dropdown-item" href="">Service excellence</a>
        <a class="dropdown-item" href="">patient information guide</a>
        <a class="dropdown-item" href="">value added services</a>
        <a class="dropdown-item" href="">pay online</a>
        <a class="dropdown-item" href="">Medical Feed</a>
      </div>
    </li>
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
      Centers of Excellence
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="">Heart</a>
        <a class="dropdown-item" href="">orthopedics</a>
        <a class="dropdown-item" href="">Spine</a>
        <a class="dropdown-item" href="">Neurology and neurosurgery</a>
        <a class="dropdown-item" href="">Gastroenterelogy</a>
        <a class="dropdown-item" href="">cancer</a>
        <a class="dropdown-item" href="">Transplants</a>
        <a class="dropdown-item" href="">Emergency</a>
        <a class="dropdown-item" href="">ICU</a>
        <a class="dropdown-item" href="">Preventive Medicines</a>
        <a class="dropdown-item" href="">Robotics</a>
        <a class="dropdown-item" href="">Nephrology and urology</a>
        <a class="dropdown-item" href="">Colorectal surgery</a>
      </div>
    </li><li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
   Locations
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="">Hospitals in India</a>
        <a class="dropdown-item" href="">International Hospitalss</a>
        <a class="dropdown-item" href="">SKSH clinics</a>
        <a class="dropdown-item" href="">SKSH cradle</a>
        <a class="dropdown-item" href="">SKSH spectra</a>
      </div>
    </li>
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
        Contact us
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="">Give your feedback</a>
        <a class="dropdown-item" href="">Book an appointment</a>
        <a class="dropdown-item" href="">Careers</a>
      </div>
    </li>
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
       Procedures
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="">Bronchial Thermoplasty</a>
        <a class="dropdown-item" href="">Oral and maxillofacist surgery</a>
        <a class="dropdown-item" href="">Infertility care</a>
        <a class="dropdown-item" href="">Bone marrow Transplant</a>
        <a class="dropdown-item" href="">Hybrid Revasculation</a>
        <a class="dropdown-item" href="">Cosmetic surgery</a>
        <a class="dropdown-item" href="">Hip orthoscopy</a>
        <a class="dropdown-item" href="">The ideal knee</a>
        <a class="dropdown-item" href="">ECMO</a>
      </div>
    </li>
  </ul>
  <a href="location.php" class="btn btn-primary" style="margin-left:320px"><i class="fas fa-map-marker-alt" style="font-size:30px;margin-right:5px"></i>Find us on google maps</a>
   <a href="login_entry_page(1).php" class="btn btn-primary" style="margin-left:100px;width:120px">Logout</a>
</nav>
<div class="container-fluid" style="background-color:#D8D8D8">
<div class="row">
<div class="col-md-3">
<div class="list-group">
<a href="" class="list-group-item active">Patients<span class="badge">1320</span></a>
<a href="patient_details(1).php" class="list-group-item">Book appointment</a>
<a href="cancel_appointment.php" class="list-group-item">Cancel appointment</a>
<a href="patient_search(1).php" class="list-group-item">patient search</a>
<a href="billing_info(1).php" class="list-group-item">payment details</a>
</div>
<hr>
<div class="list-group">
<a href="" class="list-group-item active">Staff<span class="badge">280</span></a>
<a href="" class="list-group-item">staff details</a>
<a href="" class="list-group-item">add new staff</a>
<a href="" class="list-group-item">remove staff</a>
</div>
</div>
<div class="col-md-6">
<div class="container-fluid">
		
<div id="myCarousel" class="carousel slide bg-inverse w-100 ml-auto mr-auto" data-ride="carousel" data-interval="4000">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
  <div class="carousel-item active">
      <img class="d-block w-200" src="project_images/new_image1.jpg" alt="Third slide">
        <div class="carousel-caption">
        <h3 style="margin-bottom:300px">Welcome to SKSH Hospitals</h3>
          <!--<p><a href="patient_details.php" class="btn btn-info" style="margin-left:280px ;width:280px;height:50px;margin-bottom:20px"><b></b>Request an appointment</b></a></p> -->
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-200" src="project_images/new_image4.jpg" alt="First slide">
        <div class="carousel-caption">
		  <div class="navbar navbar-default">
          <p><a href="admin_login_page(1).php" class="btn btn-primary" style="margin-left:110px;margin-bottom:45px ;width:100px">Admin</a></p>
		  <p><a href="patient_login_page(1).php" class="btn btn-primary" style="margin-bottom:45px;width:130px">Receptionist</a></p>
		  <p><a href="doctor_login_page(1).php" class="btn btn-primary" style="margin-bottom:45px;width:110px">Doctor</a></p>
		  </div>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-200" src="project_images/new_image4.jpg" alt="Second slide">
        <div class="carousel-caption">
          <h3>Second slide</h3>
          <p>You are in safe hands</p>
        </div>
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
		
</div>
<div class="col-md-3">
<div class="list-group">
<a href="" class="list-group-item active">Doctors<span class="badge">328</span></a>
<a href="doctor_details(1).php" class="list-group-item ">Doctors  details</a>
<a href="doctor_search(1).php" class="list-group-item ">Add or remove doctors</a>
<a href="admin_update_password_front(1).php" class="list-group-item">Change/Update Password</a>
<a href="doctors_schedule.php" class="list-group-item">Doctors Schedule</a>

</div>
</br>
<div class="list-group">
<a href="" class="list-group-item active">Rooms facility<span class="badge">1500</span></a>
<a href=""  class="list-group-item">Rooms available<span class="badge">456</span></a>
<a href="" class="list-group-item">Room Type<span class="badge">2</span></a>
</div>
<div class="navbar navbar-default">
<a href="">My appointments</a>
<a href="admin_update_password_front(1).php">Change password</a>
<a href="login_entry_page(1).php">Logout</a>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12" style="height:1000px">
<div class="card">
<h1 style="color:#2E9AFE;margin-left:550px">CENTERS OF EXCELLENCE</h1></div>
<div class="card-body">
<div class="row">
<div class="col-md-4">
<img src="project_images/brain_image.png" style="margin-top:30px">
<h3 style="margin-left:30px;margin-top:20px">Neurology</h3>
</div>
<div class="col-md-4">
<img src="project_images/heart_image.png" style="margin-top:30px;margin-left:120px">
<h3 style="margin-left:120px;margin-top:20px">Cardiology</h3>
</div>
<div class="col-md-4">
<img src="project_images/excretory-system.png" style="margin-top:30px;margin-left:120px">
<h3 style="margin-left:120px;margin-top:20px">Excretory System</h3>
</div>
</div>  <!-- row -->

<div class="row">
<div class="col-md-4">
<img src="project_images/eye_image.png" style="margin-top:30px">
<h3 style="margin-left:10px;margin-top:20px">Opthalmology</h3>
</div>
<div class="col-md-4">
<img src="project_images/lungs_image.png" style="margin-top:30px;margin-left:120px">
<h3 style="margin-left:120px;margin-top:20px">Pulmonology</h3>
</div>
<div class="col-md-4">
<img src="project_images/knee_image.png" style="margin-top:30px;margin-left:120px">
<h3 style="margin-left:120px;margin-top:20px">Knee joins</h3>
</div>
</div>  <!-- row -->

<div class="row">
<div class="col-md-4">
<img src="project_images/stomach_image.png" style="margin-top:30px">
<h3 style="margin-left:10px;margin-top:20px">Gastroenterology</h3>
</div>
<div class="col-md-4">
<img src="project_images/blood_image.png" style="margin-top:30px;margin-left:120px">
<h3 style="margin-left:120px;margin-top:20px">Hematology</h3>
</div>
<div class="col-md-4">
<img src="project_images/tooth_image.png" style="margin-top:30px;margin-left:120px">
<h3 style="margin-left:120px;margin-top:20px">Dentistry</h3>
</div>
</div>  <!-- row -->
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12" style="height:1200px">
<div class="card">
<h1 style="color:#2E9AFE;margin-left:550px">SERVICE OF EXCELLENCE</h1></div>
</body>
</html>