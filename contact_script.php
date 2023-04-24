<?php include('includes/header.php'); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$to = 'youremail@example.com';
	$subject = 'Contact Us Form Submission: ' . $subject;
	$headers = 'From: ' . $email . "\r\n" .
	    'Reply-To: ' . $email . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();
	
	$message_body = "Name: $name\n\nEmail: $email\n\nMessage: $message";
	
	if (mail($to, $subject, $message_body, $headers)) {
	    echo 'Thank you for your message. We will get back to you soon.';
	} else {
	    echo 'There was an error sending your message. Please try again later.';
	}
}
?>
