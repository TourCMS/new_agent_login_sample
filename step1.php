<?php
include_once("config.php");
include_once("tourcms.php");

// Create the tourcms wrapper object.
$tourcms = new TourCMS\Utils\TourCMS(0, $private_key, "simplexml");

$params = new SimpleXMLElement("<params />");
$params->final_url = $final_url;
$params->cancel_page_url = $cancel_page_url;
$response = $tourcms->start_new_agent_login($params, $channel_id);

// Store response needed data in session.
session_start();
$_SESSION["final_url"] = (string)$response->final_url;
$_SESSION["login_page_url"] = (string)$response->login_page_url;
$_SESSION["public_token"] = (string)$response->public_token;
$_SESSION["private_token"] = (string)$response->private_token;

// Redirect to login URL.
header('Location: '. $response->login_page_url);
?>
