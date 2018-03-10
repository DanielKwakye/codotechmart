@extends('administration.layout.base')
@extends('administration.layout.datatables')
@section('styles-below')
<style type="text/css">
    .dropdown-item:hover{
        background: none!important;
    }
</style>
@endsection
@section('content')
<section id="configuration">
    <div class="row">
    	@include('administration.layout.notifications')
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Customers</h4>
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
                       {{--  <a class="btn btn-success" href="{{url('administration/addproduct')}}"><i class="icon-plus4"></i> Send Notification</a> --}}
                        <br><br>
                        <table class="table table-striped table-bordered tagstable">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="checkall" class="form-control"></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($customers as $c)
                                <tr>
                                    <td><input type="checkbox" name="checkall" class="form-control"></td>
                                    <td>{{$c->user->name}}</td>
                                    <td>{{$c->user->email}}</td>
                                    <td>{{$c->user->phone}}</td>
                                    <td>
                                    	<div class="btn-group mr-1 mb-1">
                                        <button type="button" class="btn btn-info btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Send</button>
                                        <div class="dropdown-menu">
                                            @if($c->user->phone !== '')
                                            <a class="dropdown-item sms" href="#" data="{{$c->user->phone}}">SMS</a>
                                            @endif
                                            @if($c->user->email !== '')
                                            <a class="dropdown-item email" href="#" data="{{$c->user->email}}">Email</a>
                                            @endif
                                        </div>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
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


    $('.sms').on('click',function(e){
        e.preventDefault();
        var data = $(this).attr('data');
        $.get("{{url('/administration/sendsmstocustomer')}}",{data:data},function(r){
            if(r.status==='success'){
                alert("Message send Successfully");
            }else{
                alert('Error Sending Message');
            }
        }).fail(function(){
            alert("No Network Connection");
        });
    });

      $('.email').on('click',function(e){
        e.preventDefault();
        var data = $(this).attr('data');
        $.get("{{url('/administration/sendemailtocustomers')}}",{data:data},function(r){
            if(r.status==='success'){
                alert("Message send Successfully");
            }else{
                alert('Error Sending Message');
            }
        }).fail(function(){
            alert("No Network Connection");
        });
    });
</script>
@stop

