@extends('administration.layout.base')
@section('content')
<section id="basic-form-layouts">
	<div class="row match-height">
		@include('administration.layout.notifications')
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">SMS Settings</h4>
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
						<form class="form" method="post" action="{{url('administration/savesmssettings')}}">
							{{csrf_field()}}
							<div class="form-body">
							

								<div class="row" style="display: none;" id="showform">
									<div class="col-md-8 offset-md-2">
										<div class="form-group">
											<label for="name">Mail domain name</label>
											<input type="text" id="server" class="form-control" placeholder="Eg. mail.server.com" name="servername" value="">
										</div>
									
								<div class="form-group">
										<label for="username">Username</label>
										<input type="text" id="username" class="form-control" placeholder="Username" name="username" value="">
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



