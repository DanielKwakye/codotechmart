@extends('layouts.masterLayout')
@section('title')
    <title>Requested Shops</title>
@endsection
@section('content')
<style type="text/css">
    .gap-right {
          margin-right: 10px;
        }
</style>
    
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
                            <h2>My Shop(s)</h2>
                        </div>
                        <div class="panel">
                            <div class="panel-body">
                                <div class="example-box-wrapper">
                                    <div class="table-responsive">
                                        <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ShopName</th>
                                                <th>Category</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>

                                        <tbody>
                                            
                                            @foreach(\App\shopRequest::where('courier_id',Auth::guard('courier')->user()->id)->where('status',1)->get() as $p)
                                            <?php $branch=\App\Branch::where('shop_id', $p->shop_id)->where('type', 'main')->first(); ?>
                                            
                                            <tr class="tr{{$p->shop_id}}">
                                                <td><img class="pull-left img-responsive img-circle gap-right" style="width: 35px; height: 30px;" src="{{$p->shop->logo}}"> <a href="{{url('shop/'.$branch->id.'/detail')}}" class="text-info" target="_blank">{{$p->shop->name}}</a></td>
                                                <td class="groupId">{{$p->shop->shopcategory->name}}</td>
                                                 <td><a href="mailto:{{$p->shop->creator_email}}">{{$p->shop->creator_email}}</a></td>
                                                <td class="cancel{{$p->shop_id}}">
                                                <div class="btn-group" id='cancelrequest{{$p->shop_id}}'>
                                                        <button type="button" class="btn btn-info btn-xs  popover-button-default" disabled="">Request Sent</button>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-info btn-xs  popover-button-default" data-placement="bottom" data-content="<div class='text-center'><a href='#' class='cancelRequest' shopid='{{$p->shop_id}}' userid='{{Auth::guard('courier')->user()->id}}' >Cancel Request</a></div>">....
                                                                <span class="caret"></span>
                                                            </button>
                                                            
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
@endsection
@section('script')
    <script type="text/javascript">
    $(document).on('click','.cancelRequest',function(e){
    var userid=$(this).attr('userid');
    var shopid=$(this).attr('shopid');
    var _token = "{{csrf_token()}}";
    $.post("{{url('courier/cancelRequest')}}",{shopid:shopid,userid:userid,_token:_token},function(result){
               $now=JSON.parse(result);
        notify($now.status,$now.error);
        }).done(function(){
            $('.tr'+shopid).remove();
             $('.popover').popover('hide');
        }).fail(function(){
            alert('error sending request');
        });
   });  
</script>

@endsection