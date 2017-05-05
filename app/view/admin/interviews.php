
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




</head>

<div class="widget widget-padding span12">

<form class='form-horizontal' action="" method="post" id="myForm">

    <?php

    if ( $musteri_gorusme ){
        foreach ( $musteri_gorusme as $row ) { ?>


            <div class='widget widget-padding'>
                <div class='widget-header'>

                    <i class='icon-list-alt'></i><h5><?= $row['id']; ?> ID Numaralı Görüşme İçeriği</h5>

                    <div class='widget-buttons'>
                        <a href='#'  data-collapsed='true' class='tip collapse'> <i class='icon-chevron-up'></i></a>
                    </div>
                </div>
                <div class='widget-body' style="overflow: hidden; display: none;">
                    <div class='widget-forms clearfix'>
                        <div class='control-group'>
                            <label class='control-label'>Konu:</label>
                            <div class='controls'>
                                <input class='span7' type='text' name='' placeholder='' value="<?= $row['course']; ?>" disabled >
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Görüşme İçeriği:</label>
                            <div class='controls'>
                                <textarea class="span7" style="" name='' rows="5" disabled><?= $row['content']; ?></textarea>
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Sonuç Metni:</label>
                            <div class='controls'>
                                <textarea class="span7" style="" name='' rows="3" disabled><?= $row['result_content']; ?></textarea>
                        </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Sonuç:</label>
                            <div class='controls'>
                                <input class='span7' type='text' name='' placeholder='' value="<?= $row['result']; ?>" disabled >
                            </div>
                        </div>

                        <div class='control-group'>
                            <label class='control-label'>Oluşturma Tarihi:</label>
                            <div class='controls'>
                                <input class='span7' type='text' name='' placeholder='' value="<?= $row['created_at']; ?>" disabled >
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <br>


        <?php } }else {

            echo "Müşteriye ait görüşme kaydı bulunamadı";
    } ?>

</form>

    </div>