@extends('layouts.masterLayout')
@section('title')
    <title>Profile</title>
@endsection
@section('content')
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="example-box-wrapper">
                                        <ul class="nav-responsive nav nav-tabs">
                                            <li class="{{session()->has('timeSetup')?'' : 'active'}}" ><a href="#tab1" data-toggle="tab">PROFILE</a></li>
                                            <li><a href="#tab2" data-toggle="tab">CHANGE PASSWORD</a></li>
                                            <li class="{{session()->has('timeSetup')?'active' : ''}}"><a href="#tab3" data-toggle="tab">DELIVERY INFORMATION</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane {{session()->has('timeSetup')?'' : 'active'}}" id="tab1">
                                                <div class="row">
                                                    
                                                        <div class="col-md-6">
                                                            <form class="form-horizontal" id="demo-form" action="{{url('courier/profileinfo')}}">
                                                               {{csrf_field()}}
                                                               <input type="hidden" value="{{Auth::guard('courier')->user()->id}}" name="user_id">
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Name</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" name="name" placeholder="{{Auth::guard('courier')->user()->name}}" class="form-control profilename" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Email <small>(required)</small></label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" disabled="" placeholder="{{Auth::guard('courier')->user()->email}}" class="form-control"><small>(Email Cannot be Changed)</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Old Password <small>(required)</small></label>
                                                                <div class="col-sm-6">
                                                                    <input type="password" name="old_password" class="form-control"  required="">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="alert alert-info" id="profileload" style="display: none;" role="alert">
                                                                    Saving Info ....
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="profilesave">
                                                            <center><button type="submit" class="btn btn-success btn-md">Save</button> <button class="btn btn-danger btn-md" type="reset">Cancel</button></center>
                                                        </div>
                                                            
                                                            
                                                        </form>
                                                        </div>
                                                        
                                                    
                                                    <div class="col-sm-6">
                                                        <form id="upload-image-form" action="{{url('courier/imageupload')}}" method="post" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Profile Picture:</label>
                                                                <input type="hidden" name="id" value="{{Auth::guard('courier')->user()->id}}">
                                                                <div class="col-sm-6">
                                                                    <div class="fileinput fileinput-new">
                                                                        <div id="image-preview-div" class="fileinput-preview thumbnail" style="width: 150px; height: 100px;">
                                                                            <img id="preview-img" src="{{asset(Auth::guard('courier')->user()->image)}}" style="width: 200px; height: 200px;" >
                                                                        </div>
                                                                        <span class="btn btn-default btn-file btn-sm">
                                                                            <span class="imagelabel">Change</span>
                                                                            <input type="file" class="inputfile" name="file" id="file" />
                                                                        </span> <button class="btn btn-primary saveimage hiding btn-sm">Save</button>
                                                                        <span class="fileinput-filename text-primary"></span>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="alert alert-info" id="imageloading" style="display: none;" role="alert">
                                                                    Uploading image...
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>  

                                                    </div>
                                                </div>
                                            </div>
                                            {{-- password change --}}
                                            <div class="tab-pane" id="tab2">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <form class="form-horizontal" id="changepassword">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Old Password <small>(required)</small></label>
                                                                <div class="col-sm-6">
                                                                    <input type="password" name="old_password" class="form-control">
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="id" value="{{Auth::guard('courier')->user()->id}}">
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">New Password</label>
                                                                <div class="col-sm-6">
                                                                    <a class="btn btn-warning generate">Generate Password</a>
                                                                </div>
                                                                <div class="pass hiding">
                                                                    <div class="col-sm-6 texting">
                                                                        <input id="txtPassword" type="text"  name="password" class="form-control">
                                                                        <span id="password_strength"></span>
                                                                    </div>
                                                                    <a class="btn btn-default passview hiding">View</a>
                                                                    <a class="btn btn-default passhide">Hide</a>
                                                                    <a class="btn btn-default generateCancel">Cancel</a>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Confirm Password</label>
                                                                <div class="col-sm-6">
                                                                    <input type="password" name="password_confirmation" class="form-control">
                                                                </div>
                                                            </div>
                                                            <center><button type="submit" class="btn btn-success btn-md">Save</button> <button class="btn btn-danger btn-md" type="reset">Cancel</button></center>
                                                        </form>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="alert alert-info" id="passwordsave" style="display: none;" role="alert">
                                                                    Uploading image...
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end of password change --}}
                                           

                                            <div class="tab-pane {{session()->has('timeSetup')?'active' : ''}}" id="tab3">
                                                <h3 class="title-hero">Delivery Days</h3> 
                                                 @php
                                                foreach (Auth::guard('courier')->user()->days as $d) {
                                                      echo '<div class=" radio-warning">
                                    
                                                <input type="radio" id="inlineRadio112" checked class="custom-radio">
                                                '.$d->name.': '.trim(implode(' To ', explode(',', $d->pivot->time)),'[""]').'</div><br>';
                                                  }
                                            @endphp
                                                
                                                <button class="btn btn-danger btn-xs edit">Change Days</button><br><br><br>
                                                <form action="{{url('courier/delivery_days')}}" method="post" class="time_form">
                                                <div class="choose {{session()->has('timeSetup')?'' : 'hidden'}}">
                                               
                                                {{csrf_field()}}
                                                
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="check" name="days[]" value="1" class="custom-checkbox day" data="m">
                                                            Monday 
                                                        </label>
                                                    </div>
                                                  
                                                  <div id="education_fields" class="hidden">
                                                    <div class="col-sm-5 nopadding">
                                                      <div class="form-group">
                                                        <input type="text"  class="timepicker-example checkt1 form-control" value="" placeholder="From">
                                                      </div>
                                                    </div>

                                                    <div class="col-sm-7 nopadding">
                                                      <div class="form-group">
                                                        <div class="input-group">
                                                          <input type="text" class="timepicker-example form-control checkt2" value=""  placeholder="To">
                                                          <div class="input-group-btn">
                                                            <button class="btn btn-success" type="button"  onclick="education_fields('education_fields','m');"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="clear"></div>

                                                
                                                        
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="check1" name="days[]" value="2" class="custom-checkbox day" data="t">
                                                            Tuesday 
                                                        </label>
                                                    </div>
                                                  
                                                  <div id="education_fields1" class="hidden">
                                                    <div class="col-sm-5 nopadding">
                                                      <div class="form-group">
                                                        <input type="text" class="timepicker-example form-control check1t1"  value="" placeholder="From">
                                                      </div>
                                                    </div>

                                                    <div class="col-sm-7 nopadding">
                                                      <div class="form-group">
                                                        <div class="input-group">
                                                          <input type="text" class="check1t2 timepicker-example form-control"  value="" placeholder="To">
                                                          <div class="input-group-btn">
                                                            <button class="btn btn-success" type="button"  onclick="education_fields('education_fields1','t');"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="check2" name="days[]" value="3" class="custom-checkbox">
                                                            Wednesday 
                                                        </label>
                                                    </div>
                                                  
                                                  <div id="education_fields2" class="hidden">
                                                    <div class="col-sm-5 nopadding">
                                                      <div class="form-group">
                                                        <input type="text" class="timepicker-example form-control check2t1"  value="" placeholder="From">
                                                      </div>
                                                    </div>

                                                    <div class="col-sm-7 nopadding">
                                                      <div class="form-group">
                                                        <div class="input-group">
                                                          <input type="text" class="timepicker-example form-control check2t2"  value="" placeholder="To">
                                                          <div class="input-group-btn">
                                                            <button class="btn btn-success" type="button"  onclick="education_fields('education_fields2');"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>

                                                
                                                        
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="check3" name="days[]" value="4" class="custom-checkbox">
                                                            Thursday 
                                                        </label>
                                                    </div>
                                                  
                                                  <div id="education_fields3" class="hidden">
                                                    <div class="col-sm-5 nopadding">
                                                      <div class="form-group">
                                                        <input type="text" class="timepicker-example form-control check3t1" id="Degree"  value="" placeholder="From">
                                                      </div>
                                                    </div>

                                                    <div class="col-sm-7 nopadding">
                                                      <div class="form-group">
                                                        <div class="input-group">
                                                          <input type="text" class="timepicker-example form-control check3t2"  value="" placeholder="To">
                                                          <div class="input-group-btn">
                                                            <button class="btn btn-success" type="button"  onclick="education_fields('education_fields3');"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                        
                                                    </div>
                                                    
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="check4" name="days[]" value="5" class="custom-checkbox">
                                                            Friday 
                                                        </label>
                                                    </div>
                                                  
                                                  <div id="education_fields4" class="hidden">
                                                    <div class="col-sm-5 nopadding">
                                                      <div class="form-group">
                                                        <input type="text" class="timepicker-example form-control check4t1"   value="" placeholder="From">
                                                      </div>
                                                    </div>

                                                    <div class="col-sm-7 nopadding">
                                                      <div class="form-group">
                                                        <div class="input-group">
                                                          <input type="text" class="timepicker-example form-control check4t2"   value="" placeholder="To">
                                                          <div class="input-group-btn">
                                                            <button class="btn btn-success" type="button"  onclick="education_fields('education_fields4');"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="check5" name="days[]" value="6" class="custom-checkbox">
                                                            Saturday 
                                                        </label>
                                                    </div>
                                                  
                                                  <div id="education_fields5" class="hidden">
                                                    <div class="col-sm-5 nopadding">
                                                      <div class="form-group">
                                                        <input type="text" class="timepicker-example form-control check5t1"   value="" placeholder="From">
                                                      </div>
                                                    </div>

                                                    <div class="col-sm-7 nopadding">
                                                      <div class="form-group">
                                                        <div class="input-group">
                                                          <input type="text" class="timepicker-example form-control check5t2"  value="" placeholder="To">
                                                          <div class="input-group-btn">
                                                            <button class="btn btn-success" type="button"  onclick="education_fields('education_fields5');"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="check6" name="days[]" value="7" class="custom-checkbox">
                                                            Sunday 
                                                        </label>
                                                    </div>
                                                  
                                                  <div id="education_fields6" class="hidden">
                                                    <div class="col-sm-5 nopadding">
                                                      <div class="form-group">
                                                        <input type="text" class="timepicker-example form-control check6t1"  value="" placeholder="From">
                                                      </div>
                                                    </div>

                                                    <div class="col-sm-7 nopadding">
                                                      <div class="form-group">
                                                        <div class="input-group">
                                                          <input type="text" class="timepicker-example form-control check6t2"  value="" placeholder="To">
                                                          <div class="input-group-btn">
                                                            <button class="btn btn-success" type="button"  onclick="education_fields('education_fields6');"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                    </div>
                                                </div>

                                                  <div class="panel-footer"><small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>, <small>Press <span class="glyphicon glyphicon-minus gs"></span> to remove form field :)</small></div>
                                               
                                                <br>
                                            <button class="btn btn-danger btn-sm save">Save</button> <button class="btn btn-warning btn-sm cancel" type="reset">Cancel</button>
                                        </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


