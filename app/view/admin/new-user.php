<?php require view('admin/static/header') ?>



<!-- Main window -->


<?php if (isset($error)): ?>
    <div class="error">
        <?=$error?>
    </div>
<?php endif; ?>

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


<div class="main_container" id="">


<br>



   <div class='row-fluid'>
        <div class='widget widget-padding span12'>
            <div class='widget-header'>
                <i class='icon-list-alt'></i><h5>Yeni Müşteri Oluştur</h5>
                <div class='widget-buttons'>
                    <a href='#' data-title='Göster/Gizle' data-collapsed='false' class='tip collapse'><i class='icon-chevron-down'></i></a>
                </div>
            </div>
            <div class='widget-body'>
                <div class='widget-forms clearfix'>


                    <form class='form-horizontal' action="" method="post">
                        <div class='control-group'>
                            <label class='control-label'>İsim:</label>
                            <div class='controls'>
                                <input class='span7' type='text'  name='firstname' placeholder='' required>
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Soyisim:</label>
                            <div class='controls'>
                                <input class='span7' type='text' name='lastname' placeholder='' required>
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Mail Adresi:</label>
                            <div class='controls'>
                                <input class='span7' type='text' name='email' placeholder=''>
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Telefon:</label>
                            <div class='controls'>
                                <input class='span7' type='text' name='telephone' placeholder='' required>
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Tc Kimlik:</label>
                            <div class='controls'>
                                <input class='span7' type='text' name='fax' placeholder=''>
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Şirket Adı:</label>
                            <div class='controls'>
                                <input class='span7' type='text' name='company' placeholder=''>
                            </div>
                        </div>

                        <div class='control-group'>
                            <label class='control-label'>Adres 1:</label>
                            <div class='controls'>
                                <input class='span7' type='text' name='address_1' placeholder=''>
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Adres 2:</label>
                            <div class='controls'>
                                <input class='span7' type='text' name='address_2' placeholder=''>
                            </div>
                        </div>

                         <div class='control-group'>
                            <label class='control-label'>Ülke:</label>
                            <div class='controls'>
                                <select tabindex='1' data-placeholder='' name='country_id' id="iller" class='span7'>
                                    <option value="0" selected>Ülke seçiniz</option>
                                    <option value="215" >Türkiye</option>
                                <?php
                                if ( $ulke ){
                                foreach ( $ulke as $row ) {
                                    echo "<option value='". $row['country_id'] ."'>" . $row['name'] ."</option>";
                                }
                                }
                                ?>
                                </select>
                            </div>
                        </div>


                        <div class='control-group'>
                            <label class='control-label'>Şehir:</label>
                            <div class='controls'>
                                <select tabindex='1' data-placeholder='' id="ilceler" name='zone_id' class='span7'>

                                </select>
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Bölge:</label>
                            <div class='controls'>
                                <input class='span7' type='text' name='city' placeholder=''>
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Posta Kodu:</label>
                            <div class='controls'>
                                <input class='span7' type='text' name='postcode' placeholder=''>
                            </div>
                        </div>
                        <div class='control-group'>

                            <div style='text-align:right;'>
                                <button class='btn btn-primary' type='submit' name='submit' value='1'>Kaydet</button>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>





</div>
<!-- /Main window -->


<?php require view('admin/static/footer') ?>
