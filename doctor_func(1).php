<?php
$con=mysqli_connect("localhost","root","","projectkp");
if(isset($_POST['doc_register']))
{
	$doc_name=$_POST["doc_name"];
	$doc_qual=$_POST["doc_qual"];
	$doc_spec=$_POST["doc_spec"];
	$doc_email=$_POST["doc_email"];
	$doc_cno=$_POST["doc_cno"];
	$doc_addr=$_POST["doc_addr"];
	$query="INSERT INTO  doctors_table(doc_name,doc_qual,doc_spec,doc_email,doc_cno,doc_addr) values('$doc_name','$doc_qual','$doc_spec','$doc_email','$doc_cno','$doc_addr')";
	$result=mysqli_query($con,$query);
	$num = mysqli_affected_rows($con);
	$query2="insert into doctors_register_table(doc_name,doc_email) values('$doc_name','$doc_email)";
	$result2=mysqli_query($con,$qeuery2);
	if($num > 0)
	{
	    echo "<script>alert('doctor details are successfully registered') </script>";
		 echo "<script>window.open('doctor_update_profile(1).php','_self')</script>";
	}
	else{
		echo "<script>alert('details are not registered')</script>";
		echo "<script>window.open('doctor_login_page(1).php','_self')</script>";
	}
}

	   
$con->close();

?>