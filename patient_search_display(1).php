<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>Patient search</title>
</head>
<body>
<?php

 echo " <div class='jumbotron'  style='background-image:url('project_images/pic5.jpg') ; background-repeat:repeat-x ;background-size:cover;  height:230px'></div>
<div class='container'>
<div class='card'>
<div  class='card-body' >
<table class='table table-hover'>
  <thead>
    <tr>
      <th scope='col'>Name</th>
      <th scope='col'>Age</th>
      <th scope='col'>Address</th>
      <th scope='col'>Contact No.</th>
	  <th scope='col'>disease</th>
	  <th scope='col'>gender</th>
	  <th scope='col'>doctors</th>
    </tr>
  </thead>
  <tbody>";
    $con=mysqli_connect("localhost","root","","projectkp"); 
	if(isset($_POST['search_op']))
	{
	       $search_patient=$_POST['search_patient'];
		   $query="select * from patient_table where pat_name='$search_patient' ";
		   $result=mysqli_query($con,$query);
		   $rows=mysqli_num_rows($result);
		   if($rows == 0){
		       echo "<script>alert('It seems that there is no patient with  name $search_patient ')</script>";
			   echo "<script>window.open('doctor_appointment(1).php','_self')</script>";
			   }
		  while($field=mysqli_fetch_array($result))
		  {
		  	  $fname=$field['pat_name'];
		  	  $fage=$field['pat_age'];
		  	  $fage=$field['pat_age'];
		  	  $faddr=$field['pat_addr'];
		  	  $fcon=$field['pat_con'];
		  	  $fdis=$field['pat_dis'];
		  	  $fgender=$field['pat_gender'];
		  	  $fdoc=$field['pat_doc'];
			  
			  echo "<tr>
			         <td>$fname</td>
			         <td>$fage</td>
			         <td>$faddr</td>
			         <td>$fcon</td>
			         <td>$fdis</td>
			         <td>$fgender</td>
			         <td>$fdoc</td>
				</tr>";
		  }
		   echo "<tbody></table></div></div></div> ";
	}
	if(isset($_POST['remove_op']))
	{
		$search_patient = $_POST['search_patient'];
		$query="delete from patient_table where pat_name='$search_patient' ";
		$result=mysqli_query($con,$query);
       $num =mysqli_affected_rows($result);
	   $query="delete from users_table where pat_name='$pat_name' ";
	   $result2=mysqli_query($con,$query2);
		if($num ==0 )
		{
			 echo "<script>alert('There is no patient with name $search_patient ')</script>";
			 echo "<script>window.open('patient_search(1).php','_self')</script>";
		}
		else{
			  
			 echo "<script>alert('Done Admin,the patient is discharged with satisfaction')</script>";
			 echo "<script>window.open('patient_search(1).php','_self')</script>";
		}
	}
?>
   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>