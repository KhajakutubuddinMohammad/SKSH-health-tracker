<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>doctor search</title>
</head>
<body>
<div class="jumbotron"  style="background-image:url('project_images/pic5.jpg') ; background-repeat:repeat-x ;background-size:cover;  height:230px"></div>

<div class="container">
<div class="card">
<div class="card-body" style="background-color:#0080FF">
<div class="row">
<div class="col-md-1">
<a href="doctor_appointment(1).php" class="btn btn-light">go back</a>
</div>
<div class="col-md-3">Doctor search</div>
<div  class="col-md-8">
   <form class="form-group" method="post" action="doctor_search_display(1).php">
      <div class="row">
          <div class="col-md-8">
                <input type="text" placeholder="enter doctor name" name="search_doc" class="form-control"></div>
          <div class="col-md-2">
                <input type="submit" value="search" class="btn btn-light" class="form-control" name="doc_search_op" ></div>
		 <div class="col-md-2">
                <input type="submit" value="Remove" class="btn btn-light" class="form-control" name="doc_remove_op" ></div>
				
      </div>
	  </form>
</div>
</div>
</div>
<div  class="card-body" >
<table class="table table-hover">
  <thead>
    <tr>
	  <th scope="col">Doctor id</th>
      <th scope="col">Doctor name</th>
      <th scope="col">Dept. of specialization</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Dr.harshita</td>
      <td>psychologist</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Dr.Katyayini</td>
      <td>neurologist</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Dr.saiteja</td>
      <td>dermatologist</td>
    </tr>
	<tr>
	   <th scope="row">4</th>
	   <td>Dr.sainadh</td>
	   <td>cardiologist</td>
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