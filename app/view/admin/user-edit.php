
<head>

    <link rel="shortcut icon" href="assets/ico/favicon.html">
    <link href="<?=admin_asset_url('css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?=admin_asset_url('css/theme.css')?>" rel="stylesheet">
    <link href="<?=admin_asset_url('css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?=admin_asset_url('css/datepicker.css')?>" rel="stylesheet">
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
    <script type="text/javascript" src="<?=admin_asset_url('js/tiny.editor.packed.js')?>"></script>

    <script type="text/javascript" src="<?=admin_asset_url('js/select2.min.js')?>"></script>
    <script type="text/javascript" src="<?=admin_asset_url('js/bootstrap-colorpicker.js')?>"></script>
    <script type="text/javascript" src="<?=admin_asset_url('js/bootstrap-datepicker.js')?>"></script>
    <script type="text/javascript" src="<?=admin_asset_url('js/bootstrap-timepicker.js')?>"></script>
    <script type="text/javascript" src="<?=admin_asset_url('js/jquery.validate.min.js')?>"></script>
    <script type="text/javascript" src="<?=admin_asset_url('js/jquery.bootstrap.wizard.min.js')?>"></script>
    <script type="text/javascript" src="<?=admin_asset_url('js/tiny.editor.packed.js')?>"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>




</head>



<!-- Main window -->

<script type="text/javascript">

    $(function () {
        $('#iller').change(function () {
            $('#ilceler').empty();
            var deger=$(this).val();
            $.post("ajax",{il:deger}, function (a) {
                $('#ilceler').append(a);
            })
        });

    });


</script>
<body>



