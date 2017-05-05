<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.bluthemes.com/themes/realm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2017 17:43:00 GMT -->
<head>
    <meta charset="utf-8">
    <title>Akademi Duru - Giriş</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bluth Company">
    <link rel="shortcut icon" href="assets/ico/favicon.html">
    <link href="<?=admin_asset_url('css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?=admin_asset_url('css/theme.css')?>" rel="stylesheet">
    <link href="<?=admin_asset_url('css/font-awesome.min.css')?>" rel="stylesheet">


    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-40601789-4', 'bluthemes.com');
        ga('send', 'pageview');

    </script>



</head>
<body>


<div id="wrap">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="row-fluid">
                    <div class="widget container-narrow">
                        <div class="widget-header">
                            <i class="icon-user"></i>
                            <h5>Duru Panel Giriş</h5>
                        </div>
                        <div class="widget-body clearfix" style="padding:25px;">
                            <form action="" method="post">


                                <div class="control-group">
                                    <div class="controls">
                                        <input class="btn-block" type="text" id="inputEmail" name="username" placeholder="Kullanıcı Adı">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <input class="btn-block" type="password" id="inputPassword" name="password" placeholder="Parola">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div style="width: 250px; position: absolute; color:darkred; font-size: 12px;">
                                        <?php if (isset($error)): ?>
                                            <?=error($error)?>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <button type="submit" name="submit" value="1"  class="btn pull-right">Giriş</button>
                            </form>
                        </div>
                    </div>

                </div><!--/row-fluid-->
            </div><!--/span10-->
        </div><!--/row-fluid-->
    </div><!--/.fluid-container-->
</div><!-- wrap ends-->

<script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="../../../ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="../../../cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src='assets/js/sparkline.js'></script>
<script type="text/javascript" src='assets/js/morris.min.js'></script>
<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.facybox.js"></script>
<script type="text/javascript" src="assets/js/jquery.elfinder.min.html"></script>
<script type="text/javascript" src="assets/js/jquery.alertify.min.js"></script>
<script type="text/javascript" src="assets/js/realm.js"></script>
</body>

<!-- Mirrored from www.bluthemes.com/themes/realm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2017 17:43:08 GMT -->
</html>
