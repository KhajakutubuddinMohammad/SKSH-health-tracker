<?php
  $con=mysqli_connect("localhost","root","","projectkp");
if(isset($_POST['submit_button']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from doctors_register_table where doc_name='$username' and doc_password='$password' ";
	$login_status=mysqli_query($con,$query);
	if(mysqli_num_rows($login_status) == 1)
	{
	        header("Location:user_doc_main_page1(1).php");
	}
	else
	{
		 echo "<script>alert('Enter correct details') </script>";
		 echo "<script>window.open('doctor_login_page(1).php','_self') </script>";
	}

}
if(isset($_POST['register_button']))
	{
	     $username=$_POST['username'];
		 $password=$_POST['password'];
		 $email_id=$_POST['email_id'];
		 $query="insert into doctors_register_table (doc_name,doc_email,doc_password) values('$username','$email_id','$password')";
		 $result=mysqli_query($con,$query);
		 $num =mysqli_affected_rows($con);
		 $query2="insert into doctors_table(doc_name,doc_email,doc_password) values('$username','$email_id','$password')";
		 $result2=mysqli_query($con,$query2);
		 if($num)
		 {
		       echo "<script>alert('Hello Doctor $username,your registration was successful please update your profile') </script>";
		       echo "<script>window.open('doctor_update_profile(1).php','_self') </script>";    
		 }
		 else
		 {
			    echo "failed to connect".mysqli_connect_error();
		       echo "<script>alert('sorry,your details are not registered')</script>";
		    	echo "<script>window.open('doctor_register(1).php','_self')</script>";
		 }
		 
	}
   $con->close();

?>