<div class="main_container" id="">
<br>
    <div class="row-fluid">


        <div class="widget widget-padding span12" id="wizard_validate">
            <div class="widget-header">
                <ul class="nav nav-tabs">
                    <li><a href="#validate_tab1" data-toggle="tab"><i class='icon-edit'></i>Müşteri Düzenle</a></li>
                    <li><a href="#validate_tab2" data-toggle="tab"><i class='icon-map-marker'></i>Adres Ekle</a></li>
                    <li><a href="#validate_tab3" data-toggle="tab"><i class='icon-envelope'></i>Görüşmeler</a></li>
                </ul>
            </div>

            <div class="widget-body" style="min-height:75px">



                    <div class="tab-content">
                        <div class="tab-pane active" id="validate_tab1">

                                <form class='form-horizontal' action="" method="post" id="myForm">
                            <?php

                            if ( $musteri ){
                            foreach ( $musteri as $row ) { ?>
                                    <div class='widget widget-padding'>
                                    <div class='widget-header'>

                                        <i class='icon-list-alt'></i><h5>Müşteri Bilgileri</h5>
                                        <div class='widget-buttons'>
                                            <a href='#'  data-collapsed='false' class='tip collapse'><i class='icon-chevron-up'></i></a>
                                        </div>
                                    </div>
                                    <div class='widget-body' >
                                        <div class='widget-forms clearfix'>

                                                <div class='control-group'>
                                                    <label class='control-label'>İsim:</label>
                                                    <div class='controls'>
                                                        <input class='span7' type='text'  name='firstname' placeholder='' value="<?= $row['firstname']; ?>" required >
                                                    </div>
                                                </div>
                                                <div class='control-group'>
                                                    <label class='control-label'>Soyisim:</label>
                                                    <div class='controls'>
                                                        <input class='span7' type='text' name='lastname' placeholder='' value="<?= $row['lastname']; ?>" required >
                                                    </div>
                                                </div>
                                                <div class='control-group'>
                                                    <label class='control-label'>Mail Adresi:</label>
                                                    <div class='controls'>
                                                        <input class='span7' type='text' name='email' placeholder='' value="<?= $row['email']; ?>"  >
                                                    </div>
                                                </div>
                                                <div class='control-group'>
                                                    <label class='control-label'>Telefon:</label>
                                                    <div class='controls'>
                                                        <input class='span7' type='text' name='telephone' placeholder='' value="<?= $row['telephone']; ?>" >
                                                    </div>
                                                </div>
                                                <div class='control-group'>
                                                    <label class='control-label'>Tc Kimlik:</label>
                                                    <div class='controls'>
                                                        <input class='span7' type='text' name='fax' placeholder='' value="<?= $row['fax']; ?>" >
                                                    </div>
                                                </div>

                                        </div>
                                    </div>
                                    </div>
                                <br>
                                    <?php } } ?>
                                    <?php

                                    if ( $musteri_adress ){
                                        foreach ( $musteri_adress as $row ) { ?>


                                    <div class='widget widget-padding'>
                                            <div class='widget-header'>

                                                <i class='icon-list-alt'></i><h5>İletişim Bilgileri (<?= $row['address_id']; ?> ID Numaralı Adres)</h5>

                                                <div class='widget-buttons'>
                                                    <span style="font-size: 11px;color:darkred;">Düzenle</span> <input type="checkbox"  name="secim" id="secim" value="<?= $row['address_id']; ?>"> <span style="font-size: 11px;color:darkred;">Sil</span> <input type="checkbox"  name="sil" id="sil"  value="<?= $row['address_id']; ?>"><a href='#'  data-collapsed='true' class='tip collapse'> <i class='icon-chevron-up'></i></a>
                                                </div>
                                            </div>
                                            <div class='widget-body' style="overflow: hidden; display: none;">
                                                <div class='widget-forms clearfix'>
                                                    <input class='span7' type='hidden' name='address_id' placeholder=''  value="<?= $row['address_id']; ?>" >
                                                    <div class='control-group'>
                                                        <label class='control-label'>Adres 1:</label>
                                                        <div class='controls'>
                                                            <textarea class="span7" style="" name='address_1[<?= $row['address_id']; ?>]' rows="5" ><?= $row['address_1']; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class='control-group'>
                                                        <label class='control-label'>Adres 2:</label>
                                                        <div class='controls'>
                                                            <input class='span7' type='text' name='address_2[<?= $row['address_id']; ?>]' placeholder='' value="<?= $row['address_2']; ?>" >
                                                        </div>
                                                    </div>
                                                    <div class='control-group'>
                                                        <label class='control-label'>Ülke:</label>
                                                        <div class='controls'>
                                                            <input class='span7' type='hidden' name='country_id' placeholder=''  value="<?= $row['country_id']; ?>" >
                                                            <input class='span7' type='text' name='country_id_show' placeholder='' value="<?php $ulke = $db->select('sat_country')
                                                                ->where('country_id', $row['country_id'])
                                                                ->run();
                                                                 foreach ($ulke as $row2) { echo $row2['name']; }?>"  disabled>
                                                        </div>
                                                    </div>
                                                    <div class='control-group'>
                                                        <label class='control-label'>Şehir:</label>
                                                        <div class='controls'>
                                                            <input class='span7' type='hidden' name='zone_id' placeholder=''  value="<?= $row['zone_id']; ?>" >
                                                            <input class='span7' type='text' name='zone_id_show' placeholder='' value="<?php $sehir = $db->select('sat_zone')
                                                                ->where('zone_id', $row['zone_id'])
                                                                ->run();
                                                            foreach ($sehir as $row3) { echo $row3['name']; }?>"  disabled>
                                                        </div>
                                                    </div>
                                                    <div class='control-group'>
                                                        <label class='control-label'>Bölge:</label>
                                                        <div class='controls'>
                                                            <input class='span7' type='text' name='city[<?= $row['address_id']; ?>]' placeholder='' value="<?= $row['city']; ?>" >
                                                        </div>
                                                    </div>
                                                    <div class='control-group'>
                                                        <label class='control-label'>Şirket:</label>
                                                        <div class='controls'>
                                                            <input class='span7' type='text' name='company[<?= $row['address_id']; ?>]' placeholder='' value="<?= $row['company']; ?>"  >
                                                        </div>
                                                    </div>
                                                    <div class='control-group'>
                                                        <label class='control-label'>Posta Kodu:</label>
                                                        <div class='controls'>
                                                            <input class='span7' type='text' name='postcode[<?= $row['address_id']; ?>]' placeholder='' value="<?= $row['postcode']; ?>"  >
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                    </div>
                                            <br>
                                        <?php } } ?>

                                    <script>
                                        function myFunction() {

                                            if (confirm("Değişiklikleri onaylıyor musun?") == true) {
                                                document.getElementById("myForm").submit();

                                            } else {
                                            }
                                        }
                                    </script>


                                    </form>


                            <button class="btn btn-danger"  type="submit" name="close" value="1" style="float:right;" onclick="window.close();"><i  class="icon-signout"></i> Kapat</button>
                            <button class="btn btn-primary"  type="submit" name="update" value="1" style="float:right;margin-right: 10px;" onclick="myFunction()"><i  class="icon-save"></i> Kaydet</button>

                        </div>
                        <div class="tab-pane" id="validate_tab2">

                            <form class='form-horizontal' action="" method="post">

                                <input class='span7' type='hidden' name='firstnameadd' value="<?= $row['firstname']; ?>" placeholder=''   >
                                <input class='span7' type='hidden' name='lastnameadd' value="<?= $row['lastname']; ?>" placeholder='' >


                                        <div class='widget widget-padding'>
                                            <div class='widget-header'>

                                                <i class='icon-list-alt'></i><h5><?= $row['firstname'] . " " . $row['lastname']; ?> Müşterisine Adres Ekle </h5>

                                                <div class='widget-buttons'>
                                                    <a href='#'  data-collapsed='true' class='tip collapse'> <i class='icon-chevron-up'></i></a>
                                                </div>
                                            </div>
                                            <div class='widget-body'>
                                                <div class='widget-forms clearfix'>
                                                    <div class='control-group'>
                                                        <label class='control-label'>Adres 1:</label>
                                                        <div class='controls'>
                                                            <textarea class="span7" style="" name='address_1add' rows="5" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class='control-group'>
                                                        <label class='control-label'>Adres 2:</label>
                                                        <div class='controls'>
                                                            <input class='span7' type='text' name='address_2add' placeholder='' value=""  >
                                                        </div>
                                                    </div>
                                                    <div class='control-group'>
                                                        <label class='control-label'>Ülke:</label>
                                                        <div class='controls'>
                                                            <select tabindex='1' data-placeholder='' name='country_idadd' id="iller" class='span7'  >
                                                                <option value="0" selected>Ülke seçiniz</option>
                                                                <option value="215" >Türkiye</option>
                                                                <?php
                                                                if ( $ulke2 ){
                                                                    foreach ( $ulke2 as $row2 ) {
                                                                        echo "<option value='". $row2['country_id'] ."'>" . $row2['name'] ."</option>";
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='control-group'>
                                                        <label class='control-label'>Şehir:</label>
                                                        <div class='controls'>
                                                            <select tabindex='1' data-placeholder='' id="ilceler" name='zone_idadd' class='span7'>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='control-group'>
                                                        <label class='control-label'>Bölge:</label>
                                                        <div class='controls'>
                                                            <input class='span7' type='text' name='cityadd' placeholder='' value=""  >
                                                        </div>
                                                    </div>
                                                    <div class='control-group'>
                                                        <label class='control-label'>Şirket:</label>
                                                        <div class='controls'>
                                                            <input class='span7' type='text' name='companyadd' placeholder='' value="" >
                                                        </div>
                                                    </div>
                                                    <div class='control-group'>
                                                        <label class='control-label'>Posta Kodu:</label>
                                                        <div class='controls'>
                                                            <input class='span7' type='text' name='postcodeadd' placeholder='' value="" >
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                <button class="btn btn-primary" type="submit" name="submit" value="2" style="float:right;"><i  class="icon-save"></i> Kaydet</button>
                            </form>

                        </div>
                        <div class="tab-pane" id="validate_tab3">

                            <form class='form-horizontal' action="" method="post">
                                <?php

                                if ( $musteri_gorusme ){
                                    foreach ( $musteri_gorusme as $row4 ) { ?>

                                        <div class='widget widget-padding'>
                                            <div class='widget-header'>

                                                <i class='icon-list-alt'></i><h5>(<?= $row4['id']; ?> ID Numaralı Görüşme)</h5>

                                                <div class='widget-buttons'>
                                                    <span style="font-size: 11px;color:darkred;">Düzenle</span> <input type="checkbox"  name="gorusmesec" id="gorusmesec" value="<?= $row4['id']; ?>"> <span style="font-size: 11px;color:darkred;">Sil</span> <input type="checkbox"  name="silgorusme" id="silgorusme"  value="<?= $row4['id']; ?>"><a href='#'  data-collapsed='true' class='tip collapse'> <i class='icon-chevron-up'></i></a>
                                                </div>
                                            </div>
                                            <div class='widget-body' style="overflow: hidden; display: none;">
                                                <span style="float:right;font-size:11px;"><b>Oluşturan: </b><?php $olusturan = $durupanel->select('users')
                                                        ->where('user_id', $row4['created_by'])
                                                        ->run();
                                                    foreach ($olusturan as $row0) { echo $row0['user_firstname'] . " " . $row0['user_lastname'] ; }?></span><br><br>
                                                <div class='widget-forms clearfix'>
                                                    <div class='control-group'>
                                                        <label class='control-label'>Konu:</label>
                                                        <div class='controls'>
                                                            <input class='span7' type='text' name='course[<?= $row4['id']; ?>]' placeholder='' value="<?= $row4['course']; ?>"  >
                                                        </div>
                                                    </div>
                                                    <div class='control-group'>
                                                        <label class='control-label'>Görüşme İçeriği:</label>
                                                        <div class='controls'>
                                                            <textarea class="span7" style="" name='content[<?= $row4['id']; ?>]' rows="5" ><?= $row4['content']; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class='control-group'>
                                                        <label class='control-label'>Görüşme Özeti:</label>
                                                        <div class='controls'>
                                                            <textarea class="span7" style="" name='result_content[<?= $row4['id']; ?>]' rows="3" ><?= $row4['result_content']; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class='control-group'>
                                                        <label class='control-label'>Sonuç:</label>
                                                        <div class='controls'>

                                                            <input class='span7' type='hidden' name='result[<?= $row4['id']; ?>]' placeholder='' value="<?php $durumbilgisi = $durupanel->select('interviews_result')
                                                                ->where('result', $row4['result'])
                                                                ->run();
                                                            foreach ($durumbilgisi as $row9) {
                                                                echo $row9['result']; }?>" >


                                                            <?php foreach ($durumbilgisi as $row9) {
                                                                echo "<span style='padding:7px 7px 7px 7px;' class='" . $row9['result_css'] ."'>" . $row9['result_name'] . "</span>";
                                                            }?>
                                                        </div>
                                                    </div>

                                                    <span style="float:right;font-size:11px;"> <b>Oluşturma Tarihi: </b> <?= $row4['created_at']; ?> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    <?php } } ?>

                                <script>
                                    function myFunction() {

                                        if (confirm("Değişiklikleri onaylıyor musun?") == true) {
                                            document.getElementById("myForm").submit();

                                        } else {
                                        }
                                    }
                                </script>

                                <div class='widget widget-padding'>
                                    <div class='widget-header'  style="background-color:rgba(0,128,0,0.3) ">

                                        <i class='icon-list-alt'></i><h5>Yeni Görüşme Ekle</h5>

                                        <div class='widget-buttons'>
                                            <a href='#'  data-collapsed='true' class='tip collapse'> <i class='icon-chevron-up'></i></a>
                                        </div>
                                    </div>
                                    <div class='widget-body' style="overflow: hidden; display: none;">
                                        <br>
                                        <div class='widget-forms clearfix'>
                                            <div class='control-group'>
                                                <label class='control-label'>Konu:</label>
                                                <div class='controls'>
                                                    <input class='span7' type='text' name='courseadd' placeholder='' value=""  >
                                                </div>
                                            </div>
                                            <div class='control-group'>
                                                <label class='control-label'>Görüşme İçeriği:</label>
                                                <div class='controls'>
                                                    <textarea class="span7" style="" name='contentadd' rows="5" ></textarea>
                                                </div>

                                            </div>
                                            <div class='control-group'>
                                                <label class='control-label'>Görüşme Özeti:</label>
                                                <div class='controls'>
                                                    <textarea class="span7" style="" name='result_contentadd' rows="3" ></textarea>
                                                </div>
                                            </div>
                                            <div class='control-group'>
                                                <label class='control-label'>Sonuç:</label>
                                                <div class="controls">

                                                    <label class="radio">
                                                        <input type="radio" name="resultadd" id="optionsRadios1" value="1" checked="">
                                                        Olumlu
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="resultadd" id="optionsRadios2" value="2">
                                                        Olumsuz
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="resultadd" id="optionsRadios3" value="0">
                                                        Beklemede
                                                    </label>
                                                </div>

                                            </div>
                                            <div class='control-group'>
                                                <label class='control-label'>Hatırlatıcı:</label>
                                                <div class='controls'>
                                                    <input class='span7' type='date' name='reminderadd' placeholder='' value="9999-11-11" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <br>
                                <button class="btn btn-primary" type="submit" name="submit" value="2" style="float:right;"><i  class="icon-save"></i> Kaydet</button>
                            </form>

                        </div>

                    </div>


            </div>

        </div>
    </div>

    <br>







</div>
</body>
<!-- /Main window -->

