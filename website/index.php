<?php
if (isset($_POST["submit"])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone number'];
	$group = $_POST['group amount'];
	$comments = $_POST['human'];
	$from = 'Demo Contact Form';
	$to = 'muayad925@yahoo.com';
	$subject = 'Message from Contact Demo';

	$body = "From: $name\n E-Mail: $email\n Phone Number: $phone\n Group Amount: $group\n Comments: $comments";

	//check if name is entered
	if(!$_POST['name']) {
		$errName = 'Please enter your name';
	}

	// check if email has been entered and its valid

	if(!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errEmail = 'Please enter a valid email address';
	}

	// phone number
	if(!$_POST['phone']) {
		$errPhone = 'Please enter your phone number';
	}

	// group
	if(!$_POST['group']) {
		$errGroup = 'Please enter a valid group amount';
	}

	// send email if no errors
	if (!$errName && !$errEmail && !$errPhone && !$errGroup) {
		if(mail ($to, $subject, $body, $from)) {
			$result='<div class = "alert alert-success"> Thank You! We will be in touch!</div>';
		} else {
			$result='<div class="alert alert-danger"> Sorry there was an error sending your request, please try again later!';

		}
	}
}

?>