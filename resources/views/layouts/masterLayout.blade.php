<!DOCTYPE html> 
<html lang="en">

<head>
    @include('courier.inc.header')
    @yield('title')


</head>
@php

    $x=0;
    foreach (Auth::guard('courier')->user()->days as $v) {
      if (!$v->pivot->time==null) {
          $x=1; 
      }
  }
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


</div>
</body>

</html>