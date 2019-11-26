<?php 
     $to ='tedxdpsmis@gmail.com';
     $from = 'tedxdpsmis@gmail.com';
     $subject = 'TEDx Query';
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $content = $_POST['message'];
     $message = "Name:- $name <br>
				Email:- $email <br>
				Message:- $content
				";
    $headers = "From: $from\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if(mail($to, $subject, $message, $headers)){
		echo 'Thank you for contacting us, we will get back to you shortly.<br><br>TEDxYouth@DPSMIS';}
	else{
		echo 'Error. Please resend message.';}
    
?>