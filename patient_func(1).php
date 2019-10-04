<?php
$con=mysqli_connect("localhost","root","","projectkp");
if(isset($_POST['pat_register']))
{
	$pat_name=$_POST["pat_name"];
	$pat_age=$_POST["pat_age"];
	$pat_dis=$_POST["pat_dis"];
	$pat_join=$_POST["pat_joining"];
	$pat_addr=$_POST["pat_addr"];
	$pat_cno=$_POST["pat_cno"];
	$pat_gender=$_POST["pat_gender"];
	$pat_email=$_POST["pat_email"];
	$pat_doc=$_POST["pat_doc"];
	$query="INSERT INTO  patient_table(pat_name,pat_age,pat_dis,pat_doj,pat_addr,pat_con,pat_gender,pat_doc_email) values('$pat_name','$pat_age','$pat_dis','$pat_join','$pat_addr','$pat_cno','$pat_gender','$pat_doc','$pat_email')";
	$result=mysqli_query($con,$query);
	if($result)
	{
	    echo "<script>alert('patient details are successfully registered') </script>";
		 echo "<script>window.open('patient_login_page(1).php','_self')</script>";
	}
	else{
		echo "<script>alert('details are not registered')</script>";
		echo "<script>window.open('patient_login_page(1).php','_self')</script>";
	}
}
if(isset($_POST['search_op']))
{
       $search_patient=$_POST['search_patient'];
	   $query="select * from patient_table where pat_name='$search_patient' ";
	   $result=mysqli_query($con,$query);
	   
 }
	   
$con->close();

?>