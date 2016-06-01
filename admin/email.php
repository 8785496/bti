<?php 

require __DIR__ . '/header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require __DIR__ . '/template/email.php';
} else {
    require __DIR__ . '/template/emails.php';
}
