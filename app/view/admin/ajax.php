<?php

if($_POST){
    $il = $_POST["il"];
    $sehir = $db->select('sat_zone')
        ->where('country_id', $il)
        ->run();


    if ( $sehir ){
        foreach ( $sehir as $row ) {
            echo "<option value='". $row['zone_id'] ."'>" . $row['name'] ."</option>";
        }
    }

}