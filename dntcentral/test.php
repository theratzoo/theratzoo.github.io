<?php

$to = '';
$subject = 'Test';
$message = 'TEST';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: cntrmtg@dntcentral.com' . "\r\n";
mail($to, $subject, $message, $headers);
echo("TEST");

?> 
