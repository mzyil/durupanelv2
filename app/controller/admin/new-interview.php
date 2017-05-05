<?php
$session_user = $_SESSION["user_id"];

$data['contentadd'] = post('contentadd');
$data['resultadd'] = post('resultadd');
$data['result_contentadd'] = post('result_contentadd');
$data['courseadd'] = post('courseadd');
$data['reminderadd'] = post('reminderadd');

$data['mus_isim'] = post('mus_isim');
$data['mus_soyisim'] = post('mus_soyisim');
$data['mus_tel1'] = post('mus_tel1');
$data['mus_tel2'] = post('mus_tel2');
$data['mus_sehir'] = post('mus_sehir');




if (post('courseadd')){


    $local_cus_id =  '1000' . rand(1000, 9999);




    $row = $durupanel->select('local_customer')
        ->where('local_customer_id', $local_cus_id)
        ->run(true);
    if ($row){

       echo "Hay aksi bir hata oluştur :( (Hata: Var olan id numarası atanamaz! 'Random local_customer_id')";

    } else {
        $local_customer_add = $durupanel->insert('local_customer')
            ->set(array(
                'local_customer_id' => $local_cus_id,
                'isim' => $data['mus_isim'],
                'soyisim' =>  $data['mus_soyisim'],
                'telefon_1' => $data['mus_tel1'],
                'telefon_2' => $data['mus_tel2'],
                'il' =>  $data['mus_sehir'],
                'customer_id' => '0',
            ));

        if ( $local_customer_add ){

            echo "local musteri tamam";
            echo 'Last Insert Id: '.$durupanel->lastId();

        }else{

            echo 'girmedimmmm!!!!!!!!!!';
        }


        $interview_add = $durupanel->insert('interviews')
            ->set(array(
                'content' => $data['contentadd'],
                'result' => $data['resultadd'],
                'result_content' =>  $data['result_contentadd'],
                'course' => $data['courseadd'],
                'customer_id'=> $local_cus_id,
                'reminder' =>  $data['reminderadd'],
                'created_by' => $session_user,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => '0000-00-00 00:00:00',
            ));

        if ( $interview_add ){

            echo "gorusme tablosu veri ekleme tamam" . "     random id:  " . $local_cus_id;
        }else{


        }
    }





}


require view('admin/new-interview');