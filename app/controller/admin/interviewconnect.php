<?php





$secilencustomer_id = $_GET["id"];
$interview_id = $_GET["interview_id"];



$data['search'] = post('search');


if (($_GET['interview_id'])) {
    $customer_guncelle = $durupanel->update('interviews')
        ->where('id', $interview_id)
        ->set(array(
            'customer_id' => $secilencustomer_id
        ));

    if ( $customer_guncelle ){
        echo 'uye guncellendi.';
    }
}





$query = $durupanel->select('interviews')
    ->orderby('id', 'DESC')
    ->run();





if (post('search')){

    $queryx = $durupanel->select('local_customer')
        ->where('isim', $data['search'])
        ->run();

}




require view('admin/interviewconnect');