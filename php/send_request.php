<?php

require __DIR__ . '/db.php';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    if (isset($_POST['name'])) {
        $name = trim($_POST['name']);
        if (strlen($name) <= 0) {
            echo 0;
            exit;
        }
    }
    $phone = (isset($_POST['phone'])) ? trim($_POST['phone']) : null;
    $email = (isset($_POST['email'])) ? trim($_POST['email']) : null;
    $typeObject = (isset($_POST['typeObject'])) ? trim($_POST['typeObject']) : null;
    $typeWork = (isset($_POST['typeWork'])) ? trim($_POST['typeWork']) : null;
    $target = (isset($_POST['target'])) ? trim($_POST['target']) : null;
    $adress = (isset($_POST['adress'])) ? trim($_POST['adress']) : null;
    $size = (isset($_POST['size'])) ? trim($_POST['size']) : null;
    $description = (isset($_POST['description'])) ? trim($_POST['description']) : null;
    $folder = '20160429_152536';
    
    $sql = "INSERT INTO request (email, type_object, type_work, name, phone, target, adress, size, description, folder, files, time) "
            . "VALUES(:email, :typeObject, :typeWork, :name, :phone, :target, :adress, :size, :description, :folder, :files, NOW());";
    $query = $db->prepare($sql);
    if ($email) {
        $query->bindParam(':email', $email, PDO::PARAM_STR, 64);
    } else {
        $query->bindValue(':email', null, PDO::PARAM_NULL);
    }
    if ($typeObject) {
        $query->bindParam(':typeObject', $typeObject, PDO::PARAM_STR, 64);
    } else {
        $query->bindValue(':typeObject', null, PDO::PARAM_NULL);
    }
    if ($typeWork) {
        $query->bindParam(':typeWork', $typeWork, PDO::PARAM_STR, 64);
    } else {
        $query->bindValue(':typeWork', null, PDO::PARAM_NULL);
    }
    $query->bindParam(':name', $name, PDO::PARAM_STR, 64);
    $query->bindParam(':phone', $phone, PDO::PARAM_STR, 32);
    if ($target) {
        $query->bindParam(':target', $target, PDO::PARAM_STR, 64);
    } else {
        $query->bindValue(':target', null, PDO::PARAM_NULL);
    }
    if ($adress) {
        $query->bindParam(':adress', $adress, PDO::PARAM_STR, 64);
    } else {
        $query->bindValue(':adress', null, PDO::PARAM_NULL);
    }
    if ($size) {
        $query->bindParam(':size', $size, PDO::PARAM_STR, 32);
    } else {
        $query->bindValue(':size', null, PDO::PARAM_NULL);
    }
    if ($description) {
        $query->bindParam(':description', $description, PDO::PARAM_STR, 1024);
    } else {
        $query->bindValue(':description', null, PDO::PARAM_NULL);
    }
    $query->bindParam(':folder', $folder, PDO::PARAM_STR, 32);
    $query->bindValue(':files', null, PDO::PARAM_NULL);
    
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



//echo '<pre>';
//print_r($_FILES);
//echo '<br>';
//print_r($_POST);
//echo '</pre>';
//foreach ($_FILES as $file) {
//    if ($file['error'] == 0) {
//        $name = $file['name'];
//        move_uploaded_file($file['tmp_name'], __DIR__ . "/../upload/" . urlencode($name));
//    }
//}
