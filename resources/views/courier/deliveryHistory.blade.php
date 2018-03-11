@extends('layouts.masterLayout')
@section('title')
    <title>History</title>
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
                        <script type="text/javascript" src="{{('couriers/assets/widgets/jgrowl-notifications/jgrowl.js')}}"></script>
                        <script type="text/javascript" src="{{asset('couriers/assets/widgets/jgrowl-notifications/jgrowl-demo.js')}}"></script>
                        <script type="text/javascript">
                            function notify(text){
                                $.jGrowl(text, {
                                      sticky: false,
                                      position: 'top-right',
                                      theme: 'bg-blue-alt'
                                  });
                            }
                        </script>
                        <div id="page-title">
                            <h2>Delivery History</h2>
                                 @include('courier.inc.dashboard.sideoptions')
                        </div>
                        <div class="panel">
                            <div class="panel-body">
                                <div class="example-box-wrapper">
                                    <div class="table-responsive">
                                        <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Item</th>
                                                <th>Shop Name</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Delivery date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th>Item</th>
                                                <th>Shop Name</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Delivery Date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                        {{-- delivery history
                                            if status=3 - delivered, if status=2 - ordertaken delivery order=1 - processing --}}
                                        <tbody>
                                            
                                            @if(\App\Order::all()!==null)
                                                @foreach(\App\Order::where('status',3)->where('user_id',Auth::guard('courier')->user()->id)->get() as $p)
                                            <tr>
                                                <td>{{$p->name}}</td>
                                                <td>{{$p->shop->shopname}}</td>
                                                <td class="groupId">{{$p->id}}</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td><button class="btn btn-xs btn-success" value="{{$p->id}}">View</button> <button disabled="" class="btn-xs btn btn-warning" value="{{$p->id}}">Delivered</button></td>
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