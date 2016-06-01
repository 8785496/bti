<?php

require __DIR__ . '/../php/db.php';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $sql = 'SELECT `id`, `ip` FROM `visitor` WHERE `location` IS NULL ORDER BY `id` DESC LIMIT 5';
    $query = $db->prepare("UPDATE `visitor` SET `location` = :location WHERE `id` = :id;");
    foreach ($db->query($sql) as $row) {
        $json = file_get_contents('http://ip-api.com/json/' . $row['ip']);
        $result = json_decode($json, true);
        if (isset($result['city'])) {
            $location = $result['city'];
            if (isset($result['regionName'])) {
                $location .= ', ' . $result['regionName'];
            }
            $query->bindParam(':location', $location, PDO::PARAM_STR);
            $query->bindParam(':id', $row['id'], PDO::PARAM_INT);
            $query->execute();
        }
    }
} catch (Exception $e) {
    echo $e->getTraceAsString();
//    $fname = __DIR__ . '/../log/error.log';
//    $content = $e->getMessage() . "\n";
//    file_put_contents($fname, $content, FILE_APPEND | LOCK_EX);
}
