<?php
$con=mysqli_connect("localhost","root","","projectkp");
if(isset($_POST['pat_register']))
{
	$pat_name=$_POST['pat_name'];
	$pat_age=$_POST['pat_age'];
	$pat_dis=$_POST['pat_dis'];
	$pat_join=$_POST['pat_join'];
	$pat_addr=$_POST['pat_addr'];
	$pat_con=$_POST['pat_con'];
	$pat_email=$_POST['pat_email'];
	$pat_gender=$_POST['pat_gender'];
	$pat_doc=$_POST['pat_doc'];
	$query="update patient_table set pat_name='$pat_name' ,pat_age='$pat_age',pat_dis='$pat_dis',pat_doj='$pat_join',pat_addr='$pat_addr',pat_con='$pat_con',pat_doc='$pat_doc',pat_email='$pat_email' where pat_name='$pat_name' and pat_email='$pat_email' ";
	$result=mysqli_query($con,$query);
	$num =mysqli_affected_rows($con);
	if($num > 0)
	{
	    echo "<script>alert('patient details are successfully updated') </script>";
		 echo "<script>window.open('user_doc_main_page(1).php','_self')</script>";
	}
	else{
		echo "<script>alert('details are not updated')</script>";
		echo "<script>window.open('user_doc_main_page(1).php','_self')</script>";
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