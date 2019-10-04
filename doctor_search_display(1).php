<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>Patient search</title>
</head>
<body>
<?php
 echo "<div class='jumbotron'  style='background-image:url('project_images/pic5.jpg') ; background-repeat:repeat-x ;background-size:cover;  height:230px'>
 <a href='doctor_update_profile(1).php' class='btn btn-default'>Update Your details</div>
<div class='container'>
<div class='card'>
<div  class='card-body' >
<table class='table table-hover'>
  <thead>
    <tr>
	  <th scope='col'>ID</th>
      <th scope='col'>Name</th>
      <th scope='col'>Qualification</th>
      <th scope='col'>Specification</th>
      <th scope='col'>Email</th>
	  <th scope='col'>Contact No</th>
	  <th scope='col'>Address</th>
    </tr>
  </thead>
  <tbody>";
  
    $con=mysqli_connect("localhost","root","","projectkp"); 
	if(isset($_POST['doc_search_op']))
	{
	       $search_doctor=$_POST['search_doc'];
		   $query="select * from doctors_table where doc_name='$search_doctor' ";
		   $result=mysqli_query($con,$query);
		   $rows=mysqli_num_rows($result);
		   if($rows== 0){
		          echo "<script>alert('Sorry, No doctors with name $search_doctor found')</script>";
				  echo "<script>window.open('doctor_appointment(1).php','_self')</script>";
   		 }
 		  while($field=mysqli_fetch_array($result))
		  {
		     $did=$field['doc_id'];
		  	  $dname=$field['doc_name'];
		  	  $dqual=$field['doc_qual'];
		  	  $dspec=$field['doc_spec'];
		  	  $demail=$field['doc_email'];
		  	  $dcno=$field['doc_cno'];
		  	  $daddr=$field['doc_addr'];
			  
			  echo "<tr>
			         <td>$did</td>
			         <td>$dname</td>
			         <td>$dqual</td>
			         <td>$dspec</td>
			         <td>$demail</td>
			         <td>$dcno</td>
			         <td>$daddr</td>
				</tr>";
		  }
		   echo "<tbody></table></div></div></div> ";
	}
	if(isset($_POST['doc_remove_op']))
  {

   $doc_name=$_POST['search_doc'];
   $query="delete from doctors_table where doc_name='$doc_name' ";
   $result=mysqli_query($con,$query);
   $query2="delete from doctors_register_table where doc_name='$doc_name' ";
   $result2=mysqli_query($con,$query2);
   $num=mysqli_affected_rows($con);
   if($num <= 0)
   {
   	    echo "<script>alert('There is no doctor with the name $doc_name to remove')</script>";
		echo "<script>window.open('doctor_appointment(1).php','_self')</script>";
   }
   else{
        echo "<script>alert('Done Admin.the doctor is removed')</script>";
		echo "<script >window.open('doctor_search(1).php','_self')</script>";
		
		}
   }

?>
   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>