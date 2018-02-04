@extends('administration.layout.base')
@section('content')
<section id="basic-form-layouts">
	<div class="row match-height">
		@include('administration.layout.notifications')
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Email Settings</h4>
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
						<form class="form" method="post" action="{{url('administration/saveemailsettings')}}">
							{{csrf_field()}}
							<div class="form-body">
								<div class="row" style="margin-left: 4px">
									<div class="col-md-8 offset-md-2">
											<div class="form-group">
											<label for="name"></label>
											<fieldset class="radio">
							                  <label>
							                    <input type="radio" name="type" value="0" {{$emailsettings->type===0?'checked':''}}>
							                    Use PHP's mail() function (recommended; works in most cases)
							                  </label>
							              </fieldset>
							              <fieldset class="radio">
							                  <label>
							                    <input type="radio" name="type" value="1" {{$emailsettings->type===1?'checked':''}}>
							                    Set my own SMTP parameters (for advanced users ONLY)
							                  </label>
							              </fieldset>
										</div>
									</div>
								</div>

								<div class="row" style="display: none;" id="showform">
									<div class="col-md-8 offset-md-2">
										<div class="form-group">
											<label for="name">Mail domain name</label>
											<input type="text" id="server" class="form-control" placeholder="Eg. mail.server.com" name="servername" value="{{$emailsettings->server}}">
										</div>
									
								<div class="form-group">
										<label for="username">Username</label>
										<input type="text" id="username" class="form-control" placeholder="Username" name="username" value="{{$emailsettings->username}}">
								 </div>
								 <div class="form-group">
										<label for="password">Password</label>
										<input type="password" id="password" class="form-control" placeholder="Password" name="password" value="{{$emailsettings->password}}">
								 </div>
								 <div class="form-group">
										<label for="description">Port</label>
										<input type="text" id="port" class="form-control" size="5" name="port" value="{{$emailsettings->port}}">
								 </div>
								  <div class="form-group">
										<label for="description">Port</label>
										<select class="form-control" name="encryption">
											<option value="" {{$emailsettings->encryption===''?'selected="selected"':''}}>None</option>
											<option value="TLS" {{$emailsettings->encryption==='TLS'?'selected="selected"':''}}>TLS</option>
											<option value="SSL" {{$emailsettings->encryption==='SSL'?'selected="selected"':''}}>SSl</option>
											<option value="IMAP" {{$emailsettings->encryption==='IMAP'?'selected="selected"':''}}>IMAP</option>
											<option value="POP3" {{$emailsettings->encryption==='POP3'?'selected="selected"':''}}>POP3</option>
										</select>
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
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('scripts-below')
<script type="text/javascript">
	$(function(){
		//console.log($("input[type='radio']").val());
   if(+$("input[type='radio']:checked").val()===1){
   	$('#showform').show();
   }else{
   	$('#showform').hide();
   }

	$("input[type='radio']").change(function(){
		if(+$(this).val()===1){
			$('#showform').show();
		}else{
			$('#showform').hide();
		}
	});
});

</script>
@endsection



