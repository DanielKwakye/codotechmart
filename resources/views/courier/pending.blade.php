@extends('layouts.masterLayout')
@section('title')
<title>Pending Deliveries</title>
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

                                $('.dataTables_length label').before('<div class="pull-left" style="margin-right:40px;"><select name="datatable-tabletools_length" aria-controls="datatable-tabletools" class="form-control"><option value="10">Bulk Actions</option><option value="25">Take Order</option></select> <button class="btn">Apply</button></div>');

                                $('.dataTables_filter input').attr("placeholder", "Search...");

                            } );

                            /* Datatables reorder */

                            // $(document).ready(function() {
                            //     $('#datatable-reorder').DataTable( {
                            //         dom: 'Rlfrtip'
                            //     });

                            //     $('#datatable-reorder_length').hide();
                            //     $('#datatable-reorder_filter').hide();

                            // });

                            $(document).ready(function() {
                                $('.dataTables_filter input').attr("placeholder", "Search...");
                            });


                        </script>
                        <div id="page-title">
                            <h2>All Pending Orders</h2>
                                 
                        </div>
                        <div class="panel">
                            <div class="panel-body">
                                <div class="example-box-wrapper">
                                    <div class="table-responsive">
                                        <table id="datatable-tabletools" class="table table-striped table-bordered" width="100%">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" id="selectAll" /> Name</th>
                                                <th>Shop Name</th>
                                                <th>Status</th>
                                                <th>Delivery date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Shop Name</th>
                                                <th>Status</th>
                                                <th>SDeliverytart date</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>

                                        <tbody>
                                            
                                            @if(\App\Order::all()!==null)
                                            @foreach(\App\Order::where('courier_id',Auth::guard('courier')->user()->id)->whereIn('status',[1,2])->get() as $p)
                                            <tr class="tr{{$p->id}}">
                                                <td><input type="checkbox" /> {{$p->name}}</td>
                                                <td>{{$p->shop->shopname}}</td>
                                                <td>{{$p->status}}</td>
                                                <td>2011/04/25</td>
                                                <td id="order{{$p->id}}">
                                                    <button class="btn btn-xs btn-success ">View</button>
                                                    @if($p->status==2)
                                                    <div class="btn-group" id='cancelrequest{{$p->id}}'>
                                                        <button type="button" class="btn btn-info btn-xs  popover-button-default" disabled="">Order Taken</button>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-info btn-xs  popover-button-default" data-placement="bottom" data-content="<div class='text-center'><a href='javascript:void(0);' class='canceldelivery' cartid='{{$p->id}}'>Cancel with message</a></div>">....
                                                                <span class="caret"></span>
                                                            </button>
                                                            
                                                        </div>
                                                    </div>
                                                    @elseif($p->status==1)
                                                     <button class="btn btn-xs takeorder btn-danger" value="{{$p->id}}" id="takeorder{{$p->id}}" cartid="{{$p->id}}">Take Order</button>
                                                     @endif
                                                 </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection
@section('script')

    <script type="text/javascript">
           $(document).ready(function(){
            $('#selectAll').click(function (e) {
                $(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
            });
           });
       </script>

       <script type="text/javascript">

            $(document).on('click mouseenter','.popover-button-default',function(){
              
                $('.popover-button-default').popover({
                container: 'body',
                 html: true,
                  animation: true
              });
            });
        </script>


       <script type="text/javascript">
            $(document).on('click','.canceldelivery',function(){
                var cart_id=$(this).attr('cartid');

            // ask confirmation
            if (confirm('Are you sure you want to Cancel This Delivery?')) {
                // delete record only once user has confirmed
                var url="{{url('canceldelivery')}}"+'/'+cart_id;
                $.get( url, function(result) {
                    var data=JSON.parse(result)
                    $('.tr'+cart_id).remove();
                    $('.popover').popover('hide');
                    $('.orders').html(data.count);
                    $('.totalorders').html(data.totalcount);
                    notify(data.status,data.error);
                    }).fail(function() {
                        alert( "error while cancelling.." );
                    });
            }
            });
           
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.takeorder').click(function () {
            // var an = $(this), 
            //     tr = an.closest('tr');

            // find the ID stored in the .groupId cell
            var id = $(this).attr('value');
            var cart_id=$(this).attr('cartid');

            // ask confirmation
            if (confirm('Are you sure you want to Deliver This Order?')) {
                // delete record only once user has confirmed
                var url="{{url('neworders')}}"+'/'+id;
                $.get( url, function(result) {
                    var data=JSON.parse(result)
                    // tr.remove();
                    notify(data.status,data.error);
                    }).done(function(){
            $('#takeorder'+cart_id).detach();
            $('#order'+cart_id).append('<div class="btn-group"><button type="button" class="btn btn-info btn-xs  popover-button-default" disabled="">Order Taken</button><div class="btn-group"><button type="button" class="btn btn-info btn-xs  popover-button-default" data-placement="bottom" data-content="<div class=\'text-center\'><a href=\'javascript:void(0);\' class=\'canceldelivery\' cartid=\''+cart_id+'\'>Cancel with message</a></div>">....<span class="caret"></span></button></div></div>');

        }).fail(function() {
                        alert( "error while processing.." );
                    });
         
            }
            });
          });
    </script>
@endsection