<?php

$secilencustomer_id = $_GET["id"];

$musteri_gorusme = $durupanel->select('interviews')
    ->where('customer_id', $secilencustomer_id)
    ->run();

require view('admin/interviews');