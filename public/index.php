<?php

require_once '../vendor/autoload.php'; // Đảm bảo Composer autoload được tải
require_once '../src/Router.php';

$request = $_SERVER['REQUEST_URI'];

Router::route($request);

?>