<?php

if (isset($_REQUEST['email'])) {
    require __DIR__ . '/db.php';
    $admin_email = "bti-novosib@mail.ru";
    $name = $_REQUEST['first_name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    $subject = 'E-mail from site 2136340.xyz';
    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $sql = "INSERT INTO email (email, name, subject, body, time) "
                . "VALUES(:email, :name, :subject, :body, :time);";
        $query = $db->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR, 128);
        $query->bindParam(':name', $name, PDO::PARAM_STR, 128);
        $query->bindParam(':subject', $subject, PDO::PARAM_STR, 64);
        $query->bindParam(':body', $message, PDO::PARAM_STR);
        $query->bindValue(':time', (new DateTime())->format('Y-m-d H:i:s'));
        if ($query->execute()) {
            echo 1;
        } else {
            echo 0;
        }
    } catch (Exception $e) {
        $fname = __DIR__ . '/../log/error.log';
        $content = $e->getMessage() . "\n";
        file_put_contents($fname, $content, FILE_APPEND | LOCK_EX);
        echo 0;
    }
}
