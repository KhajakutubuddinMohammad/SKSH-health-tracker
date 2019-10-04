<?php

$con=mysqli_connect("localhost","root","","projectkp");
if(isset($_POST['update_password']))
{
	  
	  $pat_name=$_POST['card_name'];
	  $pat_email=$_POST['card_email'];
	  $pat_password=$_POST['card_password'];
	  $query="update patient_table set pat_password='$pat_password' where pat_name='$pat_name' and pat_email='$pat_email' ";
	  $query2="update users_table set pat_password='$pat_password' where pat_name='$pat_name' and pat_email='$pat_email' ";
	  $result=mysqli_query($con,$query);
	  $num=mysqli_affected_rows($con);
	  $result2=mysqli_query($con,$query2);
	  if($num > 0)
	  {
	  	        echo "<script>alert('Password Updated successfully')</script>";
				echo "<script>window.open('user_doc_main_page(1).php','_self')</script>";
		 
	  }
	  else
	  {
	  	        echo "<script>alert('Password not set')</script>";
				echo "<script>window.open('update_password(1).php','_self')</script>";
	  }
}

?>