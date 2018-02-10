@extends('admin.layout.adminLayout')
@section('title')
<title>Admin || Dashboard</title>
@endsection
@section('content')
<!-- Chart.js -->



<div id="page-title">
    <h2>Overwiew</h2>
    <p>The most complete user interface framework that can be used to create stunning admin dashboards and presentation websites.</p>

</div>

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
    <div class="col-md-2">
        <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-primary">
            <span class="bs-badge badge-absolute">{{count(\App\Shop::withTrashed()->get())}}</span>
            <div class="tile-header">
                Shops
            </div>
            <div class="tile-content-wrapper">
                <i class="glyph-icon icon-dashboard"></i>
            </div>
        </a>
    </div>
    <div class="col-md-2">
        <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-black">
            <span class="bs-badge badge-absolute">{{count(\App\Courier::withTrashed()->get())}}</span>
            <div class="tile-header">
                Couriers
            </div>
            <div class="tile-content-wrapper">
                <i class="glyph-icon icon-cogs"></i>
            </div>
        </a>
    </div>
    <div class="col-md-2">
        <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-danger">
            <span class="bs-badge badge-absolute">{{\App\Complaints::count()}}</span>
            <div class="tile-header">
                Complaints
            </div>
            <div class="tile-content-wrapper">
                <i class="glyph-icon icon-file-photo-o"></i>
            </div>
        </a>
    </div>
    <div class="col-md-2">
        <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-success">
            <span class="bs-badge badge-absolute">{{\App\ShopCategory::count()}}</span>
            <div class="tile-header">
                Shop Categories
            </div>
            <div class="tile-content-wrapper">
                <i class="glyph-icon icon-desktop"></i>
            </div>
        </a>
    </div>
    <div class="col-md-2">
        <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-info">
            <span class="bs-badge badge-absolute">2</span>
            <div class="tile-header">
                Subscriptions
            </div>
            <div class="tile-content-wrapper">
                <i class="glyph-icon icon-download"></i>
            </div>
        </a>
    </div>
    <div class="col-md-2">
        <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-warning">
            <span class="bs-badge badge-absolute">1</span>
            <div class="tile-header">
                TOTAL SMS
            </div>
            <div class="tile-content-wrapper">
                <i class="glyph-icon icon-code-fork"></i>
            </div>
        </a>
    </div>
</div>

<br><br>
<div id="page-title">
    <h2>Complaints</h2>

</div>

<div class="row">
    <div class="col-md-12">
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

                                @if(\App\Complaints::count()>0)

                                @foreach(\App\Complaints::all() as $p)
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
    </div>
</div>
@endsection
@section('script')

<script type="text/javascript" src="{{asset('couriers/assets/js-core/d3.js')}}"></script>
<script type="text/javascript" src="{{asset('couriers/assets/widgets/charts/xcharts/xcharts.js')}}"></script>
@endsection