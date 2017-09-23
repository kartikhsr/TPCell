<?php
error_reporting(0);
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['mail'];
		$subject=$_POST['subject'];
		$msg=$_POST['message'];

		$to='chananarahul786@gmail.com'; // Receiver Email ID, Replace with your email ID
		
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>