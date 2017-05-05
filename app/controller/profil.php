<?php

if (url(1) == 'ekle'){

  $query = $db->insert('users')
    ->set(array(
      'user_name' => url(2),
      'user_url' => url(2)
    ));

    if ($query){
      echo 'Uye eklendi!';
    } else {
      echo 'Uye eklenemedi!!!!!!';
    }

} else {

  $url = url(1);

  $query = $db->select('users')
    ->where('user_url', $url)
    ->run(true);

  if ($query){
    echo 'hoşgeldin, ' . $query['user_name'];
  } else {
    echo 'user not found.';
  }

}
