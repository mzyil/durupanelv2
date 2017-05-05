<?php


$session_user = $_SESSION["user_id"];


$secilencustomer_id = $_GET["id"];


$ulke = $db->select('sat_country')
    ->run();

$ulke2 = $db->select('sat_country')
    ->run();


$musteri_gorusme = $durupanel->select('interviews')
    ->where('customer_id', $secilencustomer_id)
    ->run();


$musteri = $db->select('sat_customer')
            ->where('customer_id', $secilencustomer_id)
            ->run();

$musteri_adress = $db->select('sat_address')
    ->where('customer_id', $secilencustomer_id)
    ->run();

$data['firstnameadd'] = post('firstnameadd');
$data['lastnameadd'] = post('lastnameadd');
$data['address_1add'] = post('address_1add');
$data['address_2add'] = post('address_2add');
$data['cityadd'] = post('cityadd');
$data['companyadd'] = post('companyadd');
$data['postcodeadd'] = post('postcodeadd');
$data['zone_idadd'] = post('zone_idadd');
$data['country_idadd'] = post('country_idadd');
$data['firstname'] = post('firstname');
$data['lastname'] = post('lastname');
$data['email'] = post('email');
$data['telephone'] = post('telephone');
$data['fax'] = post('fax');
$data['optionsRadios'] = post ('optionsRadios');
$data['address_id'] = post('address_id');
$data['address_1'] = post('address_1');
$data['address_2'] = post('address_2');
$data['city'] = post('city');
$data['company'] = post('company');
$data['postcode'] = post('postcode');


$data['course'] = post('course');
$data['content'] = post('content');
$data['reminder'] = post('reminder');
$data['result'] = post('result');
$data['result_content'] = post('result_content');
$data['secim'] = post('secim');
$data['sil'] = post('sil');
$data['gorusmesec'] = post('gorusmesec');

$data['courseadd'] = post('courseadd');
$data['contentadd'] = post('contentadd');
$data['resultadd'] = post('resultadd');
$data['result_contentadd'] = post('result_contentadd');
$data['silgorusme'] = post('silgorusme');
$data['reminderadd'] = post('reminderadd');





if (post('address_1add')){

    $adres_ekle = $db->insert('sat_address')

        ->set(array(
            'customer_id' => $secilencustomer_id,
            'firstname' => $data['firstnameadd'],
            'lastname' => $data['lastnameadd'],
            'company' => $data['companyadd'],
            'address_1' =>  $data['address_1add'],
            'address_2' => $data['address_2add'],
            'city' => $data['cityadd'],
            'postcode' =>  $data['postcodeadd'],
            'country_id' => $data['country_idadd'],
            'zone_id' => $data['zone_idadd'],
            'custom_field' => 'default',
        ));

    if ( $adres_ekle ){
        header("Refresh:0");
    }else{

    }

}

if (post('firstname')){

    $guncelle_musteri = $db->update('sat_customer')
        ->where('customer_id',  $secilencustomer_id)
        ->set(array(
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'telephone' => $data['telephone'],
            'fax' => $data['fax'],
        ));


    if(isset($_POST['secim'])) {
        $guncelle_adres = $db->update('sat_address')
            ->where('address_id', $data['secim'])
            ->set(array(
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'address_1' => $data['address_1'][$data['secim']],
                'address_2' =>  $data['address_2'][$data['secim']],
                'city' => $data['city'][$data['secim']],
                'company' => $data['company'][$data['secim']],
                'postcode' =>  $data['postcode'][$data['secim']],

            ));
        header("Refresh:0;");

    }else{
        header("Refresh:0;");
    }

    if(isset($_POST['sil'])) {
        $adresil = $db->delete('sat_address')
            ->where('address_id', $data['sil'])
            ->done();
    }else{
    }
}

if(isset($_POST['gorusmesec'])) {
    $gorusme_guncelle = $durupanel->update('interviews')
        ->where('id', $data['gorusmesec'])
        ->set(array(
            'result' => $data['result'][$data['gorusmesec']],
            'course' => $data['course'][$data['gorusmesec']],
            'content' => $data['contentspan12'][$data['gorusmesec']],
            'result_content' => $data['result_content'][$data['gorusmesec']],
        ));

    if ( $gorusme_guncelle ){
        header("Refresh:0");
    }

}

if(isset($_POST['silgorusme'])) {
    $gorusme_sil = $durupanel->delete('interviews')
        ->where('id', $data['silgorusme'])
        ->done();
         header("Refresh:0");

}


if (post('courseadd')){


    $gorusme_ekle = $durupanel->insert('interviews')
        ->set(array(
            'content' => $data['contentadd'],
            'result' => $data['resultadd'],
            'result_content' =>  $data['result_contentadd'],
            'course' => $data['courseadd'],
            'customer_id' => $secilencustomer_id,
            'reminder' =>  $data['reminderadd'],
            'created_by' => $session_user,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => '0000-00-00 00:00:00',
        ));

    if ( $gorusme_ekle ){
        header("Refresh:0");
    }else{

    }

}



require view('admin/user-edit');