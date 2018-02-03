@extends('administration.layout.base')
@extends('administration.layout.datatables')
@section('content')
<section id="configuration">
    <div class="row">
    	@include('administration.layout.notifications')
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Brands</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block card-dashboard">
                        <button class="btn btn-success" data-toggle="modal" data-target="#addcategorymodal"><i class="icon-plus4"></i> Add New</button>
                        <br><br>
                        <table class="table table-striped table-bordered tagstable">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="checkall" class="form-control"></th>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($brand as $b)
                                <tr>

                                    <td><input type="checkbox" name="checkall" class="form-control"></td>
                                    <td>{{$b->id}}</td>
                                    <td><img src="{{$b->image}}" style="max-width: 50px;max-height: 50px"></td>
                                    <td>{{$b->name}}</td>
                                    <td>{{$b->description}}</td>
                                    <td>
                                    	<a data="{{$b}}" class="btn btn-outline-primary btn-sm edit"><i class="icon-head"></i> Edit</a>
                                    	<a class="btn btn-outline-danger btn-sm remove"><i class="icon-trash4"></i> Delete</a>
                                    </td>
                                </tr>                        
                            @endforeach
                            </tbody>
                            <tfoot>
                               <tr>
                                    <th><input type="checkbox" name="checkall" class="form-control"></th>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
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

{{-- add modal here --}}
<div class="modal fade text-xs-left" id="addcategorymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel20" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title" id="myModalLabel20">Add New Brand</h4>
	  </div>
	  <form class="form" method="post" action="{{url('/administration/addbrand')}}">
	  	{{csrf_field()}}
	  <div class="modal-body">
		
		<div class="form-body">
			<div class="form-group">
				<label>Name</label>
				<input class="form-control" id="name" name="name" type="text" placeholder="Tag Name">
			</div>

			<div class="form-group">
				<label for="description">Description</label>
				<textarea id="description" rows="5" class="form-control" name="description" placeholder="Description"></textarea>
			</div>
            <div class="form-group">
                <label>Select File</label>
                <label id="projectinput7" class="file center-block">
                    <input type="file" id="file">
                    <span class="file-custom"></span>
                </label>
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
{{-- end  --}}
{{-- edit modal here --}}
<div class="modal fade text-xs-left" id="edittagmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel20" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title" id="myModalLabel20">Edit Brand</h4>
	  </div>
	  <form class="form" method="post" action="{{url('/administration/editbrand')}}">
	  	<input type="hidden" name="id" id="brandid">
	  	{{csrf_field()}}
	  <div class="modal-body">
		
		<div class="form-body">
			<div class="form-group">
				<label>Name</label>
				<input class="form-control" id="brandname" name="name" type="text" placeholder="Tag Name">
			</div>

			<div class="form-group">
				<label for="description">Description</label>
				<textarea id="branddescription" rows="5" class="form-control" name="description" placeholder="Description"></textarea>
			</div>
             <div class="form-group">
                <label>Select File</label>
                <label id="projectinput7" class="file center-block">
                    <input type="file" id="file">
                    <span class="file-custom"></span>
                </label>
            </div>
		</div>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-outline-success">Update</button>
	  </div>
	  </form>
	</div>
  </div>
</div>
{{-- end --}}
@endsection

@section('tableinit')
<script type="text/javascript">
 var table = $('.tagstable').DataTable();
	table.on( 'click', '.remove', function (e) {
    e.preventDefault();  
     $tr = $(this).closest('tr');
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
                    var data = table.row($tr).data();
                 $.get("{{url('/administration/deletebrand')}}",{id:data[1]},function(response){
                 	console.log(response);
                 if(response.status=='success'){
                     console.log(table.row($tr).remove().draw()); 
                     swal("Success!","Deleted Successfully","success");
                  }
        else{
            swal("Error!","Error Deleting Tag. Tags might have Children","error");
        }
    }).fail(function(){
            swal("Error!","Error Deleting Tag.Check Network Connection","error");
    });
       }
  });
});

$('.edit').on('click',function(e){
 e.preventDefault()
 var data = JSON.parse($(this).attr('data'));
 $('#brandid').val(data.id);
 $('#brandname').val(data.name);
 $('#branddescription').val(data.description);
 $('#edittagmodal').modal('show');
});
</script>
@stop

