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
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/bootstrap.min.css')}}">
   
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/icomoon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/sliders/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/extensions/pace.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/ui/prism.min.css')}}">
  
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/app.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
 
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-overlay-menu.min.css')}}">
 
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column bg-cyan bg-lighten-2 fixed-navbar">
  
  {{-- start here --}}
  <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
            <li class="nav-item"><a href="index.html" class="navbar-brand nav-link"><img alt="branding logo" src="../../../app-assets/images/logo/robust-logo-light.png" data-expand="../../../app-assets/images/logo/robust-logo-light.png" data-collapse="../../../app-assets/images/logo/robust-logo-small.png" class="brand-logo"></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x fa-rotate-90"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav float-xs-right">
              <li class="nav-item"><a href="index.html" class="nav-link mr-2 nav-link-label"><i class="ficon icon-reply4"></i></a></li>
              <li class="dropdown nav-item"><a href="#" data-toggle="dropdown" class="nav-link mr-2 nav-link-label"><i class="ficon icon-cog3"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="col-md-4 offset-md-4 col-xs-8 offset-xs-2 box-shadow-2 p-0">
	<div class="card border-grey border-lighten-3 px-2 py-2 row mb-0">
		<div class="card-header no-border">
			<div class="card-title text-xs-center">
				<img src="../../../app-assets/images/logo/robust-logo-dark.png" alt="branding logo">
			</div>
			<h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Login with Robust</span></h6>
		</div>
		<div class="card-body collapse in">
			<div class="card-block">
				<form class="form-horizontal" action="https://pixinvent.com/bootstrap-admin-template/robust/html/ltr/vertical-menu-template/index.html" novalidate>
					<fieldset class="form-group position-relative has-icon-left">
						<input type="text" class="form-control input-lg" id="user-name" placeholder="Your Username" tabindex="1" required data-validation-required-message= "Please enter your username.">
						<div class="form-control-position">
						    <i class="icon-head"></i>
						</div>
						<div class="help-block font-small-3"></div>
					</fieldset>
					<fieldset class="form-group position-relative has-icon-left">
						<input type="password" class="form-control input-lg" id="password" placeholder="Enter Password" tabindex="2" required data-validation-required-message= "Please enter valid passwords.">
						<div class="form-control-position">
						    <i class="icon-key3"></i>
						</div>
						<div class="help-block font-small-3"></div>
					</fieldset>
					<fieldset class="form-group row">
						<div class="col-md-6 col-xs-12 text-xs-center text-md-left">
							<fieldset>
				                <input type="checkbox" id="remember-me" class="chk-remember">
				                <label for="remember-me"> Remember Me</label>
				            </fieldset>
						</div>
						<div class="col-md-6 col-xs-12 text-xs-center text-md-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
					</fieldset>
					<button type="submit" class="btn btn-danger btn-block btn-lg"><i class="icon-unlock2"></i> Login</button>
				</form>
			</div>
		</div>
		<div class="card-footer no-border">
			<p class="card-subtitle line-on-side text-muted text-xs-center font-small-3 mx-2 my-1"><span>New to Robust ?</span></p>
			<a href="register-advanced.html" class="btn btn-primary btn-block btn-lg mt-3"><i class="icon-head"></i> Register</a>
		</div>
	</div>
</section>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer navbar-fixed-bottom footer-dark navbar-border">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>
  {{-- ends here --}}
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
    <script type="text/javascript">
      $(window).load(function(){
        $('.alert').fadeTo(4000, 500).slideUp(500);
      })
    </script>
</body>
</html>

