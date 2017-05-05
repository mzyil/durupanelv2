$(function(){

  $('#uye_getir').on('click', function(e){
    $.post(ajax_url, {'type':'uye-bilgileri'}, function(sonuc){
      $.each(sonuc.data, function(key, data){
        $('.ajax-sonuc').append(data.user_name + '<br>');
      });
    }, 'json');
    e.preventDefault();
  });

});
