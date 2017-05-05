<?php require view('admin/static/header') ?>

    <div class="main_container">



        <br>
        <div class="row-fluid">
            <div class="widget widget-padding span3"></div>
            <div class="widget widget-padding span6">
                <div class="widget-header">
                    <i class="icon-list-alt"></i><h5>Kullanıcı Kayıt</h5>
                    <div class="widget-buttons">
                        <a href="#" data-title="Collapse" data-collapsed="false" class="tip collapse" data-original-title=""><i class="icon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="widget-forms clearfix">
                        <form class="form-horizontal" method="post" action="">

                            <div class="control-group">
                                <label class="control-label">İsim</label>
                                <div class="controls">
                                    <input class="span7 tip" data-title="" type="text" placeholder="" name="user_fisrtname" data-original-title="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Soyisim</label>
                                <div class="controls">
                                    <input class="span7 tip" data-title="" type="text" placeholder="" name="user_lastname" data-original-title="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Kullanıcı Adı</label>
                                <div class="controls">
                                    <input class="span7 tip" data-title="" type="text" placeholder="" name="user_name" data-original-title="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Parola</label>
                                <div class="controls">
                                    <input class="span7 tip" data-title="" type="text" placeholder="" name="user_password" data-original-title="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Avatar(ULR)</label>
                                <div class="controls">
                                    <input class="span7 tip" data-title="Profil Resmi Linki" type="text" placeholder="user_avatar" data-original-title="">
                                </div>
                            </div>

                    </div>
                </div>
                <div class="widget-footer">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <button class="btn" type="button">Cancel</button>
                </div>
                </form>
            </div>

            <div class="widget widget-padding span12">



            </div>
        </div>



    </div>

<?php require view('admin/static/footer') ?>