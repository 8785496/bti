<?php
require __DIR__ . '/auth.php';
require __DIR__ . '/get_browser.php';
require __DIR__ . '/helper.php';
require __DIR__ . '/../php/db.php';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $countEmail = $db->query("SELECT COUNT(*) FROM `email`")->fetchColumn();
    $countRequest = $db->query("SELECT COUNT(*) FROM `request`")->fetchColumn();
} catch (Exception $e) {
    logWrite($e->getMessage());
    echo $e->getMessage();
    exit;
}

$today = !isset($_GET['yesterday']);
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Админ панель</title>
        <!-- Bootstrap Core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body  border="1">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/admin"><?= $_SERVER['PHP_AUTH_USER'] ?> (IP <?= $_SERVER['REMOTE_ADDR'] ?>)</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/admin">Просмотры сегодня</a></li>
                        <li><a href="/admin?yesterday">Просмотры вчера</a></li>
                        <li><a href="/admin/log.php">Лог ошибок</a></li>
                        <li><a href="/admin/request.php">Заявок <span class="badge"><?= $countRequest ?></span></a></li>
                        <li><a href="/admin/email.php">Писем <span class="badge"><?= $countEmail ?></span></a></li>
                        <li>
                            <a href="/cron/getlocation.php" id="getlocation">
                                <span class="glyphicon glyphicon-refresh" aria-hidden="true" title="Определить местоположение просмотров"></span>
                            </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
