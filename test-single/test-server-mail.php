<?php
// Testo che il server riesca a mandare le mail.
// questo ad esempio mi serve per via delle mail di conferma password che elgg o altri cms dovrebbero mandare all'atto dell'iscrizione.

$address = "impetus_deep@ymail.com";
 
$subject = 'Test email.';
 
$body = 'If you can read this, your email is working.';
$email = "nuclear.quantum@gmail.com";

$headers = 'From: ' .$email . "\r\n". 
  'Reply-To: ' . $email. "\r\n" . 
  'X-Mailer: PHP/' . phpversion();
// , $headers
if (mail($address, $subject, $body)) {
        echo 'SUCCESS!  PHP successfully delivered email to your MTA.  If you don\'t see the email in your inbox in a few minutes, there is a problem with your MTA.';
} else {
        echo 'ERROR!  PHP could not deliver email to your MTA.  Check that your PHP settings are correct for your MTA and your MTA will deliver email.';
}
