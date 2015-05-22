<?php

require_once('glide-config.php');

require_once(CLS_GLIDEIMAGES_COMPOSER_VENDOR_DIR);

$uri = $_SERVER['REQUEST_URI'];
$path = preg_replace('#^/?glidemedia/#', '', $uri);
$path = preg_replace('#\?.*$#', '', $path);

$server = League\Glide\ServerFactory::create([
    'source' => CLS_GLIDEIMAGES_SOURCE_DIR,
    'cache' => 'cache',
]);

$server->outputImage($path, $_GET);