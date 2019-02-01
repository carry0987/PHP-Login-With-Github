<?php
// Start session
if (!session_id()) {
    session_start();
}
// Include Github client library 
require_once 'class/class_github_oath.php';
// Configuration and setup GitHub API
$clientID = 'Your_Github_OAuth_ClientID';
$clientSecret = 'Your_Github_OAuth_ClientSecret';
$redirectURL = 'Your_Github_Auth_CallbackURL';

// Set Github OAuth Client
$option = array(
    'client_id' => $clientID,
    'client_secret' => $clientSecret,
    'redirect_url' => $redirectURL,
);
$gitClient = new Github_OAuth_Client($option);
// Try to get the access token
if (isset($_SESSION['access_token'])) {
    $accessToken = $_SESSION['access_token'];
}
