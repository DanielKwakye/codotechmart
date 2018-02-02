@extends('administration.layout.base')
@section('styles-above')
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/extensions/sweetalert.css')}}">
@endsection
@section('content')
<section>
	<div>
	 <div class="row">
	 	@include('administration.layout.notifications')
		<div class="col-xl-12 col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="card-block">
								<button class="btn btn-success" data-toggle="modal" data-target="#addattributemodal">Add New</button>
									<br><br>
								 <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="checkall" class="form-control"></th>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Values</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($attributes as $a)
                            		 <tr>
                                    <td><input type="checkbox" name="checkall" class="form-control"></td>
                                    <td>{{$a->id}}</td>
                                    <td>{{$a->name}}</td>
                                    <td>{{$a->type}}</td>
                                    <td>{{$a->description}}</td>
                                    <td>@foreach($a->values as $v){{$v->value}}<br>@endforeach</td>
                             
                                    <td>
                                    	<a href="{{url('/administration/attributefeaturedetails/'.$a->id)}}" class="btn btn-outline-primary btn-sm"><i class="icon-eye6"></i></a>
                                    	<a class="btn btn-outline-info btn-sm addvalue" type="{{$a->type}}" data="{{$a->id}}" name="{{$a->name}}"><i class="icon-plus"></i></a>
                                    	<a href="{{url('/administration/deleteattribute/'.$a->id)}}" class="btn btn-outline-danger btn-sm remove"><i class="icon-trash4"></i></a>
                                    </td>
                                </tr>
                            	@endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                   <th><input type="checkbox" name="checkall" class="form-control"></th>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Values</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
					</div>
				</div>
			</div>
	</div>
		
	</div>

	{{-- add attribute modal --}}
	<div class="modal fade text-xs-left" id="addattributemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel20" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title" id="myModalLabel20">Add New</h4>
	  </div>
	  <form class="form" method="post" action="{{url('/administration/addnewattribute')}}">
	  	{{csrf_field()}}
	  <div class="modal-body">
		
		<div class="form-body">
			<div class="form-group">
				<label>Name</label>
				<input class="form-control" id="attributename" name="name" type="text" placeholder="Name of feature or attribute...">
			</div>
			<div class="form-group">
				<label>Type</label>
				<select class="form-control" name="type" required="required">
					<option value="">Select type</option>
					<option value="attribute">Attribute</option>
					<option value="feature">Feature</option>	
				</select>
			</div>

			<div class="form-group">
				<label for="description">Description</label>
				<textarea id="attributedescription" rows="5" class="form-control" name="description" placeholder="Description"></textarea>
			</div>
		</div>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-outline-success">Save</button>
	  </div>
	  </form>
	</div>
  </div>
</div>
	{{-- end --}}
	
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
	  	<input type="hidden" name="value_id" id="value_id">
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
</section>
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

$('.addvalue').on('click',function(e){
 e.preventDefault();
 $('.addvaluetitle').text('Add value to '+$(this).attr('type')+' '+$(this).attr('name'));
 $('#value_id').val($(this).attr('data'));
 $('.addvaluemodal').modal('show');
});
</script>
@endsection