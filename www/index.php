<?php
error_reporting(E_ALL);


// require '../vendor/autoload.php';
// @todo for debug
$loader = require '../vendor/autoload.php';
// $loader->add('Ethna', '../../ethna/class/');
// $loader->add('Aura\\Di', '../../ethna/vendor/aura/di/src');


$app_root = dirname(__DIR__);
$controller = new \Frontend\Controller(
    $app_root,
    $namespace = '\\Frontend'
);


$controller->execute();

