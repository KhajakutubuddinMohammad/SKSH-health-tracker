<?php
if(isset($_POST['doc_remove-_op']))
{
   $con=mysql_connect("localhost","root","","projectkp");
   $doc_contact=$_POST['doc_search'];
   $query="delete from doctors_table where doc_cno='$doc_contact' ";
   $result=mysqli_query($con,$query);
   $rows=mysql_affected_rows();
   if($rows != 0)
   {
   	    echo "<script>alert('There is no doctor with that contact no. to remove')</script>";
		echo "<script>window.open('doctor_appointment.php','_self')</script>";
   }
   else
   {
   	         echo "<script>alert('Done Admin,doctor is removed)</script>";
			 echo "<script>window.open('doctor_appointment.php','_self')</script>";
   }

}