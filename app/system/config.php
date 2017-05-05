<?php

$config = array();

$config['db2'] = [
  'host' => 'localhost',
  'name' => 'akademid_akademiduru_db',
  'user' => 'akademid_sari',
  'pass' => 'Sari12985!'
];

$config['db'] = [
    'host' => 'localhost',
    'name' => 'akademid_durupanel',
    'user' => 'akademid_sari',
    'pass' => 'Sari12985!'
];

// DB eklerken mutlaka init.php dosyasını incele


$config['default_language'] = 'tr';

define('dir', realpath('.'));
define('controller', dir . '/app/controller');
define('view' , dir . '/app/view');
define('url', 'http://' . $_SERVER['SERVER_NAME']);
