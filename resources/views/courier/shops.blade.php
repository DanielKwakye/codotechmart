@extends('layouts.masterLayout')
@section('title')
    <title>All Shops</title>
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
                            <h2>Available Shops</h2>
                        </div>
                        <div class="panel">
                            <div class="panel-body">
                                <div class="example-box-wrapper">
                                    <div class="table-responsive">
                                        <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>shop id</th>
                                                <th>ShopName</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Start date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th>shop id</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Start date</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>

                                        <tbody>
                            
                            @php
                               $shops = Auth::guard('courier')->user()->shops()->pluck('shops.id');
                                $unrequested_shops = \App\Shops::whereNotIn('id',$shops)->get();
                                $requested_shops=\App\Shops::whereIn('id',$shops)->get();
                               

                                
                            @endphp
                                            
                            @if(\App\Shops::all()!==null)
                                @foreach($unrequested_shops as $p)
                            <tr class="tr{{$p->id}}">
                                <td>{{$p->id}}</td>
                                <td>{{$p->shopname}}</td>
                                <td>System Architect</td>
                                <td class="groupId">{{$p->id}}</td>
                                <td>{{$p->shopRequest['status']}}</td>
                                <td class="groupId">
                                <button class="btn btn-xs btn-danger requestbutton" id="requestbutton{{$p->id}}" shopid="{{$p->id}}" userid="{{Auth::guard('courier')->user()->id}}">Request</button>
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

$(document).on('click mouseenter','.popover-button-default',function(){
  
    $('.popover-button-default').popover({
    container: 'body',
     html: true,
      animation: true
  });
});
</script>

<script type="text/javascript">
     $(document).on('click','.requestbutton',function(e){
         e.preventDefault();
    var userid=$(this).attr('userid');
    var shopid=$(this).attr('shopid');
    var _token = "{{csrf_token()}}";
    $.post("{{url('courier/request')}}",{shopid:shopid,userid:userid,_token:_token},function(result){
               $now=JSON.parse(result);
        notify($now.status,$now.error);
        }).done(function(){
             $('.tr'+shopid).remove();

        }).fail(function(){
            alert('error sending request');
        });
   });  


</script>


@endsection
