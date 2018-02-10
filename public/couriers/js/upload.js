// image upload
$(function(){
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});
$(document).ready(function(){
    $('.inputfile').on('change',function(){
      var hello=$(this).val().replace(/.*[\/\\]/, '');
      $('.fileinput-filename').html(hello);
      $('.saveimage').removeClass('hiding');
    });
    
  });

function noPreview() {
  // $('#image-preview-div').css("display", "none");
  $('#preview-img').attr('src', 'noimage');
}

function selectImage(e) {
  $('#image-preview-div').css("display", "block");
  $('#preview-img').attr('src', e.target.result);
}

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
        $('.profileimages').attr('src','{{ URL::asset("couriers/") }}'+$now.filename);
        $('.profileimages2').attr('src',$now.filename);
      }).fail(function(){
        $('#imageloading').hide();
        $('#message').html('<div class="alert alert-danger" role="alert">Image Uploading Failed</div>');
      });

  });

  $('#file').change(function() {

    $('#message').empty();

    var file = this.files[0];
    var match = ["image/jpeg", "image/png", "image/jpg"];

    if ( !( (file.type == match[0]) || (file.type == match[1]) || (file.type == match[2]) ) )
    {
      noPreview();

      $('#message').html('<div class="alert alert-warning" role="alert">Unvalid image format. Allowed formats: JPG, JPEG, PNG.</div>');

      return false;
    }

    if ( file.size > maxsize )
    {
      noPreview();

      $('#message').html('<div class=\"alert alert-danger\" role=\"alert\">The size of image you are attempting to upload is ' + (file.size/1024).toFixed(2) + ' KB, maximum size allowed is ' + (maxsize/1024).toFixed(2) + ' KB</div>');

      return false;
    }

    $('#upload-button').removeAttr("disabled");

    var reader = new FileReader();
    reader.onload = selectImage;
    reader.readAsDataURL(this.files[0]);

  });

});

// end of image upload

// profile name change
$(document).ready(function(){
  $('#demo-form').on('submit', function(e) {
    e.preventDefault();

    $('#message').empty();
    $('#profileload').show();

    $.post($(this).attr('action'),$(this).serialize(),function(result){

    }).done(function(data){
      $('#profileload').hide();
        $now=JSON.parse(data);
        notify($now.status,$now.error);
        $('.username').attr('placeholder',$now.name);
        $('.username1').html($now.name);
      }).fail(function(result){
        $('#profileload').hide();
        var error=JSON.parse(result.responseText);
       $.each(error.errors, function(key, value){
        notify(value[0],true);
      });

  });
});
});
// end of profile name change

