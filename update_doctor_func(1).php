<?php
$con=mysqli_connect("localhost","root","","projectkp");
if(isset($_POST['doc_register']))
	{
	     $dname=$_POST['doc_name'];
		 $dqual=$_POST['doc_qual'];
		 $dspec=$_POST['doc_spec'];
		 $demail=$_POST['doc_email'];
		 $dcno=$_POST['doc_cno'];
		 $daddr=$_POST['doc_addr'];
		 $query1="select doc_id from doctors_table where doc_name=$dname";
		 $id=mysqli_query($con,$query1);
		 $query2="update doctors_table set doc_name='$dname',doc_qual='$dqual',doc_spec='$dspec',doc_email='$demail',doc_cno='$dcno',doc_addr='$daddr' where doc_name='$dname' and doc_email='$demail' ";
		 $result=mysqli_query($con,$query2);
		 if($result)
		 {
		           echo "<script>alert('Hello  Doctor $username,Your details were successfully updated') </script>";
		         echo "<script>window.open('user_doc_main_page1(1).php','_self') </script>";    
		 }
		 else
		 {
				  echo "failed to connect".mysqli_connect_error();
		       echo "<script>alert('sorry,your details are not updated')</script>";
		    	echo "<script>window.open('user_doc_main_page1(1).php','_self')</script>";
		 }
		 
	}
	$con->close();
?>