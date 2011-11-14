<?php

/***********************************\
 * Somewhat secure PHP mail script *
 * Version 0.5					   *
 * Written by Bill Patrianakos	   *
 * http://billpatrianakos.me 	   *
\***********************************/

// Check for valid form submission
if(isset($_POST['submit'])) {
	// Check for required fields
	$required = array('name', 'email', 'phone', 'birthday');
		foreach($required as $field) {
			if(!isset($_POST[$field]) || empty($_POST[$field]) ) {
				$error[] = $field;
				echo "You must at least include your name, email, phone number, and date of bith. Please <a href=\"../jobs/application.html\">Go back</a> and fill those in.";
			}
			else {
				
				// Sanitize and validate
				// Set the POST info as variables
				$applicantName = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
				$applicantEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
					$applicantEmail = filter_var($applicantEmail, FILTER_VALIDATE_EMAIL);
				$applicantPhone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
				$applicantPosition = filter_var($_POST['position'], FILTER_SANITIZE_STRING);
				$applicantAge = filter_var($_POST['birthday'], FILTER_SANITIZE_STRING);
				$applicantEmployer = filter_var($_POST['employer'], FILTER_SANITIZE_STRING);
				$applicantExperience = filter_var($_POST['experience'], FILTER_SANITIZE_STRING);
				$applicantWhy = filter_var($_POST['why'], FILTER_SANITIZE_STRING);
				$applicantPersonality = filter_var($_POST['personality'], FILTER_SANITIZE_STRING);
			}
		}

	// Do not let mail be sent unless via _POST request
	if($_SERVER['REQUEST_METHOD'] != "POST") {
	   echo("Error. Spam activity detected. Please try elsewhere.");
	   exit;
	}
	else {
		$email_to = "jobs@chooseclever.com";
		$subject = "Clever Job Application";
		$email_message = 'Name: ' . $applicantName . "\n";
		$email_message .= "Age: " . $applicantAge  ."\n";
		$email_message .= "Phone number: " . $applicantPhone . "\n";
		$email_message .= "Applying for: " . $applicantPosition . "\n";
		$email_message .= "Current employer: " . $applicantEmplyer . "\n";
		$email_message .= "Experience: \n" . $applicantExperience . "\n";
		$email_message .= "Why us? \n" . $applicantWhy . "\n";
		$email_message .= "Personality: \n" $applicantPersonality . "\n";

		// Send the mail
		mail($email_to, $subject, $email_message);
	}
}
// If submit was not set that indicates foul play. Throw an error and die.
else {
	echo "You are attempting to send an unauthorized message. Don't waste your time.";
	exit;
}

?>