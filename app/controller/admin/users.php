<?php


$query = $db->select('sat_customer')
            ->where('status', '1')
            ->run();


if (isset($_GET['id'])){
    $myid = $_GET['id'];



    $musteri_sil = $db->update('sat_customer')
                ->where('customer_id', $myid)
                ->set(array(
                   'status' => '0'
                  ));

    header("Location: /admin/users");
}



require view('admin/users');