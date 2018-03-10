<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Signup</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- CSS Files -->
    <link href="{{asset('admin-assets/signup-assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/plugins/forms/extended/form-extended.min.css')}}">
	<link href="{{asset('admin-assets/signup-assets/css/paper-bootstrap-wizard.css')}}" rel="stylesheet" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="{{asset('admin-assets/signup-assets/css/themify-icons.css')}}" rel="stylesheet">
</head>

<body>
	<div class="image-container set-full-height" style="background: #ddd">

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="azure" id="wizard">
<<<<<<< HEAD
		                    <form id="signformid" action="{{url('/welcome/addnewshop')}}" method="post">
=======
		                    <form id="signupform">
>>>>>>> d1b5218c53c2d1624f06b5566fa3db10e85e3951
		                 {{csrf_field()}}

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">Create your Online Shop within seconds</h3>
		                        	<p class="category">Book from thousands of unique work and meeting spaces.</p>
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#details" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-list"></i>
												</div>
												Basic Profile
											</a>
										</li>
			                            <li>
											<a href="#captain" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-briefcase"></i>
												</div>
												Shop Details
											</a>
										</li>
			                            <li>
											<a href="#description" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-pencil"></i>
												</div>
												Security
											</a>
										</li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="details">
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                    	<h5 class="info-text"> Let's start with the basic details</h5>
		                                	</div>
		                                </div>
		                                <div class="row">
			                                <div class="col-sm-5 col-sm-offset-1">
			                                    <div class="form-group">
			                                        <label>Surname</label>
			                                        <input type="text" class="form-control" name="surname" id="surname" placeholder="Your Surname">
			                                    </div>
			                                </div>
			                                <div class="col-sm-5">
			                                    <div class="form-group">
			                                        <label>Firstname</label>
			                                       <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Your Firstname">
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="row">
			                                <div class="col-sm-5 col-sm-offset-1">
			                                    <div class="form-group">
			                                        <label>Email</label>
			                                         <input type="email" class="form-control" id="email" name="email" placeholder="Email">
			                                    </div>
			                                </div>
			                                <div class="col-sm-5">
			                                	<div class="form-group">
			                                        <label>Phone Number</label>
		                                        	<input type="text" class="form-control phone-inputmask" id="phone" name="phone" placeholder="Phone Number">
			                                    </div>
			                                </div>
			                            </div>
		                            	
		                        	</div>
		                            <div class="tab-pane" id="captain">
		                                 <div class="row">
		                                	<div class="col-sm-12">
		                                    	<h5 class="info-text"> Tell us few things about your store?</h5>
		                                	</div>
			                                <div class="col-sm-5 col-sm-offset-1">
			                                    <div class="form-group">
			                                        <label>Store name</label>
			                                        <input type="text" class="form-control" id="storename" name="storename" placeholder="Enter Name of Your Store">
			                                    </div>
			                                </div>
			                                <div class="col-sm-5">
			                                    <div class="form-group">
			                                        <label>Type</label>
<<<<<<< HEAD
			                                       
			                                        	{{-- <option value="automobiles">automobiles</option> --}}
			                                        	 <select class="form-control" name="type" required="required">
			                                        	<option value="">Select Category</option>
			                                        	<?php $types = DB::table('shop_categories')->get(['id','name']);?>
			                                        	@foreach($types as $t)
			                                        	<option value="{{$t->id}}">{{$t->name}}</option>
=======
			                                        <select class="form-control" name="type">
			                                        	<option value="">Select Shop Type</option>
			                                        	@foreach(\App\ShopCategory::get(['name','id']) as $cat)
			                                        	<option value="{{$cat->id}}">{{$cat->name}}</option>
