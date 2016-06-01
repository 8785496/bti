<?php

require __DIR__ . '/../php/visitor.php';

function printRButton ($value) {
    
    echo '<div class="radio"><label>';
    if (isset($_GET['target']) && $_GET['target'] == $value) {
        echo '<input type="radio" name="target" value="' . $value . '" checked>';
    } else {
        echo '<input type="radio" name="target" value="' . $value . '">';
    }
    echo $value . '</label></div>'; 
}

require __DIR__ . '/../temlate/request.php';
