<?php
// Install the library via PEAR or download the .zip file to your project folder.
// This line loads the library
require('twilio/Services/Twilio.php');

$response = new Services_Twilio_Twiml();
$response->play('https://www.dev.jordans.io/old/assets/astley.mp3');
print $response;
?>