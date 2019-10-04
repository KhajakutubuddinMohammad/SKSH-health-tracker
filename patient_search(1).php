<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>Patient search</title>
</head>
<body>
<div class="jumbotron"  style="background-image:url('project_images/pic5.jpg') ; background-repeat:repeat-x ;background-size:cover;  height:230px"></div>
<div class="container">
<div class="card">
<div class="card-body" style="background-color:#0080FF" >
<div class="row">
<div class="col-md-1">
<a href="doctor_appointment(1).php" class="btn btn-light">go back</a>
</div>
<div class="col-md-3">Patient search</div>
<div  class="col-md-8">
   <form class="form-group" method="post" action="patient_search_display(1).php	">
      <div class="row">
          <div class="col-md-8">
                <input type="text" placeholder="enter your name" name="search_patient" class="form-control"></div>
          <div class="col-md-2">
                <input type="submit" value="search" class="btn btn-light" class="form-control" name="search_op"></div>
		<div class="col-md-2">
                <input type="submit" value="Remove" class="btn btn-light" class="form-control" name="remove_op"></div>
      </div>
	  </form>
</div>
</div>
</div>
<div  class="card-body" >
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Address</th>
      <th scope="col">Contact No.</th>
	  <th scope="col">disease</th>
	  <th scope="col">gender</th>
	  <th scope="col">doctors</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Ravi</td>
      <td>56</td>
      <td>steel plant</td>
      <td>9687451338</td>
	  <td>cold</td>
	  <td>Male</td>
	  <td>Dr.saiteja</td>
    </tr>
    <tr>
      <td>Lakshmi</td>
      <td>46</td>
      <td>isukatota</td>
      <td>9841854213</td>
	  <td>headache</td>
	  <td>Female</td>
	  <td>Dr.harshita</td>
    </tr>
    <tr>
      <td>Srinivas</td>
      <td>34</td>
      <td>gajuwaka</td>
	  <td>9745212312</td>
	  <td>fever</td>
	  <td>Male</td>
	  <td>Dr.sainadh</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>