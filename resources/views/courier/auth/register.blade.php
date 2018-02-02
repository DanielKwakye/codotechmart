<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
	<meta name="author" content="Ansonika">
	<title>couriers Service | Registration</title>

	<!-- Favicons-->

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<!-- BASE CSS -->
	<link href="{{asset('couriers/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('couriers/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('couriers/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('couriers/css/menu.css')}}" rel="stylesheet">
	<link href="{{asset('couriers/css/animate.min.css')}}" rel="stylesheet">
	<link href="{{asset('couriers/css/icon_fonts/css/all_icons_min.css')}}" rel="stylesheet">
	<link href="{{asset('couriers/css/skins/square/grey.css')}}" rel="stylesheet">


	

	<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/timepicker/timepicker.css')}}">
	

	<!-- YOUR CUSTOM CSS -->
	<link href="{{asset('couriers/css/custom.css')}}" rel="stylesheet">

	<script src="{{asset('couriers/js/modernizr.js')}}"></script>
	<!-- Modernizr -->

</head>

<body>
	<style type="text/css">
		textarea {
		   resize: none;
		}
	</style>
	
	<!-- <div id="preloader">
		<div data-loader="circle-side"></div>
	</div> --><!-- /Preload -->

	<header>
		<div class="container-fluid">
		    <div class="row">
                <div class="col-xs-3">
                    <div id="logo_home">
                        <h1><a href="index-2.html">MAVIA | Register, Reservation, Questionare, Reviews form wizard</a></h1>
                    </div>
                </div>
                <div class="col-xs-9">
                    <div id="social">
                        <ul>
                            <li><a href="#0"><i class="icon-facebook"></i></a></li>
                            <li><a href="#0"><i class="icon-twitter"></i></a></li>
                            <li><a href="#0"><i class="icon-google"></i></a></li>
                            <li><a href="#0"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social -->
                    <nav>
                        <ul class="cd-primary-nav">
                            <li><a href="index-2.html" class="animated_link">Register Version</a></li>
                            <li><a href="reservation_version.html" class="animated_link">Reservation Version</a></li>
                            <li><a href="questionare_version.html" class="animated_link">Questionare Version</a></li>
                            <li><a href="review_version.html" class="animated_link">Review Version</a></li>
                            <li><a href="about.html" class="animated_link">About Us</a></li>
                            <li><a href="contacts.html" class="animated_link">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
		</div>
		<!-- container -->
	</header>
	<!-- End Header -->

	<main>
		<div id="form_container">
			<div class="row">
				<div class="col-md-5">
					<div id="left_form">
						<figure><img src="img/registration_bg.svg" alt=""></figure>
						<h2>couriers Registration</h2>
						<p>Registeration in just three (3) steps..Let's Begin!!</p>
						<a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i class="pe-7s-info"></i></a>
					</div>
				</div>
				<div class="col-md-7">

					<div id="wizard_container">
						<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
						<form name="example-1" id="wrapped" class="form-horizontal" method="POST"">
							{{ csrf_field() }}
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">
								<div class="step">
									<h3 class="main_question"><strong>1/2</strong>Please fill with your details</h3>
									<div class="row">
										<div class="col-sm-12{{ $errors->has('name') ? ' has-error' : '' }}">
											<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
												<input type="text" name="name" class="form-control" placeholder="couriers Name" value="{{ old('name') }}" >
												@if ($errors->has('name'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('name') }}</strong>
				                                    </span>
				                                @endif
												
											</div>
											
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
												<input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
												@if ($errors->has('email'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('email') }}</strong>
				                                    </span>
				                                @endif
											</div>
										</div>
										
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
												<input type="password" name="password" class="form-control" placeholder="Password">
												@if ($errors->has('password'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('password') }}</strong>
				                                    </span>
				                                @endif
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<input type="password" name="password_confirmation" class="form-control" placeholder="Repeat Password">
											</div>
										</div>
									</div><br><br>
									
									<!-- /row -->
								</div>
								<!-- /step-->

								<div class="step submit">
									<h3 class="main_question"><strong>2/2</strong>Delivery Information</h3><hr>
									<!-- /row -->
									<h4 class="main_question">Delivery Days</h4>@if ($errors->has('days'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('days') }}</strong>
                                    </span>
                                @endif
									<div class="row">
										<div class="col-sm-12">
											<div class="col-sm-4">
												<div class="form-group radio_input">
													<label><input type="checkbox" value="1"  checked name="days[]" class="icheck">Monday </label>
												<label><input type="checkbox" value="2" name="days[]" class="icheck">Tuesday</label>
												<label><input type="checkbox" value="3" name="days[]" class="icheck">Wednesday</label>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group radio_input">
												<label><input type="checkbox" value="4" name="days[]" class="icheck">Thursday</label>
												<label><input type="checkbox" value="5" name="days[]" class="icheck">Friday</label>
												<label><input type="checkbox" value="6" name="days[]" class="icheck">Saturday</label>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group radio_input">
												<label><input type="checkbox" value="7" name="days[]" class="icheck">Sunday</label>
												</div>
											</div>
											
										</div>
									</div>
									<br><br><br>
									<!-- /row -->
								</div>
								<!-- /step-->
							</div><br><br>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Backward </button>
								<button type="button" name="forward" class="forward">Forward</button>
								<button type="submit" name="process" class="submit">Submit</button>
							</div>

							<!-- /bottom-wizard -->
						</form>
					</div>
					<!-- /Wizard container -->
				</div>
			</div><!-- /Row -->
		</div><!-- /Form_container -->
	</main>
	
	<footer id="home" class="clearfix">
		<p>© 2017 Mavia</p>
		<ul>
			<li><a href="https://themeforest.net/item/mavia-register-reservation-questionare-reviews-form-wizard/20027349?ref=ansonika" class="animated_link">Purchase this template</a></li>
			<li><a href="#0" class="animated_link">Terms and conditions</a></li>
			<li><a href="#0" class="animated_link">Contacts</a></li>
		</ul>
	</footer>
	<!-- end footer-->
	
	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- Modal info -->
	<div class="modal fade" id="more-info" tabindex="-1" role="dialog" aria-labelledby="more-infoLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="more-infoLabel">Frequently asked questions</h4>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- SCRIPTS -->
	<!-- Jquery-->
	<script src="{{asset('couriers/js/jquery-2.2.4.min.js')}}"></script>
	<!-- Common script -->
	<script src="{{asset('couriers/js/common_scripts_min.js')}}"></script>
	<!-- Wizard script -->
	<script src="{{asset('couriers/js/registration_wizard_func.js')}}"></script>
	<!-- Menu script -->
	<script src="{{asset('couriers/js/velocity.min.js')}}"></script>
	<script src="{{asset('couriers/js/main.js')}}"></script>
	<!-- Theme script -->
	<script src="{{asset('couriers/js/functions.js')}}"></script>
	{{-- timepicker --}}

</body>

</html>