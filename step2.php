<?php
include_once("config.php");
include_once("tourcms.php");

// Get received public token in URL.
$public_token = $_GET['k'];

// Get private_token and agent api details.
// In this sample are stored in session, but should look for private token using the public_token.
session_start();
$private_token = $_SESSION["private_token"];

// Create the tourcms wrapper object and call retrieve_agent_booking_key
$tourcms = new TourCMS\Utils\TourCMS(0, $private_key, "simplexml");
$response = $tourcms->retrieve_agent_booking_key($private_token, $channel_id);

// Show response.
print "RESPONSE - ";
print_r($response);
?>
