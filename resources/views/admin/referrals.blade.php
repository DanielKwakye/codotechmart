@extends('admin.layout.adminLayout')
@section('title')
    <title>Referrals || Admin</title>
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
                            <h2>Referrals <button class="btn border-blue-alt btn-link font-blue-alt ra-100 btn-border" data-toggle="modal" data-target="#myModal"><i class="glyph-icon icon-plus"> </i>Add Shop Category</button></h2>
                        </div>
                        <div class="panel">
                            <div class="panel-body">
                                <div class="example-box-wrapper">
                                    <div class="table-responsive">
                                        <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Amount Earned</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Amount Earned</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>

                                        <tbody>
                                            
                                            @if(\App\Referral::all()!==null)
                                                @foreach(\App\Referral::all() as $p)
                                                <tr class="tr{{$p->id}}">
                                                    <td>{{$p->user->name}}</td>
                                                    <td>{{$p->amount_earned }}</td>
                                                    <td>
                                                        <button class="btn btn-danger pay btn-xs" userid="{{$p->id}}">PAY</button>
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
    $(document).on('click','.pay',function(e){
    var userid=$(this).attr('userid');
    var _token = "{{csrf_token()}}";
    if (confirm('Are you sure you want to Pay This User?')) {
        $.post("{{url('admin/referral_payment')}}",{userid:userid,_token:_token},function(result){
        $now=JSON.parse(result);
        $('.tr'+userid).remove();
        notify($now.status,$now.error);

        }).fail(function(){
            alert('error sending request');
        });
    }
   });  
    
</script>

@endsection