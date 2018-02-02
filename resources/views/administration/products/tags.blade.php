@extends('administration.layout.base')
@extends('administration.layout.datatables')
@section('content')
<section id="configuration">
    <div class="row">
    	@include('administration.layout.notifications')
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Tags</h4>
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
                        <button class="btn btn-success" data-toggle="modal" data-target="#addtagmodal"><i class="icon-plus4"></i> Add New</button>
                        <br><br>
                        <table class="table table-striped table-bordered tagstable">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="checkall" class="form-control"></th>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($tags as $t)
                                <tr>
                                    <td><input type="checkbox" name="checkall" class="form-control"></td>
                                    <td>{{$t->id}}</td>
                                    <td>{{$t->name}}</td>
                                    <td>{{$t->description}}</td>
                                    <td>
                                    	<a data="{{$t}}" class="btn btn-outline-primary btn-sm edit"><i class="icon-head"></i> Edit</a>
                                    	<a class="btn btn-outline-danger btn-sm remove"><i class="icon-trash4"></i> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><input type="checkbox" name="checkall" class="form-control"></th>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Desctiption</th>
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
<div class="modal fade text-xs-left" id="addtagmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel20" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title" id="myModalLabel20">Add New Tag</h4>
	  </div>
	  <form class="form" method="post" action="{{url('/administration/addtag')}}">
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
		<h4 class="modal-title" id="myModalLabel20">Edit Tag</h4>
	  </div>
	  <form class="form" method="post" action="{{url('/administration/edittag')}}">
	  	<input type="hidden" name="id" id="tagid">
	  	{{csrf_field()}}
	  <div class="modal-body">
		
		<div class="form-body">
			<div class="form-group">
				<label>Name</label>
				<input class="form-control" id="tagname" name="name" type="text" placeholder="Tag Name">
			</div>

			<div class="form-group">
				<label for="description">Description</label>
				<textarea id="tagdescription" rows="5" class="form-control" name="description" placeholder="Description"></textarea>
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
                 $.get("{{url('/administration/deletetag')}}",{id:data[1]},function(response){
                 	console.log(response);
                 if(response.status=='success'){
                     console.log(table.row($tr).remove().draw()); 
                     swal("Success!","Deleted Successfully","success");
                  }
        else{
            swal("Error!","Error Deleting Tag","error");
        }
    }).fail(function(){
            swal("Error!","Error Deleting Tag","error");
    });
       }
  });
});

$('.edit').on('click',function(e){
 e.preventDefault()
 var data = JSON.parse($(this).attr('data'));
 $('#tagid').val(data.id);
 $('#tagname').val(data.name);
 $('#tagdescription').val(data.description);
 $('#edittagmodal').modal('show');
});
</script>
@stop

