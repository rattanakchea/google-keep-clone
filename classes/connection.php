<?php
    session_start();
    $path = $_SERVER['DOCUMENT_ROOT'] .  '/';
    //$path = C:\Users\rattanak\MyWorkspace\cms-phpacademy
    $path2 = dirname(__FILE__);
    //$path2 = C:\Users\rattanak\MyWorkspace\cms-phpacademy
try {
    $pdo = new PDO("sqlite:". $path . "classes/data.sqlite3");
} catch(PDOException $e) {
    exit($e->errorInfo);
}
