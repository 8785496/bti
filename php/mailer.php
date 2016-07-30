<?php

require __DIR__ . '/../vendor/autoload.php';
$smtp = require(__DIR__ . '/smtp.php');

$transport = Swift_SmtpTransport::newInstance($smtp['host'], $smtp['port'], $smtp['encryption'])
    ->setUsername($smtp['username'])
    ->setPassword($smtp['password']);

$mailer = Swift_Mailer::newInstance($transport);

//print_r($smtp);