@endsection
@section('script')
<script type="text/javascript">
    
       $(function(){
        // $('.choose').removeClass('hidden');
         @foreach(Auth::guard('courier')->user()->days as $d)
        
        switch({{$d->id}}){
            case 1:
            $('#education_fields').removeClass('hidden');
            $('#check').attr('checked','');
            $('.checkt1 ').attr({required:'', name:'mtime[]'});
            $('.checkt2').attr({required:'', name:'mtime[]'});
            break;
            case 2:
            $('#education_fields1').removeClass('hidden');
            $('.check1t1 ').attr({required:'', name:'ttime[]'});
            $('.check1t2').attr({required:'', name:'ttime[]'});
            $('#check1').attr('checked','');
            break;
            case 3:
            $('#education_fields2').removeClass('hidden');
            $('.check2t1 ').attr({required:'', name:'wtime[]'});
            $('.check2t2').attr({required:'', name:'wtime[]'});
            $('#check2').attr('checked','');
            break;
            case 4:
            $('#education_fields3').removeClass('hidden');
            $('.check3t1 ').attr({required:'', name:'thtime[]'});
            $('.check3t2').attr({required:'', name:'thtime[]'});
            $('#check3').attr('checked','');
            break;
            case 5:
            $('#education_fields4').removeClass('hidden');
            $('.check4t1 ').attr({required:'', name:'ftime[]'});
            $('.check4t2').attr({required:'', name:'ftime[]'});
            $('#check4').attr('checked','');
            break;
            case 6:
            $('#education_fields5').removeClass('hidden');
            $('.check5t1 ').attr({required:'', name:'stime[]'});
            $('.check5t2').attr({required:'', name:'stime[]'});
            $('#check5').attr('checked','');
            break;
            case 7:
            $('#education_fields6').removeClass('hidden');
            $('.check6t1 ').attr({required:'', name:'sutime[]'});
            $('.check6t2').attr({required:'', name:'sutime[]'});
            $('#check6').attr('checked','');
            break;

        }

        @endforeach
       });
    
