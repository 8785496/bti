<?php

require __DIR__ . '/../php/db.php';

if (isset($_POST['id']) && isset($_POST['token']) && $_POST['token'] == 'JAjG4ubDX3') {
    
    $id = (int) $_POST['id'];
    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $count = $db->exec("DELETE FROM `visitor` WHERE `id` = $id");
        echo "Удалено $count строк(а).\n";
    } catch (Exception $e) {
        $fname = __DIR__ . '/../log/error.log';
        $content = $e->getMessage() . "\n";
        file_put_contents($fname, $content, FILE_APPEND | LOCK_EX);
    }
}
