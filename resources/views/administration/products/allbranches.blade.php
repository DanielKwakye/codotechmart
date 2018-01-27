@extends('administration.layout.base')
@section('content')
<section id="decks">
	<div class="row">
		@foreach($branches as $b)
		<div class="col-xs-4">
			<div class="card-deck-wrapper">
				<div class="card-deck">				
					<div class="card">
						<div class="card-body">
							<img class="card-img-top img-fluid" src="{{$b->image}}" alt="Card image cap"/>
							<div class="card-block">
								<h4 class="card-title">{{$b->name}}</h4>
								<p class="card-text">{{$b->description}}</p>
								<a href="{{url('/administration/branchdetails/'.$b->id)}}" class="btn btn-outline-success"><i class="icon-eye6"></i> Enter Branch</a>
							</div>
						</div>
					</div>			
				</div>
			</div>
		</div>
		@endforeach
	</div>
</section>
@endsection