>>>>>>> d1b5218c53c2d1624f06b5566fa3db10e85e3951
			                                        	@endforeach
			                                        </select>
			                                       
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="row">
			                            	 <div class="col-sm-5 col-sm-offset-1">
			                                  		<div class="form-group">
			                                        <label>Location</label>
			                                        <select class="form-control" id="specifylocation">
			                                        	<option value=''>Select Location</option>
			                                        	<option value="current">Use current Location</option>
			                                        	<option value="specify">specify</option>
			                                        </select>
			                                    </div>                            
			                                </div>
			                                <div class="col-sm-5" style="display: none;" id="locationbox">
			                                    <div class="form-group">
			                                        <label>Location</label>
			                                         <input type="text" class="form-control" name="location" id="location" placeholder="Location of Your Store">
			                                         <input type="hidden" name="longitude" id="longitude">
			                                         <input type="hidden" name="latitude" id="latitude">
			                                    </div>
			                                </div>     
		                            	</div>
		                            	<div class="row">
		                            		<div class="col-sm-5 col-sm-offset-1">
			                                  		<div class="form-group">
			                                        <label>Region</label>
			                                        <select class="form-control" name="region" required="required">
			                                        	<option value=''>Select Region</option>
			                                        	<option value="Greater Accra">Greater Accra</option>
			                                        	<option value="Brong Ahafo">Brong Ahafo</option>
			                                        	<option value="Ashanti">Ashanti</option>
			                                        	<option value="Eastern">Eastern</option>
			                                        	<option value="Western">Western</option>
			                                        	<option value="Central">Central</option>
			                                        	<option value="Upper East">Upper East</option>
			                                        	<option value="Upper West">Upper West</option>
			                                        	<option value="Northern">Northern</option>
			                                        	<option value="Volta">Volta</option>
			                        
			                                        </select>
			                                    </div>                            
			                                </div>
		                            	</div>

		                            	<div class="row">
		                            		<div class="col-sm-5 col-sm-offset-1">
			                                  		<div class="form-group">
			                                        <label>Region</label>
			                                        <select class="form-control" name="region" required="required">
			                                        	<option value=''>Select Region</option>
			                                        	<option value="Greater Accra">Greater Accra</option>
			                                        	<option value="Brong Ahafo">Brong Ahafo</option>
			                                        	<option value="Ashanti">Ashanti</option>
			                                        	<option value="Eastern">Eastern</option>
			                                        	<option value="Western">Western</option>
			                                        	<option value="Central">Central</option>
			                                        	<option value="Upper East">Upper East</option>
			                                        	<option value="Upper West">Upper West</option>
			                                        	<option value="Northern">Northern</option>
			                                        	<option value="Volta">Volta</option>
			                        
			                                        </select>
			                                    </div>                            
			                                </div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="description">
		                               <div class="row">
		                                	<div class="col-sm-12">
		                                    	<h5 class="info-text"> Hackers are around. Lets secure your store </h5>
		                                	</div>
			                                <div class="col-sm-10 col-sm-offset-1">
			                                    <div class="form-group">
			                                        <label>Username</label>
			                                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
			                                    </div>
			                                </div>
			                                   <div class="col-sm-5 col-sm-offset-1">
			                                    <div class="form-group">
			                                        <label>Password</label>
			                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
			                                    </div>
			                                </div>
			                                <div class="col-sm-5">
			                                    <div class="form-group">
			                                       <label>Confirm Password</label>
			                                        <input type="password" class="form-control" name="confirmpassword" id="confirm password" placeholder="Confirm Password">
			                                    </div>
			                                </div>
			                             
			                                <div class="col-sm-5 col-sm-offset-1">		                                	
			                                    <div class="form-group" id="security1">
			                                        <label>Security Key</label>
			                                         <input type="text" class="form-control" id="securitykey" name="securitykey" placeholder="Enter Security Token">			                         
			                                    </div>
			                                    
			                                </div>
			                                <div class="col-sm-5">			                                	
			                                	<a class="btn btn-primary securitykey" style="margin-top: 25px">Get Security Key</a>			                            
			                                </div>
		                            	</div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                        	<div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
		                                <input type='button' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Finish' />
		                            </div>

		                            <div class="pull-left">
		                            	<a class='btn btn-home btn-default btn-wd' href="{{url('/')}}" style="display: none">Home</a>
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->

	    <div class="footer">
<<<<<<< HEAD
	      
=======
	      {{--   <div class="container text-center">
	             Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/paper-bootstrap-wizard">here.</a>
	        </div> --}}
>>>>>>> d1b5218c53c2d1624f06b5566fa3db10e85e3951
	    </div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="{{asset('admin-assets/signup-assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('admin-assets/signup-assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('admin-assets/signup-assets/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>
	<script src="{{asset('admin-assets/signup-assets/js/paper-bootstrap-wizard.js')}}" type="text/javascript"></script>
	<script src="{{asset('admin-assets/vendors/js/forms/extended/inputmask/jquery.inputmask.bundle.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('admin-assets/signup-assets/js/jquery.validate.min.js')}}" type="text/javascript"></script>
	<script type="text/javascript">
		$(function(){
			var _token = "{{csrf_token()}}";
			$('.securitykey').click(function(e){
				e.preventDefault();
            $.post("{{url('/welcome/sendemail')}}",{_token:_token,email:$('#email').val()},function(resp){
            	console.log(resp);
            });
			});
		})
		$(".phone-inputmask").inputmask("(999) 999-9999")

	</script>
	<script type="text/javascript">
		$('#specifylocation').change(function(){
			console.log("am here");
			if($(this).val()==='current'){
				$('#locationbox').hide();
				getLocation();
			}else if($(this).val()===''){

			}
			else{
				$('#locationbox').show();
			}
		});
	</script>
	<script>
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position){
        	console.log(position.coords.latitude);
        	console.log(position.coords.longitude);
        });
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAolhXr2vsz2x8-fNYJjVghMI-p9XDzNwo&libraries=places">
</script>
<script type="text/javascript">
    var input = document.getElementById('location');
      var options = {              
        componentRestrictions: {country: 'gh'}
      };
      autocomplete = new google.maps.places.Autocomplete(input, options);

       google.maps.event.addListener(autocomplete, 'place_changed', function () {
          var place = autocomplete.getPlace(); 
          console.log() 
          $('#latitude').val(place.geometry.location.lat());
          $('#longitude').val(place.geometry.location.lng());
      });
</script>
<script type="text/javascript">
<<<<<<< HEAD
	$('.btn-finish').click(function(){
		$('#signformid').submit();
	})
=======
	$('#signupform').submit(function(e){
		e.preventDefault();
		$.get('{{url('/welcome/validatetoken')}}',{token:$('#securitykey').val()},function(resp){
			if(resp.status==='success'){
				if($('#signupform').valid()){
				$.post("{{url('/welcome/addnewshop')}}",$('#signupform').serialize(),function(res){
						if(res.status==='success'){
							window.location.href=res.responseurl;
						}
				}).fail(function(){
					alert("Error Connecting");
				})
			}else{
				//form is invalid
			}
			}else{
				alert("Invalid Token. Try Again");
			}
		}).fail(function(){
			alert("Error Connecting");
		});

	});
>>>>>>> d1b5218c53c2d1624f06b5566fa3db10e85e3951
</script>

</html>
