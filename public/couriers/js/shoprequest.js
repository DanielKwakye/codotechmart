$(document).ready(function (e) {

  var maxsize = 500 * 1024; // 500 KB

  $('#max-size').html((maxsize/1024).toFixed(2));

  $('#upload-image-form').on('submit', function(e) {

    e.preventDefault();

    $('#message').empty();
    $('#imageloading').show();

    $.ajax({
      url: $('#upload-image-form').attr('action'),
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false
    }).done(function(data){
      $('#imageloading').hide();
        $now=JSON.parse(data);
        notify($now.status,$now.error);
      }).fail(function(){
        $('#imageloading').hide();
        $('#message').html('<div class="alert alert-danger" role="alert">Image Uploading Failed</div>');
      });

  });