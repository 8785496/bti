<?php

$users = require(__DIR__ . '/../../php/users.php');

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Admin Authenticate"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Access closed.';
    exit;
} 

$username = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];

if (!array_key_exists($username, $users) || $password != $users[$username]) {
    header('WWW-Authenticate: Basic realm="Incorrect Username or Password"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Incorrect Username or Password.";
    exit;
}
