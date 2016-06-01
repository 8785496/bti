<?php

mb_internal_encoding("UTF-8");

function html($text) {
    if (mb_strlen($text) > 40) {
        $subtext = mb_substr($text, 0, 37) . '...';
        echo '<td title="' . $text . '">' . $subtext . '</td>';
    } else {
        echo '<td>' . $text . '</td>';
    }
}

function htmlAgent($userAgent) {
    $userOS = getOS($userAgent);
    $userBrowser = getBrowser($userAgent);
    $text = "$userOS, $userBrowser";
    echo '<td title="' . $userAgent . '">' . $text . '</td>';
}

function htmlTime($datetime) {
    $date = new DateTime($datetime);
    $text = $date->format('H:i:s');
    echo '<td title="' . $datetime . '">' . $text . '</td>';
}

function htmlDate($datetime) {
    $date = new DateTime($datetime);
    $text = $date->format('d M H:i');
    echo '<td title="' . $datetime . '">' . $text . '</td>';
}

function logWrite($message) {
    $fname = __DIR__ . '/../log/error.log';
    $content = $message . "\n";
    file_put_contents($fname, $content, FILE_APPEND | LOCK_EX);
}
