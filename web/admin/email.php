<?php 

require __DIR__ . '/header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require __DIR__ . '/../../temlate/admin/email.php';
} else {
    require __DIR__ . '/../../temlate/admin/emails.php';
}
