@extends('admin.layout.adminLayout')
@section('title')
    <title>Shop Categories|| Admin</title>
@endsection
@section('content')
    
     <!-- Data tables -->

                        <!--<link rel="stylesheet" type="text/css" href="assets/widgets/datatable/datatable.css">-->
                        <script type="text/javascript" src="{{asset('couriers/assets/widgets/datatable/datatable.js')}}"></script>
                        <script type="text/javascript" src="{{asset('couriers/assets/widgets/datatable/datatable-bootstrap.js')}}"></script>
                        <script type="text/javascript" src="{{asset('couriers/assets/widgets/datatable/datatable-tabletools.js')}}"></script>
                        <script type="text/javascript" src="{{asset('couriers/assets/widgets/datatable/datatable-reorder.js')}}"></script>

                        <script type="text/javascript">

                            /* Datatables export */

                            $(document).ready(function() {
                                var table = $('#datatable-tabletools').DataTable();
                                var tt = new $.fn.dataTable.TableTools( table );

                                $( tt.fnContainer() ).insertBefore('#datatable-tabletools_wrapper div.dataTables_filter');

                                $('.DTTT_container').addClass('btn-group');
                                $('.DTTT_container a').addClass('btn btn-default btn-md');

                                $('.dataTables_filter input').attr("placeholder", "Search...");

                            } );

                            /* Datatables reorder */

                            $(document).ready(function() {
                                $('#datatable-reorder').DataTable( {
                                    dom: 'Rlfrtip'
                                });

                                $('#datatable-reorder_length').hide();
                                $('#datatable-reorder_filter').hide();

                            });

                            $(document).ready(function() {
                                $('.dataTables_filter input').attr("placeholder", "Search...");
                            });

                        </script>
                        
                        <div id="page-title">
                            <h2>Shop Categories <button class="btn border-blue-alt btn-link font-blue-alt ra-100 btn-border" data-toggle="modal" data-target="#myModal"><i class="glyph-icon icon-plus"> </i>Add Shop Category</button></h2>
                        </div>
                        <div class="panel">
                            <div class="panel-body">
                                <div class="example-box-wrapper">
                                    <div class="table-responsive">
                                        <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Category Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th>id</th>
                                                <th>Category Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>

                                        <tbody>
                                            
                                            @foreach(\App\ShopCategory::all() as $p)
                                            <tr class="tr{{$p->id}}">
                                                <td>{{$p->id}}</td>
                                                <td>{{$p->name}}</td>
                                                <td>
                                                    <button class="btn btn-warning btn-xs edit" data-toggle="modal" data-target="#editModal" data="{{$p}}">EDIT</button>
                                                    
                                                    <button class="btn btn-success btn-xs delete" catid="{{$p->id}}">DELETE</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection

@section('script')
    <script type="text/javascript">
        $('.edit').click(function(){
        var data = JSON.parse($(this).attr('data'));
        $('.name').val(data.name);
        $('.id').val(data.id);
    }); 
    </script>

    <script type="text/javascript">
    $(document).on('click','.delete',function(e){
    var id=$(this).attr('catid');
    var _token = "{{csrf_token()}}";
    if (confirm('Are you sure you want to Delete This Shop?')) {
        $.post("{{url('admin/category/delete')}}",{id:id,_token:_token},function(result){
        $now=JSON.parse(result);
        $('.tr'+id).remove();
        notify($now.status,$now.error);

        }).fail(function(){
            alert('error sending request');
        });
    }
   });  
  
</script>

@endsection