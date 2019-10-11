<?php
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email];
	$phone = $_REQUEST['phone'];
	$feedback = $_REQUEST['feedback'];
	
	$message = "Name: $name\nEmail: $email\nPhone Number: $phone\nfeedback: $feedback";

	mail ("ctai2@uncc.edu", "Feedback from UNCC D", "Name:\n$name\n$phone\nFeedback:\n$feedback\n", "From: $email");
	
	header(" Location: feedback_Submitted.html");
?>