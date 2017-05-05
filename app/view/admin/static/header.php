<!DOCTYPE html>
<html lang="tr">

<!-- Mirrored from www.bluthemes.com/themes/realm/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2017 17:42:31 GMT -->
<head>

    <meta charset="utf-8">
    <title>Duru Panel</title>

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

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://raw.github.com/scottjehl/Respond/master/src/respond.js"></script>
    <![endif]-->
</head>

<?php

$session_user = $_SESSION["user_id"];

$user_avatar_db = $durupanel->select('users')
    ->where('user_id', $session_user)
    ->run();

foreach ( $user_avatar_db as $row ) {
    $user_avatar = $row['user_avatar'];
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];

}

?>




<body>
<div id="wrap">

    <div class="container-fluid">



        <!-- Side menu -->
        <!--sidebar-->
        <div class="sidebar" style="width: 200px !important;">

            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <div class="logo" style="margin-top:3px;">
                            <img src="<?=admin_asset_url('img/logo.png')?>">
                        </div>
                        <a class="btn btn-navbar visible-phone" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="btn btn-navbar slide_menu_left visible-tablet">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <div class="top-menu visible-desktop">
                            <ul class="pull-right">
                                <li><a href="<?=admin_url('logout')?>"><i class="icon-off"></i> Çıkış Yap</a></li>
                            </ul>
                        </div>

                        <div class="top-menu visible-phone visible-tablet">
                            <ul class="pull-right">
                                <li><a title="link to View all Messages page, no popover in phone view or tablet" href="#"><i class="icon-envelope"></i></a></li>
                                <li><a title="link to View all Notifications page, no popover in phone view or tablet" href="#"><i class="icon-globe"></i></a></li>
                                <li><a href="login.html"><i class="icon-off"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container-fluid">

                <!-- Side menu -->
                <div class="sidebar-nav nav-collapse collapse">
                    <div class="user_side clearfix">


                        <img src="<?=$user_avatar?>">
                        <h5><?=$user_firstname . " " . $user_lastname?></h5>
                        <a href="#"><i class="icon-cog"></i> Profili Düzenle</a>
                    </div>
                    <div class="accordion" id="accordion2">
                        <?php
                        $i = 1;
                        foreach($admin['menu'] as $key => $menu): ?>

                            <?php

                            $isActive = url(1) == $key;
                            if (!$isActive && isset($menu['submenu']) && isset($menu['submenu'][url(1)])){
                                $isActive = true;
                            }



                            ?>
                            <div class="accordion-group">
                                <div class="accordion-heading" class="<?=$isActive ? 'active' : null?>">


                                    <a href="#<?=$i?>" class="accordion-toggle active b_F5C294 collapsed" data-toggle="collapse" data-parent="#accordion"">

                                    <i class="<?=$menu['icon']?>"></i>
                                    <span class="title">
                               <?=$menu['title']?>
                            </span>
                                    </a>
                                    <?php if (isset($menu['submenu'])): ?>
                                        <div id="<?=$i?>"  class="accordion-body collapse" class="<?=url(1) == $subKey ? 'active' : null?>">
                                            <div  class="accordion-inner">

                                                <?php foreach($menu['submenu'] as $subKey => $subMenu): ?>

                                                    <a class="accordion-toggle" href="<?=admin_url($subKey)?>">
                                                        <i class="icon-angle-right"></i>&nbsp;&nbsp;&nbsp;
                                                        <?=$subMenu['title']?>
                                                    </a>

                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php $i++; ?>
                                </div></div>
                        <?php endforeach; ?>

                    </div>
                </div>
                <!-- /Side menu -->


            </div><!--/.fluid-container-->



        </div
        <!-- /Side menu -->