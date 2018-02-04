@extends('admin.layout.adminLayout')
@section('title')
    <title>Deactivated Shops</title>
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
                            <h2>Deactivated Shop(s) <button class="btn border-blue-alt btn-link font-blue-alt ra-100 btn-border" data-toggle="modal" data-target="#myModal"><i class="glyph-icon icon-plus"> </i>Add Shop Category</button> <button class="btn border-orange btn-alt btn-link font-orange ra-100 btn-border" data-toggle="modal" data-target="#monthlyPlan"><i class="glyph-icon icon-plus"> </i>Add Monthly Plan</button></h2>
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
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>

                                        <tbody>
                                            
                                            @foreach(\App\Shop::onlyTrashed()->get() as $p)
                                            <tr class="tr{{$p->id}}">
                                                <td>{{$p->name}}</td>
                                                <td>{{$p->shopcategory->name}}</td>
                                                <td>Deactivated</td>
                                                <td class="tr{{$p->id}}">
                                                    <button class="btn btn-warning btn-xs view" data-toggle="modal" data-target="#myProfile" data="{{$p}}">VIEW</button>
                                                    <button class="btn btn-success btn-xs activate" id="activate{{$p->id}}" shopid="{{$p->id}}">ACTIVATE</button>
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
        $('.name').html(data.creator_firstname+' '+data.creator_surname);
       $('.email').html(data.creator_email);
       $('.phone').html(data.phone);
       $('.profile').html(data.name);
    }); 
    </script>

    <script type="text/javascript">
    $(document).on('click','.activate',function(e){
    var shopid=$(this).attr('shopid');
    var _token = "{{csrf_token()}}";
    if (confirm('Are you sure you want to Deactive This Shop?')) {
        $.post("{{url('admin/shop/activate')}}",{shopid:shopid,_token:_token},function(result){
        $now=JSON.parse(result);
        console.log($now);
        $('.deactivatedshop').html($now.deactiveCount);
        $('.allshops').html($now.allshops);
        $('.activatedshop').html($now.activeCount);
        $('.tr'+shopid).remove();
        notify($now.status,$now.error);

        }).fail(function(){
            alert('error sending request');
        });
    }
   });  
    
</script>

@endsection