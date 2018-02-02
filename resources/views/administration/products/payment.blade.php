@extends('administration.layout.base')
@section('styles-below')
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
@endsection
@section('content')
          <div class="col-md-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Active Payment Methods</h4>
				</div>
				<div class="card-body collapse in"><br>
					
				</div>
			</div>
		</div>

        <div class="col-md-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">All Payment Methods</h4>
				</div>
				<div class="card-body collapse in"><br>
					@foreach($paymentmethods as $p)
					<div class="row">
						<div class="col-sm-2">
							<p class="text-xs-center"><img src="{{Request::root().'/admin-assets/images/payment/'.$p->image}}" style="width: 100px"></p>
						</div>
						<div class="col-sm-8">
							<p>{{$p->description}}</p>
						</div>
						<div class="col-sm-1">
							 <fieldset>
					              <div class="float-xs-left">
					                <input type="checkbox" class="make-switch switchBootstrap" id="switchBootstrap1"/>
					              </div>
            				 </fieldset>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
@endsection

@section('scripts-below')
  <script src="{{asset('admin-assets/vendors/js/forms/toggle/bootstrap-switch.min.js')}}" type="text/javascript"></script>
  <script type="text/javascript">
  	$(".switchBootstrap").bootstrapSwitch()
  </script>
@endsection