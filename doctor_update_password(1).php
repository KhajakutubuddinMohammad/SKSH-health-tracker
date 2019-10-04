<?php

$con=mysqli_connect("localhost","root","","projectkp");
if(isset($_POST['update_password']))
{
	  
	  $doc_name=$_POST['card_name'];
	  $doc_email=$_POST['card_email'];
	  $doc_password=$_POST['card_password'];
	  $query="update doctors_table set doc_password='$doc_password' where doc_name='$doc_name' and doc_email='$doc_email' ";
	  $query2="update doctors_register_table set doc_password='$doc_password' where doc_name='$doc_name' and doc_email='$doc_email' ";
	  $result=mysqli_query($con,$query);
	  $num=mysqli_affected_rows($con);
	  $result2=mysqli_query($con,$query2);
	  if($num > 0)
	  {
	  	        echo "<script>alert('Password Updated successfully')</script>";
				echo "<script>window.open('user_doc_main_page1(1).php','_self')</script>";
		 
	  }
	  else
	  {
	  	        echo "<script>alert('Password not set')</script>";
				echo "<script>window.open('update_password1(1).php','_self')</script>";
	  }
}

?>