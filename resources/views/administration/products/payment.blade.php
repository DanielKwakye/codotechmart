@extends('administration.layout.base')
@section('styles-below')
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
@endsection
@section('content')
        <div class="col-md-12 col-sm-12">
        	@include('administration.layout.notifications')
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Choose Payment Methods</h4>
				</div>
				<div class="card-body collapse in"><br>
					{{-- hubtel --}}
					<div class="row">
						<div class="col-sm-3">
							<p class="text-xs-center"><img src="{{Request::root().'/admin-assets/images/payment/hubtel.jpg'}}" style="width: 100px"></p>
						</div>
						<div class="col-sm-6">
							<?php 	
							$client_id = '';
							$client_secret = '';
							$merchant_key = '';   
								if($type=='h'){
									$query = DB::table('hubteldetails')->where('shop_id',Auth::guard('shopadmin')->user()->shop_id)->first();
									 if($query !== null){
									 	$client_id = $query->client_id;
							        $client_secret = $query->client_secret; 
							        $merchant_key = $query->merchant_key;
									 }
									 
								}
							?>
							<form class="form" {{$type=='h'?'':"style=display:none"}} id="hubtelform" method="post" action="{{url('administration/savepaymentmethod')}}">
									{{csrf_field()}}
								<input type="hidden" name="type" value="h">
								<div class="form-group">
									{{-- <label for="clientid">Client ID</label> --}}
									<input type="text" id="clientid" class="form-control" placeholder="Client ID" name="client_id" required="required" value="{{$client_id}}">
								</div>
								<div class="form-group">
									{{-- <label for="clientsecret">Client Secret</label> --}}
									<input type="text" id="clientsecret" class="form-control" placeholder="Client Secret" name="client_secret" required="required" value="{{$client_secret}}">
								</div>
								<div class="form-group">
									{{-- <label for="merchantkey">Merchant Key</label> --}}
									<input type="text" id="merchantkey" class="form-control" placeholder="Merchant Key" name="merchant_key" required="required" value="{{$merchant_key}}">
								</div>
								<div class="form-actions right">
									<button type="submit" class="btn btn-success">
									<i class="icon-check2"></i> Save
								</button>
								</div>
							</form>
						</div>
						<div class="col-sm-3">
							 <fieldset style="margin-right: auto;margin-left: auto;">
					              <div class="float-xs-left">
					                <input type="checkbox" class="make-switch switchBootstrap" {{$type=='h'?'checked':''}} name="hubtelswitch" id="hubtelswitch"/>
					              </div>
            				 </fieldset>
						</div>
					</div>
					{{-- end --}}
					<hr>
					{{-- slydepay  --}}
 						<div class="row">
						<div class="col-sm-3">
							<p class="text-xs-center"><img src="{{Request::root().'/admin-assets/images/payment/slydepay.png'}}" style="width: 100px"></p>
						</div>
						<div class="col-sm-6">
							<?php 	
							$merchant_email = '';
							$merchant_key = '';   
								if($type=='s'){
									$query = DB::table('slydepaydetails')->where('shop_id',Auth::guard('shopadmin')->user()->shop_id)->first();
									if($query !== null){
									$merchant_email = $query->merchant_email;
							        $merchant_key = $query->merchant_key; 
							    }
								}
							?>
							<form class="form" id="slydepayform" {{$type=='s'?'':"style=display:none"}} method="post" action="{{url('administration/savepaymentmethod')}}">
								{{csrf_field()}}
								<input type="hidden" name="type" value="s">
								<div class="form-group">
									{{-- <label for="clientsecret">Client Secret</label> --}}
									<input type="text" id="merchantemail" class="form-control" placeholder="Merchant Email" name="merchant_email" required="required" value="{{$merchant_email}}">
								</div>
								<div class="form-group">
									{{-- <label for="merchantkey">Merchant Key</label> --}}
									<input type="text" id="merchantkey" class="form-control" placeholder="Merchant Key" name="merchant_key" required="required" value="{{$merchant_key}}">
								</div>
								<div class="form-actions right">
									<button type="submit" class="btn btn-success">
									<i class="icon-check2"></i> Save
								</button>
								</div>
							</form>
						</div>
						<div class="col-sm-3">
							 <fieldset style="margin-right: auto;margin-left: auto;">
					              <div class="float-xs-left">
					                <input type="checkbox" class="make-switch switchBootstrap" {{$type=='s'?'checked':''}} name="slydepayswitch" id="slydepayswitch"/>
					              </div>
            				 </fieldset>
						</div>
					</div>
					{{-- end --}}
					<hr>
					{{-- mazoma --}}
					<div class="row">
						<div class="col-sm-3">
							<p class="text-xs-center"><img src="{{Request::root().'/admin-assets/images/payment/mazuma.png'}}" style="width: 100px"></p>
						</div>
						<div class="col-sm-6">
							<?php 	
							$api_key = '';
							$recipient_number = '';   
								if($type=='m'){
									$query = DB::table('mazumadetails')->where('shop_id',Auth::guard('shopadmin')->user()->shop_id)->first();
									if($query !== null){
									$api_key = $query->api_key;
							        $recipient_number = $query->recipient_number; 
							    }
								}

							?>
							<form class="form" id="mazumaform" {{$type=='m'?'':"style=display:none"}} method="post" action="{{url('administration/savepaymentmethod')}}">
									{{csrf_field()}}

								<input type="hidden" name="type" value="m">
								<div class="form-group">
									{{-- <label for="clientsecret">Client Secret</label> --}}
									<input type="text" id="apikey" class="form-control" placeholder="Api Key" name="api_key" required="required" value="{{$api_key}}">
								</div>
								<div class="form-group">
									{{-- <label for="merchantkey">Merchant Key</label> --}}
									<input type="text" id="recipient_number" class="form-control" placeholder="Your MTN Number" name="recipient_number" required="required" value="{{$recipient_number}}">
								</div>
								<div class="form-actions right">
									<button type="submit" class="btn btn-success">
									<i class="icon-check2"></i> Save
								</button>
								</div>
							</form>
						</div>
						<div class="col-sm-3">
							 <fieldset style="margin-right: auto;margin-left: auto;">
					              <div class="float-xs-left">
					                <input type="checkbox" class="make-switch switchBootstrap" {{$type=='m'?'checked':''}} id="mazumaswitch" name="mazumaswitch"/>
					              </div>
            				 </fieldset>
						</div>
					</div>

					{{-- end --}}
				</div>
			</div>
		</div>
@endsection

@section('scripts-below')
  <script src="{{asset('admin-assets/vendors/js/forms/toggle/bootstrap-switch.min.js')}}" type="text/javascript"></script>
  <script type="text/javascript">
  	$(".switchBootstrap").bootstrapSwitch();
  	$('#hubtelswitch').on('switchChange.bootstrapSwitch',function(e){
  		if(e.target.checked){
  			$('#hubtelform').show();
  		}else{
  			$('#hubtelform').hide();
  		}
  	});
  		$('#slydepayswitch').on('switchChange.bootstrapSwitch',function(e){
  		if(e.target.checked){
  			$('#slydepayform').show();
  		}else{
  			$('#slydepayform').hide();
  		}
  	});
  			$('#mazumaswitch').on('switchChange.bootstrapSwitch',function(e){
  		if(e.target.checked){
  			$('#mazumaform').show();
  		}else{
  			$('#mazumaform').hide();
  		}
  	})
  </script>
@endsection