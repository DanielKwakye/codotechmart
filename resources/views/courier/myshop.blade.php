@extends('layouts.masterLayout')
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
                            <h2>My Shop(s)</h2>
                                 @include('courier.inc.dashboard.sideoptions')
                        </div>
                        <div class="panel">
                            <div class="panel-body">
                                <div class="example-box-wrapper">
                                    <div class="table-responsive">
                                        <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ShopName</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Start date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Start date</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>

                                        <tbody>
                                            
                                            @if(\App\shopRequest::all()!==null)
                                                @foreach(\App\shopRequest::where('courier_id',Auth::guard('courier')->user()->id)->where('status',2)->get() as $p)
                                                <?php $branch=\App\Branch::where('shop_id', $p->shop_id)->where('type', 'main')->first(); ?>
                                            
                                            <tr>
                                                <td><img class="pull-left img-responsive img-circle gap-right" style="width: 35px; height: 30px;" src="{{$p->shop->logo}}"> <a href="{{url('shop/'.$branch->id.'/detail')}}" class="text-info" target="_blank">{{$p->shop->name}}</a></td>
                                                <td>System Architect</td>
                                                <td class="groupId">{{$p->id}}</td>
                                                <td>{{$p->shopRequest['status']}}</td>
                                                <td>
                                                    <button type="submit" class="btn btn-xs btn-primary" disabled="">Working With Shop</button>
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