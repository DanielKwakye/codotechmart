@extends('administration.layout.base')
@section('styles-above')
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/extensions/sweetalert.css')}}">
@endsection
@section('content')
<section id="decks">
	<div class="row">
	 	@include('administration.layout.notifications')
		<div class="col-xl-12 col-lg-12">
			<div class="card">
				<div class="card-body">

					<div class="card-block">
						<h3 class="card-title">{{ucfirst($af->name)}} value(s)</h3>
								<button class="btn btn-success" data-toggle="modal" data-target=".addvaluemodal">Add New Value</button>
								<a href="{{url('/administration/attributes')}}" class="btn btn-icon btn-round"><i class="icon-reply4"></i></a>
									<br><br>
								 <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="checkall" class="form-control"></th>
                                    <th>#</th>
                                    <th>Value</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($af->values as $v)
                            		 <tr>
                                    <td><input type="checkbox" name="checkall" class="form-control"></td>
                                    <td>{{$v->id}}</td>
                                    <td>{{$v->value}}</td>
                                    <td>
                                    	<a class="btn btn-outline-info btn-sm editvalue" data="{{$v->id}}" name="{{$v->value}}"><i class="icon-android-create"></i></a>
                                    	<a href="{{url('/administration/deletevalue/'.$v->id)}}" class="btn btn-outline-danger btn-sm remove"><i class="icon-trash4"></i></a>
                                    </td>
                                </tr>
                            	@endforeach
                            </tbody>
                            <tfoot>
                               <tr>
                                    <th><input type="checkbox" name="checkall" class="form-control"></th>
                                    <th>#</th>
                                    <th>Value</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
					</div>
				</div>
			</div>
	</div>
		
	</div>
</section>


	{{-- add value --}}
	<div class="modal fade text-xs-left addvaluemodal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel20" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title addvaluetitle">Add Value</h4>
	  </div>
	  <form class="form" method="post" action="{{url('/administration/addvaluetoattribute')}}">
	  	<input type="hidden" name="value_id" value="{{$af->id}}">
	  	{{csrf_field()}}
	  <div class="modal-body">
		
		<div class="form-body">
			<div class="form-group">
				<label>Value</label>
				<input class="form-control" name="name" type="text" placeholder="Value Name">
			</div>
		</div>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-outline-success">Add Value</button>
	  </div>
	  </form>
	</div>
  </div>
</div>
	{{-- end --}}

	{{-- edit value modal--}}
	<div class="modal fade text-xs-left editvaluemodal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel20" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title addvaluetitle">Edit Value</h4>
	  </div>
	  <form class="form" method="post" action="{{url('/administration/editattributefeature')}}">
	  	<input type="hidden" name="value_id" id="value_id">
	  	<input type="hidden" name="attr_id" value="{{$af->id}}">
	  	{{csrf_field()}}
	  <div class="modal-body">
		
		<div class="form-body">
			<div class="form-group">
				<label>Value</label>
				<input class="form-control" id="valuename" name="name" type="text" placeholder="Value Name">
			</div>
		</div>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-outline-success">Add Value</button>
	  </div>
	  </form>
	</div>
  </div>
</div>
	{{-- end --}}
@endsection
@section('scripts-below')
 <script src="{{asset('admin-assets/vendors/js/extensions/sweetalert.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
	$('.remove').on('click',function(e){
		var url = $(this).attr('href');
  		e.preventDefault();
  		        swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                allowOutsideClick: false,
                closeOnConfirm: false
            },function(isConfirm){
                if (isConfirm){
                window.location.href = url; 
                }
  });
	});

$('.editvalue').on('click',function(e){
 e.preventDefault();
 var data = $(this).attr('data');
 var name = $(this).attr('name');
 $('#value_id').val($(this).attr('data'));
 $('#valuename').val(name);
 $('.editvaluemodal').modal('show');
});
</script>
@endsection