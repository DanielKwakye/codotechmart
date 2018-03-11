@extends('layouts.masterLayout')
@section('title')
    <title>All Shops</title>
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
                            <h2>Available Shops</h2>
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
                            
                            @php
                               $shops = Auth::guard('courier')->user()->shops()->pluck('shops.id');
                                $unrequested_shops = \App\Shop::whereNotIn('id',$shops)->get();
                                $requested_shops=\App\Shop::whereIn('id',$shops)->get();
                            @endphp
                                            
                            @if(\App\Shop::all()!==null)
                                @foreach($unrequested_shops as $p)

                                <?php $branch=\App\Branch::where('shop_id', $p->id)->where('type', 'main')->first(); ?>
                            <tr class="tr{{$p->id}}">
                                <td><img class="pull-left img-responsive img-circle gap-right" style="width: 35px; height: 30px;" src="{{$p->logo}}"> <a href="{{url('shop/'.$branch->id.'/detail')}}" class="text-info" target="_blank">{{$p->name}}</a></td>
                                <td>{{$p->shopcategory->name}}</td>
                                <td><a href="mailto:{{$p->creator_email}}">{{$p->creator_email}}</a></td>
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
@if(Auth::guard('courier')->user()->verified_at == null)
    <script type="text/javascript">
        $(document).on('click','.requestbutton',function(e){
            e.preventDefault();
        notify('Verify Email Before You Can Add A Shop', true);
        });
    </script>

@endif

@if(Auth::guard('courier')->user()->verified_at !==null)
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

@endif


@endsection
