 <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Title here</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
      @yield('styles-above')
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/bootstrap.min.css')}}">
   
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/icomoon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/sliders/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/extensions/pace.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/ui/prism.min.css')}}">
  
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/app.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/style.css')}}">
 
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-overlay-menu.min.css')}}">
 
  {{--   <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> --}}
  @yield('styles-below')
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
   
      @include('administration.layout.header')
      @include('administration.layout.search')

      @include('administration.layout.sidebar')

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
         {{--  @include('administration.layout.breadcrumbs')  --}}    
        </div>
        <div class="content-body">
         @yield('content')
        </div>
      </div>
    </div>

   <!-- footer  -->
    @include('administration.layout.footer')
   {{-- scripts  --}}
   @yield('scripts-above')
    <script src="{{asset('admin-assets/js/core/libraries/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-assets/vendors/js/ui/tether.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-assets/js/core/libraries/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-assets/vendors/js/ui/unison.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-assets/vendors/js/ui/blockUI.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-assets/vendors/js/ui/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-assets/vendors/js/ui/jquery-sliding-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-assets/vendors/js/sliders/slick/slick.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-assets/vendors/js/ui/screenfull.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-assets/vendors/js/extensions/pace.min.js')}}" type="text/javascript"></script>
  
    <script src="{{asset('admin-assets/vendors/js/ui/prism.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-assets/js/scripts/ui/fullscreenSearch.min.js')}}" type="text/javascript"></script>

    @yield('scripts-below')
      	{{-- end --}}
    <script type="text/javascript">
      $(window).load(function(){
        $('.alert').fadeTo(4000, 500).slideUp(500);
      })
    </script>
</body>
</html>
