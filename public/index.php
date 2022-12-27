<?php

// [SERVER_SOFTWARE] => Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/7.4.30
// [SERVER_NAME] => localhost
// [SERVER_ADDR] => ::1
// [SERVER_PORT] => 80
// [REMOTE_ADDR] => ::1
// [DOCUMENT_ROOT] => C:/xampp/htdocs
// [REQUEST_SCHEME] => http

session_start();

$path = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
$path= str_replace("index.php", "", $path);

define('ROOT', $path);
define('ASSETS', $path . "assets/");

include "../app/init.php";

$app = new App();
