<?php require view('admin/static/header') ?>


    <div class="main_container" id="">
        <br>


        <div class='row-fluid'>

            <div class='widget widget-padding span6'>
                <div class='widget-header'>

                    <i class='icon-list-alt'></i><h5>Yeni Görüşme Ekle</h5>
                    <form method="post" action="">
                    <div class='widget-buttons'>
                        <a href='#'  data-collapsed='true' class='tip collapse'> <i class='icon-chevron-up'></i></a>
                    </div>
                </div>
                <div class='widget-body'>
                    <br>
                    <div class='widget-forms clearfix'>
                        <div class='control-group'>
                            <label class='control-label'>Müşteri İsmi:</label>
                            <div class='controls'>
                                <input class='span12' type='text' name='mus_isim' placeholder='' value=""  >
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Müşteri Soyisim:</label>
                            <div class='controls'>
                                <input class='span12' type='text' name='mus_soyisim' placeholder='' value=""  >
                            </div>

                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Müşteri Telefon:</label>
                            <div class='controls'>
                                <input class='span12' type='text' name='mus_tel1' placeholder='' value=""  required> <!-- Kesinlikle girilmek zorundadır -->
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Müşteri Telefon 2:</label>
                            <div class='controls'>
                                <input class='span12' type='text' name='mus_tel2' placeholder='' value=""  >
                            </div>

                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Yaşadığı Şehir:</label>
                            <div class='controls'>
                                <input class='span12' type='text' name='mus_sehir' placeholder='' value=""  >
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Konu:</label>
                            <div class='controls'>
                                <input class='span12' type='text' name='courseadd' placeholder='' value=""  >
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Görüşme İçeriği:</label>
                            <div class='controls'>
                                <textarea class="span12" style="" name='contentadd' rows="5" ></textarea>
                            </div>

                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Görüşme Özeti:</label>
                            <div class='controls'>
                                <textarea class="span12" style="" name='result_contentadd' rows="3" ></textarea>
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
                                <input class='span12' type='date' name='reminderadd' placeholder='' value="9999-11-11" >
                            </div>
                        </div>
                        <div class='control-group'>

                            <div style='text-align:right;'>
                                <button class='btn btn-primary' type='submit' name='submit' value='1'>Kaydet</button>
                            </div>
                        </div>
                    </div>
                </div>
</form>

            </div>

        </div>
        </div>

<?php require view('admin/static/footer') ?>