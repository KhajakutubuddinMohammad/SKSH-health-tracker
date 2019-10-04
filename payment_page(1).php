<?php

$con=mysqli_connect("localhost","root","","projectkp");
if(isset($_POST['cal_bill']))
{
	  $pat_email=$_POST['pat_email'];
	  $doc_charge=$_POST['doc_charge'];
	  $medicine_charge=$_POST['medicine_charge'];
	  $room_charge=$_POST['room_charge'];
	  $optn_charge=$_POST['optn_charge'];
	  $no_of_days=$_POST['no_of_days'];
	  $nursing_charge=$_POST['nursing_charge'];
	  $lab_charge=$_POST['lab_charge'];
	  $total=$doc_charge+$medicine_charge+($room_charge * $no_of_days)+$nursing_charge+$optn_charge+$lab_charge;
	  $query="insert into bill_table(pat_email,doc_charge,medicine_charge,room_charge,optn_charge,no_of_days,nursing_charge,lab_charge) values('$pat_email','$doc_charge','$medicine_charge','$room_charge','$optn_charge','$no_of_days','$nursing_charge','$lab_charge') ";
	  $result=mysqli_query($con,$query);
	  $num=mysqli_affected_rows($con);
	  if($num > 0)
	  {
	  	      echo "<script>alert('your total bill amount is:$total')</script>";
			  echo "<script>window.open('payment_method(1).php','_self')</script>";
	  }
}
?>