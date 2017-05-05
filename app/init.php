<?php

session_start();
ob_start();



function __autoload($className){
  $classFile = __DIR__ . '/classes/class.' . strtolower($className) . '.php';
  if(file_exists($classFile)){
    require $classFile;
  }
}

Helper::Load();

// config dosyası
require 'system/config.php';

// dil dosyası çağır
require 'language/' . $config['default_language'] . '/lang.php';

$db = new basicdb($config['db2']['host'], $config['db2']['name'], $config['db2']['user'], $config['db2']['pass']);
$durupanel = new basicdb($config['db']['host'], $config['db']['name'], $config['db']['user'], $config['db']['pass']);

