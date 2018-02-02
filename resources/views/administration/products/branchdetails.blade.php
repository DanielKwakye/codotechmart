@extends('administration.layout.base')
@section('content')
<section class="card">
	<div class="card-block">
		<div  class="row">
			<div class="col-md-6 col-sm-12 text-xs-center text-md-left">
				<h2>{{$branch->name}}</h2>
				<p class="pb-3">{{$branch->description}}</p>
				<p class="pb-3">{{$branch->landmark}}</p>
			</div>
		</div>
		
	</div>
</section>
@endsection