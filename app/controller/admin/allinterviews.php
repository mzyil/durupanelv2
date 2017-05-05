<?php


$query = $durupanel->select('interviews')
    ->orderby('id', 'DESC')
    ->run();



require view('admin/allinterviews');


