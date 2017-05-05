<head>

    <link rel="shortcut icon" href="assets/ico/favicon.html">
    <link href="<?=admin_asset_url('css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?=admin_asset_url('css/theme.css')?>" rel="stylesheet">
    <link href="<?=admin_asset_url('css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?=admin_asset_url('css/loader.css')?>" rel="stylesheet">
    <script src="<?=admin_asset_url('js/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?=admin_asset_url('js/jquery-ui.min.js')?>"></script>
    <script type="text/javascript" src="<?=admin_asset_url('js/raphael-min.js')?>"></script>
    <script type="text/javascript" src="<?=admin_asset_url('js/bootstrap.js')?>"></script>
    <script type="text/javascript" src='<?=admin_asset_url('js/sparkline.js')?>'></script>
    <script type="text/javascript" src='<?=admin_asset_url('js/morris.min.js')?>'></script>
    <script type="text/javascript" src="<?=admin_asset_url('js/jquery.dataTables.min.js')?>"></script>
    <script type="text/javascript" src="<?=admin_asset_url('js/jquery.masonry.min.js')?>"></script>
    <script type="text/javascript" src="<?=admin_asset_url('js/jquery.imagesloaded.min.js')?>"></script>
    <script type="text/javascript" src="<?=admin_asset_url('js/jquery.facybox.js')?>"></script>
    <script type="text/javascript" src="<?=admin_asset_url('js/jquery.alertify.min.js')?>"></script>
    <script type="text/javascript" src="<?=admin_asset_url('js/jquery.knob.js')?>"></script>
    <script type='text/javascript' src='<?=admin_asset_url('js/fullcalendar.min.js')?>'></script>
    <script type='text/javascript' src='<?=admin_asset_url('js/jquery.gritter.min.js')?>'></script>
    <script type="text/javascript" src="<?=admin_asset_url('js/realm.js')?>"></script>
    <script type="text/javascript" src="<?=admin_asset_url('js/jquery.slimscroll.min.js')?>"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

    <style>

        .table{
            background-color: white !important;
        }

        .tr:hover {
            cursor: pointer;
            background:rgba(0,0,0,0.2);
        }

    </style>
</head>

<div class="main_container">

    <div class="row-fluid">
    <div class="span12">
        <form method="post" action="">
            <table class="table">
                <tr style=" background:rgba(0,0,0,0.2);">
                    <td> <label class='control-label'>Bul:</label></td>
                    <td>    <input class='span7' type='text' name='search' placeholder='' >
                    </td>
                    <td> <button class="btn btn-primary"  type="submit" name="update" value="1" style="margin-right:10px;"><i  class="icon-save"></i> BUL</button></td>
                </tr>
            </table>
        </form>
    </div>
    </div> <!-- /row-fluid -->



    <div class="row-fluid">

        <div class="span12">

            <table class="table" style="font-size: 12px !important;">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Adı Soyadı</th>
                    <th>Telefon</th>
                    <th>Şehir</th>
                    <th>Konu</th>
                    <th>Özet</th>


                </thead>
                <tbody>
                <?php


                if ( post('search') ) {

                foreach ( $queryx as $row00 ){

                    $test = $durupanel->select('interviews')
                        ->where('customer_id', $row00["local_customer_id"])
                        ->run();

                    foreach ($test as $row7)
                    {

                        $get2 =  $row7["id"];
                    echo "<tr  class='tr' onclick=\"location.href='?id=$secilencustomer_id&interview_id=$get2'\">
                                  <td>" . $row7["id"] . "</td>
                                    <td>" . $row00["isim"] . " " .  $row00["soyisim"] . " </td>
                                    <td>" . $row00["telefon_1"] . " </td>
                                    <td>" . $row00["il"] . " </td>";

                        echo "<td>" .  $row7['course'] . "</td>
                                      <td>" .  $row7['result_content'] . "</td>
                                  </tr>";
                    }

                }

                 }else{
                    foreach ( $query as $row ){

                        $durumbilgisi = $durupanel->select('local_customer')
                            ->where('local_customer_id', $row['customer_id'])
                            ->run();


                        foreach ($durumbilgisi as $row9) {

                            $get =  $row["id"];

                            echo "<tr class='tr' onclick=\"location.href='?id=$secilencustomer_id&interview_id=$get'\">
                                               <td>" . $row["id"] . "</td>
                                               <td>" . $row9["isim"] . " " .  $row9["soyisim"] . "</td>
                                               <td>" . $row9["telefon_1"] . " </td>                             
                                                <td>" . $row9["il"] . " </td>
                                               <td>" . $row["course"] . "</td>
                                               <td>" . $row["result_content"] . "</td>
                            
                                
                                        </tr>";
                            }
                        }

                }

                ?>
                </tbody>
            </table>
        </div>

    </div> <!-- /row-fluid -->

</div>

<?php require view('admin/static/footer') ?>
