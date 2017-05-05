<?php


$data['user_firstname'] = post('user_firstname');
$data['user_lastname'] = post('user_lastname');
$data['user_name'] = post('user_name');
$data['user_password'] = post('user_password');
$data['user_avatar'] = post('user_avatar');

$pass = $data['user_password'];
$secret_pass = md5($pass);


if (post('courseadd')){


    $kayit = $durupanel->insert('users')
        ->set(array(
            'user_firstname' => $data['user_firstname'],
            'user_lastname' => $data['user_lastname'],
            'user_name' =>  $data['user_name'],
            'user_url' => 'url',
            'user_password' => 'qaew',
            'user_rank' =>  '1',
            'user_date' => date('Y-m-d H:i:s'),
            'user_avatar' => 'test',
        ));

    if ( $kayit ){
        header("Refresh:0");
    }else{
        echo "olmadi";
    }

}


require view('admin/register');