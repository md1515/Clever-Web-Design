<?php

// Get the POST variables
$name = $_POST[name];
$applicant_email = $_POST[email];
$phone = $_POST[phone];
$position = $_POST[position];
$age = $_POST[birthday];
$employer = $_POST[employer];
$experience = $_POST[experience];
$why = $_POST[why];
$personality = $_POST[personality];

// Send mail to:
$mailto = "jobs@chooseclever.com";

$message = "Name: $name \n Age: $age \n Phone number: $phone \n Applying for: $position \n Current employer: $emplyer \n Experience: $experience \n Why us? $why \n Personality: \n $personality";


?>