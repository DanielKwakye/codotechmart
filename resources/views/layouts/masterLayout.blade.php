<!DOCTYPE html> 
<html lang="en">

<head>
    @include('courier.inc.header')
    @yield('title')


</head>
@php
use Carbon\Carbon; 

    $x=0;
    foreach (Auth::guard('courier')->user()->days as $v) {
      if (!$v->pivot->time==null) {
          $x=1; 
      }
  }
  $expired=\App\CourierPayment::where('courier_id',Auth::guard('courier')->user()->id)->orderBy('id','desc')->first();
  
  if (Carbon::now() >= $expired->expired_at) {
     $user= Auth::guard('courier')->user()->update(['active'=>0]);
  }
  $almostexpired=false;
  if (Carbon::now()->addWeeks(2) >= $expired->expired_at) {
      $almostexpired=true;
  }
  if (Carbon::now() >= $expired->expired_at) {
      $expiration=true;
  }
// $user=Auth::guard('courier')->user();
@endphp
<body>
    <style type="text/css">
    .hiding{
        display: none;
    }
    
    .input-group:not(:first-of-type) { margin-top: 10px; }
    .glyphicon { font-size: 12px; }
    
</style>
<div id="app">
<div id="sb-site">
    

    <div id="page-wrapper">
        @include('courier.inc.dashboard.navbar')

        <div id="page-content-wrapper">
            <div id="page-content">

                <div class="container">
                    @if($x==0)
                    {{session(['timeSetup' => 'yes'])}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissable">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Delivery Times Must be Set before you can do Delivery</strong> <a href="{{url('courier/profile')}}" class="btn btn-xs btn-primary addtime" >Set Delivery Times</a>
                            </div>

                        </div>
                    </div>
                @endif
                @php

                $requests=App\ShopRequest::where('courier_id',Auth::guard('courier')->user()->id)->where('status',2)->get();
                @endphp
                @if(count($requests)==0)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success alert-dismissable">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Start Working With A Shop </strong> <a href="{{url('courier/all-shops')}}" class="btn btn-xs btn-primary" >Send Shop Request</a>
                            </div>

                        </div>
                    </div>        
                @endif

                 @if(count($requests)>0)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning alert-dismissable">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Add More Shops </strong> <a href="{{url('courier/all-shops')}}" class="btn btn-xs btn-primary" >Send More Requests</a>
                            </div>

                        </div>
                    </div>        
                @endif

                @if(Auth::guard('courier')->user()->active==0)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-dismissable" style="background-color: #cf4436; color: white;">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong> Subscription Has Expired </strong> <a href="{{url('courier/all-shops')}}" class="btn btn-xs btn-primary" style="color: white;" >Renew Now</a>
                            </div>

                        </div>
                    </div> 
                @elseif($almostexpired)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-dismissable" style="background-color: #cf4436; color: white;">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong> Subscription Has Less Than 2 week(s) To Expire</strong> <a href="{{url('courier/all-shops')}}" class="btn btn-xs btn-primary" style="color: white;" >Renew Now</a>
                            </div>

                        </div>
                    </div>

                @endif



                    @yield('content')
                </div>

            </div>

        </div>

    </div>
</div>
</div>
@include('courier.inc.footer')
 
<script type="text/javascript">
    $('.markasread').click(function(){

        var id=$(this).attr('data');
        $.get("{{url('/courier/markasread')}}"+'/'+id).done(function(){
            alert('good');
        }).fail(function(){
            alert('error')
        });
    });
</script>

@if($almostexpired)
    <script>
    // Set the date we're counting down to
    // var countDownDate = new Date("sept 5, 2018 15:37:25").getTime();
    var timing='{{$expired->expired_at}}';
    var countDownDate = new Date(timing).getTime()
    
    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();
        
        // Find the distance between now an the count down date
        var distance = countDownDate - now;
        
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Output the result in an element with id="demo"
        $('.days').html(days);
        $('.hours').html(hours);
        $('.mins').html(minutes);
        $('.secs').html(seconds);
        
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
    </script>

    @endif

    {{-- @if($expiration)
        <script type="text/javascript">
            document.getElementById("demo").innerHTML = "EXPIRED";
        </script>

    @endif --}}



</div>
</body>

</html>