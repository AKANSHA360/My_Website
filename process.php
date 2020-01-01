<?php 

if (isset($_POST['submit'])) {
	$to="akanshachaurasia2001@gmail.com";
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$txt=$_POST['message'];
	$headers="From:  {$email}"  .  "\r\n"   .
	"CC:   somebodyelse@example.com";
	if (mail($to, $subject, $message, $headers)) {
        echo "Mail Sent.";
    }
    else {
        echo "failed";
    }
}












?>