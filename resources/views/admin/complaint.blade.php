@extends('admin.layout.adminLayout')
@section('title')
    <title> Complaint || Admin</title>
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
                        
                        
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="panel">
                            <div class="panel-body">
                                <div class="example-box-wrapper">
                                    <form class="form-horizontal form" action="{{url('admin/complaint/custom-date')}}" method="post">
                                        {{csrf_field()}}
                                            <div class="form-group">
                                        
                            
                            <div class="col-sm-8">
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" name="date" id="daterangepicker-example" class="form-control" value="01/18/2018 - 01/23/2018">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                            <a href="{{url('admin/complaints')}}" class="btn btn-warning">View All</a>
                        </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                            </div>
                            <div class="col-md-6">
                                <div id="" style="margin-top: 30px;">
                            <h2>Courier Monthly Plans <button class="btn border-blue-alt btn-link font-blue-alt ra-100 btn-border" data-toggle="modal" data-target="#myModal"><i class="glyph-icon icon-plus"> </i>Add Shop Category</button></h2>
                        </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-body">
                                <div class="example-box-wrapper">
                                    <div class="table-responsive">
                                        <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Customer</th>
                                                <th>Complaint</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th>Customer</th>
                                                <th>Complaint</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        

                                        <tbody>
                                             
                                            @if($data->count()>0)

                                            @foreach($data as $p)
                                            <tr>
                                                <td>{{$p->user->name}}</td>
                                                <td>{{$p->subject}}</td>
                                                <td>No action</td>
                                               
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
<script type="text/javascript" src="{{asset('couriers/assets/widgets/daterangepicker/moment.js')}}"></script>
<script type="text/javascript" src="{{asset('couriers/assets/widgets/daterangepicker/daterangepicker.js')}}"></script>

<script type="text/javascript">
$(function() {
  
    $('#daterangepicker-example').daterangepicker();

});
</script>
@endsection
