<?php

require __DIR__ . '/db.php';

$filterIP = ['91.224.140.211'];
$filterAgent = '/(google|yandex|bing)/i';
$filterReferer = '/^http:\/\/webvisor.com/';

$ip = $_SERVER['REMOTE_ADDR'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$referer = (isset($_SERVER["HTTP_REFERER"])) ? urldecode($_SERVER["HTTP_REFERER"]) : null;

if (in_array($ip, $filterIP)) {
    // IP in black list
} else if (preg_match($filterAgent, $agent)) {
    // YandexBot, Googlebot, bingbot
} else if (!is_null($referer) && preg_match($filterReferer, $referer)) {
    // http://webvisor.com
} else {
    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $uri = urldecode($_SERVER['REQUEST_URI']);
        $sql = "INSERT INTO visitor (ip, referer, time, uri, agent) "
            . "VALUES(:ip, :referer, :time, :uri, :agent);";
        $query = $db->prepare($sql);
        $query->bindParam(':referer', $referer);
        $query->bindParam(':ip', $ip, PDO::PARAM_STR, 15);
        $query->bindParam(':uri', $uri, PDO::PARAM_STR, 64);
        $query->bindParam(':agent', $agent, PDO::PARAM_STR);
        $query->bindValue(':time', (new DateTime())->format('Y-m-d H:i:s'));
        $query->execute();
    } catch (Exception $e) {
        $fname = __DIR__ . '/../log/error.log';
        $content = $e->getMessage() . "\n";
        file_put_contents($fname, $content, FILE_APPEND | LOCK_EX);
    }
}
