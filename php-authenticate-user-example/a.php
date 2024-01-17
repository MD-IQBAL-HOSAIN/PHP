<?php

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo '<p>You must enter a valid username and password to access this resource.</p>';
    exit;
}

// Check the username and password against a database or other data source
$username = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];

// If the username and password are valid, allow access to the resource
echo '<p>Welcome, ' . $username . '!</p>';

?>
