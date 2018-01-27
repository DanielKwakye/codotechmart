@extends('administration.layout.base')
@section('content')
<section id="basic-form-layouts">
	<div class="row match-height">
		@include('administration.layout.notifications')
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Add New Branch</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
							<li><a data-action="reload"><i class="icon-reload"></i></a></li>
							<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
							{{-- <li><a data-action="close"><i class="icon-cross2"></i></a></li> --}}
						</ul>
					</div>
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form class="form" method="post" action="{{url('administration/addnewbranch')}}">
							{{csrf_field()}}
							<div class="form-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="name">Name of Branch</label>
											<input type="text" id="name" class="form-control" placeholder="Branch Name" name="name">
										</div>
									</div>
								</div>
								<div class="form-group">
										<label for="description">Description</label>
										<textarea id="description" rows="3" class="form-control" name="description" placeholder="Branch Description"></textarea>
								 </div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="location">Location</label>
											<input type="hidden" name="longitude" id="branchLng">
                                             <input type="hidden" name="latitude" id="branchLat">
											<input type="text" id="search_location" class="form-control" placeholder="Location" name="location">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="landmark">Nearest Landmark</label>
											<input type="text" id="landmark" class="form-control" placeholder="Nearest Landmark" name="landmark">
										</div>
									</div>
								</div>
								<br><br>
								<div class="row">
									<div class="col-md-6">
										
								<div class="form-group">
									<label>Select File</label>
									<label id="projectinput7" class="file center-block">
										<input type="file" id="file">
										<span class="file-custom"></span>
									</label>
								</div>
									</div>
									<div class="col-md-6">
										 <fieldset class="checkboxs">
							                  <label>
							                    <input type="checkbox" value="1" checked name="active">
							                      Activate Branch
							  				  </label>
							              </fieldset>
									</div>
								</div>
								</div>

							<div class="form-actions">
								<button type="submit" class="btn btn-success">
									<i class="icon-check2"></i> Add Branch
								</button>
								<button type="button" class="btn btn-danger mr-1">
									<i class="icon-cross2"></i> Cancel
								</button>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('scripts-below')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAolhXr2vsz2x8-fNYJjVghMI-p9XDzNwo&libraries=places">
</script>
<script type="text/javascript">
    var input = document.getElementById('search_location');
      var options = {              
        componentRestrictions: {country: 'gh'}
      };
      autocomplete = new google.maps.places.Autocomplete(input, options);

       google.maps.event.addListener(autocomplete, 'place_changed', function () {
          var place = autocomplete.getPlace();  
          $('#branchLat').val(place.geometry.location.lat());
          $('#branchLng').val(place.geometry.location.lng());
      });
</script>
@endsection



