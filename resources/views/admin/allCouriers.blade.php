@extends('admin.layout.adminLayout')
@section('title')
    <title>All Couriers</title>
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
                            <h2>Enrolled Shop(s) <button class="btn border-blue-alt btn-link font-blue-alt ra-100 btn-border" data-toggle="modal" data-target="#myModal"><i class="glyph-icon icon-plus"> </i>Add Shop Category</button></h2>
                        </div>
                        <div class="panel">
                            <div class="panel-body">
                                <div class="example-box-wrapper">
                                    <div class="table-responsive">
                                        <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Courier Name</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th>Courier Name</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>

                                        <tbody>
                                            
                                            @foreach(\App\Courier::withTrashed()->get() as $p)
                                            <tr>
                                                <td>{{$p->name}}</td>
                                                <td>{{$p->deleted_at==null?'Active':'Deactivated'}}</td>
                                                <td class="tr{{$p->id}}">
                                                    <button class="btn btn-warning btn-xs view" data-toggle="modal" data-target="#myProfile" data="{{$p}}">VIEW</button>
                                                    @if($p->deleted_at==null)
                                                    <button class="btn btn-danger btn-xs deactivate" id="deactivate{{$p->id}}" courierid="{{$p->id}}">DEACTIVATE</button>
                                                    @elseif($p->deleted_at!==null)
                                                    <button class="btn btn-success btn-xs activate" id="activate{{$p->id}}" courierid="{{$p->id}}">ACTIVATE</button>
                                                    @endif
                                                     
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
        $('.view').click(function(){
        var data = JSON.parse($(this).attr('data'));
        $('.name').html(data.name);
       $('.email').html(data.email);
       $('.categorise').html('Courier');
       $('.profile').html(data.name+'\'s Profile');
       $('.image').attr('src','{{asset('')}}'+data.image);
    }); 
    </script>

    <script type="text/javascript">
    $(document).on('click','.deactivate',function(e){
    var courierid=$(this).attr('courierid');
    var _token = "{{csrf_token()}}";
    if (confirm('Are you sure you want to Deactive This Shop?')) {
        $.post("{{url('admin/courier/deactivate')}}",{courierid:courierid,_token:_token},function(result){
        $now=JSON.parse(result);
        $('.deactiveCouriers').html($now.deactiveCouriers);
        $('.allcouriers').html($now.allcouriers);
        $('.activeCouriers').html($now.activeCouriers);
        $('#deactivate'+courierid).detach();
        $('.tr'+courierid).append('<button class="btn btn-success btn-xs activate" id="activate'+courierid+'" courierid="'+courierid+'">ACTIVATE</button>');
        notify($now.status,$now.error);

        }).fail(function(){
            alert('error sending request');
        });
    }
   });  
    $(document).on('click','.activate',function(e){
    var courierid=$(this).attr('courierid');
    var _token = "{{csrf_token()}}";
    if (confirm('Are you sure you want to Deactive This Shop?')) {
        $.post("{{url('admin/courier/activate')}}",{courierid:courierid,_token:_token},function(result){
        $now=JSON.parse(result);
        $('.deactiveCouriers').html($now.deactiveCouriers);
        $('.allcouriers').html($now.allcouriers);
        $('.activeCouriers').html($now.activeCouriers);
        $('#activate'+courierid).detach();
        $('.tr'+courierid).append('<button class="btn btn-danger btn-xs deactivate" id="deactivate'+courierid+'" courierid="'+courierid+'">DEACTIVATE</button>');
        notify($now.status,$now.error);

        }).fail(function(){
            alert('error sending request');
        });
    }
   });  
</script>

@endsection