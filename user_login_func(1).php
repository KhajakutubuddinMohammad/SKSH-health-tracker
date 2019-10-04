<?php
   	 use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  $con=mysqli_connect("localhost","root","","projectkp");
if(isset($_POST['submit_button']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from users_table where pat_name='$username' and pat_password='$password' ";
	$login_status=mysqli_query($con,$query);
	if(mysqli_num_rows($login_status) == 1)
	{
	        header("Location:user_doc_main_page(1).php");
	}
	else
	{
		 echo "<script>alert('Enter correct details') </script>";
		 echo "<script>window.open('patient_login_page(1).php','_self') </script>";
	}

}
if(isset($_POST['register_button']))
{

//Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
	$email_id=$_POST['email_id'];
	$username=$_POST['username'];
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.'.substr(strstr($email_id ,'@'), 1);;  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'hospitalssksh@gmail.com';                 // SMTP username
    $mail->Password = 'sksh@123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = '587';   
   
    $mail->setFrom('skshhospitals@gmail.com', 'sksh hospitals');
    $mail->addAddress($_POST['email_id'], $_POST['username']);
	
	$mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome to SKSH HOSPITALS';
    $mail->Body    = "hii $username.</br>we are glad to serve you and provide a healthy life.Thank you for joining us";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
	   
	   
	   
	     $username=$_POST['username'];
		 $password=$_POST['password'];
		 $email_id=$_POST['email_id'];
		 $query="insert into users_table (pat_name,pat_email,pat_password) values('$username','$email_id','$password')";
		 $result=mysqli_query($con,$query);
		 $query2="insert into patient_table(pat_name,pat_email,pat_password) values('$username','$email_id','$password')";
		 $result2=mysqli_query($con,$query2);
		 if($result)
		 {
		       echo "<script>alert('Hello $username,your registration was successful please update your profile') </script>";
		       echo "<script>window.open('user_update_profile(1).php','_self') </script>";    
		 }
		 else
		 {
			    echo "failed to connect".mysqli_connect_error();
		       echo "<script>alert('sorry,your details are not registered')</script>";
		    	echo "<script>window.open('user_register(1).php','_self')</script>";
		 }
		 
	}
	catch(Exception $e)
	{}
	}
   $con->close();

?>