</script>
<script type="text/javascript" src="{{asset('couriers/assets/widgets/timepicker/timepicker.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $( ".timepicker-example" ).focus(function() {
          $( this ).timepicker();
        });
        });
    </script>
<script type="text/javascript">

    /* Timepicker */
        $(document).on('focus', '.timepicker-example', function(){
            $(this).timepicker();
        });
</script>
@if(session()->has('delivery'))
    <script type="text/javascript">
        notify('Delivery Times and Days has been successfully Set Up', false);
    </script>
    {{session()->forget('delivery')}};
@endif

{{-- password change --}}
    <script type="text/javascript">
        $(document).ready(function(){
          $('#changepassword').on('submit', function(e) {
            e.preventDefault();

            $.post("{{url('courier/changepassword')}}",$(this).serialize(),function(result){
            }).done(function(data){
                $now=JSON.parse(data);
                notify($now.status,$now.error);
              }).fail(function(result){
               var error=JSON.parse(result.responseText);
               $.each(error.errors, function(key, value){
                notify(value[0],true);
               });
              });

          });
        });
    </script>
    {{-- password change --}}
    {{-- change delivery times --}}
    <script type="text/javascript">
   $(document).ready(function(){


    $("#check").click(function(){
        if($(this).is(':checked')){
            $('#education_fields').removeClass('hidden');
            $('.checkt1 ').attr({required:'', name:'mtime[]'});
            $('.checkt2').attr({required:'', name:'mtime[]'});
        }
        else{
            $('#education_fields').addClass('hidden');
            $('#education_fields input[type=text]').removeAttr('required name');
        }
   });
   $("#check1").click(function(){
        if($(this).is(':checked')){
            $('#education_fields1').removeClass('hidden');
            $('.check1t1 ').attr({required:'', name:'ttime[]'});
            $('.check1t2').attr({required:'', name:'ttime[]'});
        }
        else{
            $('#education_fields1').addClass('hidden');
            $('#education_fields1 input[type=text]').removeAttr('required name');
        }
   });$("#check2").click(function(){
        if($(this).is(':checked')){
            $('#education_fields2').removeClass('hidden');
            $('.check2t1 ').attr({required:'', name:'wtime[]'});
            $('.check2t2').attr({required:'', name:'wtime[]'});
        }
        else{
            $('#education_fields2').addClass('hidden');
            $('#education_fields2 input[type=text]').removeAttr('required name');
        }
   });$("#check3").click(function(){
        if($(this).is(':checked')){
            $('#education_fields3').removeClass('hidden');
            $('.check3t1 ').attr({required:'', name:'thtime[]'});
            $('.check3t2').attr({required:'', name:'thtime[]'});
        }
        else{
            $('#education_fields3').addClass('hidden');
            $('#education_fields3 input[type=text]').removeAttr('required name');
        }
   });$("#check4").click(function(){
        if($(this).is(':checked')){
            $('#education_fields4').removeClass('hidden');
            $('.check4t1 ').attr({required:'', name:'ftime[]'});
            $('.check4t2').attr({required:'', name:'ftime[]'});
        }
        else{
            $('#education_fields4').addClass('hidden');
            $('#education_fields4 input[type=text]').removeAttr('required name');
        }
   });$("#check5").click(function(){
        if($(this).is(':checked')){
            $('#education_fields5').removeClass('hidden');
            $('.check5t1 ').attr({required:'', name:'stime[]'});
            $('.check5t2').attr({required:'', name:'stime[]'});
        }
        else{
            $('#education_fields5').addClass('hidden');
            $('#education_fields5 input[type=text]').removeAttr('required name');
        }
   });
   $("#check6").click(function(){
        if($(this).is(':checked')){
            $('#education_fields6').removeClass('hidden');
            $('.check6t1 ').attr({required:'', name:'sutime[]'});
            $('.check6t2').attr({required:'', name:'sutime[]'});
        }
        else{
            $('#education_fields6').addClass('hidden');
            $('#education_fields6 input[type=text]').removeAttr('required name');
        }
   });
   });
