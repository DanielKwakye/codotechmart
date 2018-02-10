@extends('administration.layout.base')
@section('content')
<section id="basic-form-layouts">
	<div class="row match-height">
		@include('administration.layout.notifications')
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">General Settings</h4>
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
						{{-- settings here --}}
						<form class="form" method="post" action="{{url('administration/savegeneralsettings')}}">
							{{csrf_field()}}
							<div class="form-body">

								<div class="row">
									<div class="col-md-8 offset-md-2">
										<div class="form-group">
											<label for="name">Store Name</label>
											<input type="text" id="storename" class="form-control" name="name" value="{{$generalsettings->name}}">
										</div>
									
								<div class="form-group">
										<label for="tag_line">Tag Line</label>
										<input type="text" id="username" class="form-control" name="tag_line" value="{{$generalsettings->tag_line}}">
								 </div>
								{{--  <div class="form-group">
										<label for="type">Type</label>
										<input type="" id="password" class="form-control" placeholder="Password" name="password" value="{{$generalsettings->type}}">
								 </div> --}}
								   <div class="form-group">
										<label for="region">Region</label>
										<select class="form-control" name="region">
											<option value="">Select Region</option>
											<option value="Greater Accra" {{$generalsettings->type=='Greater Accra'?'selected="selected"':''}}>Greater Accra</option>
											<option value="Ashanti" {{$generalsettings->type=='Ashanti'?'selected="selected"':''}}>Ashanti</option>
											<option value="Brong Ahafo" {{$generalsettings->type=='Brong Ahafo'?'selected="selected"':''}}>Brong Ahafo</option>
											<option value="Northern" {{$generalsettings->type=='Northern'?'selected="selected"':''}}>Northern</option>
											<option value="Central" {{$generalsettings->type=='Central'?'selected="selected"':''}}>Central</option>
											<option value="Eastern" {{$generalsettings->type=='Eastern'?'selected="selected"':''}}>Eastern</option>
											<option value="Western" {{$generalsettings->type=='Western'?'selected="selected"':''}}>Western</option>
											<option value="Upper East" {{$generalsettings->type=='Upper East'?'selected="selected"':''}}>Upper East</option>
											<option value="Upper West" {{$generalsettings->type=='Upper West'?'selected="selected"':''}}>Upper West</option>
											<option value="Volta" {{$generalsettings->type=='Volta'?'selected="selected"':''}}>Volta</option>

										</select>
								 </div>

								 <div class="form-group">
										<label for="creator_surname">Creator Surname</label>
										<input type="text" id="creator_surname" class="form-control" name="creator_surname" value="{{$generalsettings->creator_surname}}">
								 </div>
								  <div class="form-group">
										<label for="creator_firstname">Creator Firstname</label>
										<input type="text" id="creator_firstname" class="form-control" name="creator_firstname" value="{{$generalsettings->creator_firstname}}">
								 </div>
								 <div class="form-group">
										<label for="creator_email">Shop Email</label>
										<input type="text" id="creator_email" class="form-control" name="creator_email" value="{{$generalsettings->creator_email}}">
								 </div>
								 <div class="form-group">
										<label for="phone">Phone Number</label>
										<input type="text" id="phone" class="form-control" name="phone" value="{{$generalsettings->phone}}">
								 </div>
								  <div class="form-group">
					                <label>Choose Store Logo</label>
					                <label id="projectinput7" class="file center-block">
					                    <input type="file" id="file" >
					                    <span class="file-custom"></span>
					                </label>
					            </div>
					             <div class="form-group">
					                <label>Upload Store Documents</label>
					                <label id="projectinput7" class="file center-block">
					                    <input type="file" id="file">
					                    <span class="file-custom"></span>
					                </label>
					            </div>
								 </div>
								</div>
							
								
								</div>

							<div class="form-actions offset-md-2">
								<button type="submit" class="btn btn-success">
									<i class="icon-check2"></i> Save
								</button>
								<button type="button" class="btn btn-danger mr-1">
									<i class="icon-cross2"></i> Cancel
								</button>
								
							</div>
						</form>
						{{-- end --}}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('scripts-below')


</script>
@endsection



