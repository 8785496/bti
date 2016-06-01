<?php 

require __DIR__ . '/header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require __DIR__ . '/template/request.php';
} else {
    require __DIR__ . '/template/requests.php';
}