</script>
<script type="text/javascript" src="{{asset('couriers/assets/widgets/uniform/uniform.js')}}"></script>
<script type="text/javascript" src="{{asset('couriers/assets/widgets/uniform/uniform-demo.js')}}"></script>

<script type="text/javascript">

var room=1;
var counter=1;
function education_fields(id,index) {
    room++;
    counter++;
    var objTo = document.getElementById(id);
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "input-group removeclass"+room);
    var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="col-sm-5 nopadding"><div class="form-group"> <input type="text" class="timepicker-example form-control" id="Schoolname" name="'+index+'time[]" required value="" placeholder="From"></div></div><div class="col-sm-7 nopadding"><div class="form-group"><div class="input-group"> <div class="form-group"> <input type="text" required class="timepicker-example form-control" name="'+index+'time[]" value="" placeholder="To"></div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div>';
    
    objTo.appendChild(divtest);
   
}

   function remove_education_fields(rid) {
    $('.removeclass'+rid).remove();
    
   }

</script>
{{-- change delivery times --}}

{{-- password generator --}}
<script type="text/javascript">
        function passcode(){
            var text = "";
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()>?/~><";
            for (var i = 0; i < 25; i++)
                text += possible.charAt(Math.floor(Math.random() * possible.length));
            $('.texting input[type=text]').val(text);
            generation();
        };
    </script>

 <script type="text/javascript">
    $(document).ready(function(){
        $('.generateCancel').click(function(){
            $('.pass').addClass('hiding');
            $('a.generate').removeClass('hiding');
            $('.texting input[type=password]').attr('type', 'text');
            $('.passhide').removeClass('hiding');
            $('.passview').addClass('hiding');
        });

        $('.generate').click(function(){
            $('.texting input[type=text]').val("");
            passcode();
            $('.pass').removeClass('hiding');
            $('a.generate').addClass('hiding');
            
        });

        $('.passhide').click(function(){
            $('.texting input[type=text]').attr('type', 'password');
            $('.passhide').addClass('hiding');
            $('.passview').removeClass('hiding');
        });
        $('.passview').click(function(){
            $('.texting input[type=password]').attr('type', 'text');
            $('.passhide').removeClass('hiding');
            $('.passview').addClass('hiding');
        });
    });
 </script>
 <script type="text/javascript">
        function generation() {
            $('#txtPassword').bind('mouseenter mouseleave keyup',function(){
                //TextBox left blank.
                if ($(this).val().length == 0) {
                    $("#password_strength").html("");
                    return;
                }

                //Regular Expressions.
                var regex = new Array();
                regex.push("[A-Z]"); //Uppercase Alphabet.
                regex.push("[a-z]"); //Lowercase Alphabet.
                regex.push("[0-9]"); //Digit.
                regex.push("[$@$!%*#?&]"); //Special Character.

                var passed = 0;

                //Validate for each Regular Expression.
                for (var i = 0; i < regex.length; i++) {
                    if (new RegExp(regex[i]).test($(this).val()) && $(this).val().length > 4) {
                        passed++;
                    }
                }


                //Validate for length of Password.
                if (passed > 2 && $(this).val().length > 8) {
                    passed++;
                }

                //Display status.
                var color = "";
                var strength = "";
                switch (passed) {
                    case 0:
                    case 1:
                        strength = "Very Weak";
                        color = "red";
                        break;
                    case 2:
                        strength = "Weak";
                        color = "darkorange";
                        break;
                    case 3:
                    case 4:
                        strength = "Medium";
                        color = "green";
                        break;
                    case 5:
                        strength = "Strong";
                        color = "darkgreen";
                        break;
                }
                $("#password_strength").html(strength);
                $("#password_strength").css("color", color);
            });
        };
    </script>
    <script type="text/javascript">
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
        $('.profileimages').attr('src','{{asset("")}}'+$now.filename);
        $('.profileimages2').attr('src','{{asset("")}}'+$now.filename);
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


    </script>
    {{-- password generator --}}
{{--     <script type="text/javascript" src="{{asset('couriers/js/upload.js')}}"></script>
 --}}@endsection