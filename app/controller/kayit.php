<?php

if (post('submit')){

  $data['user_name'] = post('user_name');
  $data['user_url'] = permalink($data['user_name']);

  if (!$data['user_url']){
    $error = __('bos_mesaj');
  } else {

    // veritabanına ekle
    $query = $db->insert('users')
    ->set($data);

    if ($query){
      header('Location:' . site_url('profil/' . $data['user_url']));
    } else {
      $error = 'kullanıcı kayıt edilemedi!';
    }

  }

}

require view('kayit');
