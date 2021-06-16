<?php 

		require_once 'registration/vendor/autoload.php';
		require_once 'registration/src/constants.php';

	// Create the Transport
	$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, "ssl"))
	  ->setUsername(EMAIL)
	  ->setPassword(PASSWORD);

	// Create the Mailer using your created Transport
	$mailer = new Swift_Mailer($transport);
	
	function sendVerificationEmail($useremail, $token)
	{
			global $mailer;

			$body = '<!DOCTYPE html>
						<html>
						<head>
							<title>verify email</title>
						</head>
						<body>
							<div class="wrapper">
								<p>
									thank you for signing our website.please click on link below to verify your email.
								</p>
								<a href="http://localhost/htdocs/myproject/src/index.php?token=' . $token . '">
								Verify your email address.
								</a>
							</div>

						</body>
						</html>';

			// Create a message
		$message = (new Swift_Message('verify your email address'))
		  ->setFrom(EMAIL)
		  ->setTo($useremail)
		  ->setBody($body, 'txt/html');
		  

		// Send the message
		$result = $mailer->send($message);
	}

 ?>