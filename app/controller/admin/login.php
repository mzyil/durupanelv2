<?php



if (post('submit')){


    $username = post('username');
    $password = post('password');

        if(!$username || !$password){
            $error = 'Lütfen tüm alanları doldup tekrar deneyin.';
        }else {
           $password = md5($password);

            $row = $durupanel->select('users')
                      ->where('user_name', $username)
                      ->where('user_password', $password)
                      ->where('user_rank', 1)
                      ->run(true);

            if ($row){

                session('login', true);
                session('username', $row['user_name']);
                session('user_id', $row['user_id']);

                header('Location:' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : admin_url()));

            } else {
                $error = 'Kullanıcı adı ve/veya parola hatalı!';
            }

        }
}

require view('admin/login');