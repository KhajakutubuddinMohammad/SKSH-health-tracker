<?php

$con=mysqli_connect("localhost","root","","projectkp");
if(isset($_POST['can_app']))
{
	    $username=$_POST['card_name'];
		$useremail=$_POST['card_email'];
		$query="delete from patient_table where pat_email='$useremail' and pat_name='$username' ";
		$result=mysqli_query($con,$query);
		$num=mysqli_affected_rows($con);
		if($num > 0)
		{
			   echo "<script>alert('Appointment Cancelled')</script>";
			   echo "<script>window.open('login_entry_page(1).php','_self')</script>";
		}
		else
		{
			 echo "<script>alert('Appointment not cancelled')</script>";
			 echo "<script>window.open('cancel_appointment.php','_self')</script>";
		}
		$query2="delete from users_table where pat_name='$username' and pat_email='$useremail' ";
		$result2=mysqli_query($con,$query2);
}
?>