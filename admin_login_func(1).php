<?php
  $con=mysqli_connect("localhost","root","","projectkp");
if(isset($_POST['submit_button']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from admin_table where admin_name='$username' and admin_password='$password' ";
	$login_status=mysqli_query($con,$query);
	if(mysqli_num_rows($login_status) == 1)
	{
	        header("Location:doctor_appointment(1).php");
	}
	else
	{
		 echo "<script>alert('Enter correct details') </script>";
		 echo "<script>window.open('admin_login_page(1).php','_self') </script>";
	}

}
if(isset($_POST['register_button']))
	{
	     $username=$_POST['username'];
		 $password=$_POST['password'];
		 $email_id=$_POST['email_id'];
		 $query="insert into admin_table (admin_name,admin_email,admin_password) values('$username','$email_id','$password')";
		 $result=mysqli_query($con,$query);
		 $num=mysqli_affected_rows($con);
		 if($num  > 0)
		 {
		       echo "<script>alert('Hello Admin $username,your registration was successful') </script>";
		       echo "<script>window.open('admin_login_page(1).php','_self') </script>";    
		 }
		 else
		 {
			    echo "failed to connect".mysqli_connect_error();
		       echo "<script>alert('sorry,your details are not registered')</script>";
		    	echo "<script>window.open('admin_register(1).php','_self')</script>";
		 }
		 
	}
   $con->close();

?>