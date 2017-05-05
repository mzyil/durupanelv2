<?php




$ulke = $db->select('sat_country')
             ->run();



if (post('submit')){

    $data['customer_group_id'] = '1';
    $data['store_id'] = '0';
    $data['language_id'] = '0';
    $data['firstname'] = post('firstname');
    $data['lastname'] = post('lastname');
    $data['email'] = post('email');
    $data['telephone'] = post('telephone');
    $data['fax'] = post('fax');
    $data['password'] = "202cb962ac59075b964b07152d234b70";
    $data['salt'] = 'salt';
    $data['newsletter'] = '0';
    $data['address_id'] = '0';
    $data['custom_field'] = ' ';
    $data['ip'] = $_SERVER['REMOTE_ADDR'];
    $data['status'] = '1';
    $data['approved'] = '1';
    $data['safe'] = '0';
    $data['token'] = ' ';
    $data['code'] = ' ';
    $data['date_added'] = date('Y-m-d H:i:s');



    // sat_customer tablo
    $musteriekle = $db->insert('sat_customer')
        ->set($data);

    if ($musteriekle){
        echo "tamam musteri";
    } else {
        echo  'kullanıcı kayıt edilemedi!';

    }


    $customer_id = $db->select('sat_customer')
        ->where('email', $data['email'])
        ->run();

    foreach ( $customer_id as $row ) {
        $id = $row['customer_id'];
        echo $id;
    }


    $data2['customer_id'] = $id;
    $data2['firstname'] = post('firstname');
    $data2['lastname'] = post('lastname');
    $data2['company'] = post('company');
    $data2['address_1'] = post('address_1');
    $data2['address_2'] = post('address_2');
    $data2['city'] = post('city');
    $data2['postcode'] = post('postcode');
    $data2['country_id'] = post('country_id');
    $data2['zone_id'] = post('zone_id');
    $data2['custom_field'] = 'default';







        $adresekle = $db->insert('sat_address')

                        ->set($data2);

        if ($adresekle){
            echo "tamam adres";
        } else {
            echo 'adress kayıt edilemedi!';
                }
}


require view('admin/new-user');
