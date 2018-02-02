@if(Session::has('success-message'))
<div class="alert alert-icon-left alert-success alert-dismissible fade in mb-2" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
</button>
<strong>Success</strong> {!! Session::get('success-message')!!}
</div>
@endif
@if(Session::has('error-message'))
<div class="alert alert-icon-left alert-danger alert-dismissible fade in mb-2" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
</button>
<strong>Error</strong> {!! Session::get('error-message')!!}
</div>
@endif
@if(Session::has('warning-message'))
<div class="alert alert-icon-right alert-warning alert-dismissible fade in mb-2" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
</button>
<strong>Warning</strong> {!! Session::get('warning-message')!!}
</div>
@endif