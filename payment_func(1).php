<?php
  
  $con=mysqli_connect("localhost","root","","projectkp");
  if(isset($_POST['con_pay']))
  {
  	    $card_name=$_POST['card_name'];
		$card_email=$_POST['card_email'];
		$status="paid";
		$query="update bill_table set status='$status' where pat_email='$card_email' ";
		$result=mysqli_query($con,$query);
		$num=mysqli_affected_rows($con);
		if($num > 0)
		{
			   echo "<script>alert('Your transaction is successful')</script>";
			   $query2="delete from patient_table where pat_email='$card_email' ";
	        	$result2=mysqli_query($con,$query2);
	     	$query3="delete from users_table where pat_email='$card_email' ";
     		$result3=mysqli_query($con,$query3);
		
	         $num2=mysqli_affected_rows($con);
	   if($num2 > 0)
	   {
	   	     echo "<script>alert('patient discharged with full satisfaction')</script>";
			 echo "<script>window.open('doctor_appointment(1).php','_self')</script>";
	   }
		}
		else
		{
			 echo "<script>alert('Transaction failed')</script>";
		}
		
		
  }


?>