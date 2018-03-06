@extends('administration.layout.base')
@extends('administration.layout.datatables')
@section('content')
<section id="configuration">
    <div class="row">
    	@include('administration.layout.notifications')
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Products List</h4>
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
                        <a class="btn btn-success" href="{{url('administration/addproduct')}}"><i class="icon-plus4"></i> Add New Product</a>
                        <br><br>
                        <table class="table table-striped table-bordered tagstable">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="checkall" class="form-control"></th>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($products as $p)
                                <tr>
                                    <td><input type="checkbox" name="checkall" class="form-control"></td>
                                    <td>{{$p->id}}</td>
                                    <td>{{$p->mainimage}}</td>
                                    <td>{{$p->name}}</td>
                                    <td>{{$p->category->name}}</td>
                                    <td>{{$p->price}}</td>
                                    <td>{{$p->quantity}}</td>
                                    <td>
                                    	<a data="{{$p}}" class="btn btn-outline-primary btn-sm edit"><i class="icon-head"></i> Edit</a>
                                    	<a class="btn btn-outline-danger btn-sm remove"><i class="icon-trash4"></i> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><input type="checkbox" name="checkall" class="form-control"></th>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
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
                 $.get("{{url('/administration/deleteproduct')}}",{id:data[1]},function(response){
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
</script>
@stop

