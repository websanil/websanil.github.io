<?php
if($_REQUEST['name'] == '' || $_REQUEST['email'] == '' ||  $_REQUEST['subject'] == '' || $_REQUEST['your_message'] == ''):
	return "error";
endif;
if (filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)):
	$subject = $_REQUEST['subject']; // Subject of your email

	// Receiver email address
	$to = 'support@web21cen.in';  //Change the email address by yours
			
	
	//$to = $_REQUEST['email'];  //Recipient's E-mail

	// prepare header
	$header = 'From: '. $_REQUEST['name'] . ' <'. $_REQUEST['email'] .'>'. "\r\n";
	$header .= 'Reply-To:  '. $_REQUEST['name'] . ' <'. $_REQUEST['email'] .'>'. "\r\n";
	// $header .= 'Cc:  ' . 'example@domain.com' . "\r\n";
	// $header .= 'Bcc:  ' . 'example@domain.com' . "\r\n";
	$header .= 'X-Mailer: PHP/' . phpversion();


	$message .= "'Name: ' . $_REQUEST['name'] . '<br>';
				'Subject: ' . $_REQUEST['subject'] . '<br>';
				$_REQUEST['your_message']";

	// Send contact information
	$mail = mail( $to, $subject , $message, $header );

	echo 'sent';
	else:
		return "error";
	endif;


?>