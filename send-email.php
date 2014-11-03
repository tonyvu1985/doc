<?php

$from = $_POST["from"]; // sender
$subject = $_POST["subject"];
$message = 'Message: ' . $_POST["message"]. PHP_EOL . 'Customer Name: ' . $_POST["requestor"] . PHP_EOL . 'Phone number: ' . $_POST["phone"] . PHP_EOL . 'Place: ' . $_POST["place"];

// send mail
mail("hoc@newchinaacupuncture.com.au",$subject,$message,"From: $from\n");

?>
