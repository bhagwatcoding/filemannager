<?php
// Global time zone for India
date_default_timezone_set('Asia/Kolkata');
// paths are include
require_once 'config/paths.php';
// use an autoloader
require_once dir::vendor.'autoload.php';

// Auto call classes
$view  = new View;
$boot  = new Bootstrap;
$contr = new Controller;

?>
