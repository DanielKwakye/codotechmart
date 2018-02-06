<!DOCTYPE html> 
<html lang="en">

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/advanced-datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 10:37:22 GMT -->
<head>
     @include('inc.header')
    <title> Users</title>

</head>


<body>
    <div id="sb-site">
        @include('inc.dashboard.rightnavbar')

        <div id="page-wrapper">
            @include('inc.dashboard.navbar')

            <div id="page-content-wrapper">
                <div id="page-content">

                    <div class="container">


                        <!-- Data tables -->

                        <!--<link rel="stylesheet" type="text/css" href="assets/widgets/datatable/datatable.css">-->
                        <script type="text/javascript" src="assets/widgets/datatable/datatable.js"></script>
                        <script type="text/javascript" src="assets/widgets/datatable/datatable-bootstrap.js"></script>
                        <script type="text/javascript" src="assets/widgets/datatable/datatable-tabletools.js"></script>
                        <script type="text/javascript" src="assets/widgets/datatable/datatable-reorder.js"></script>

                        <script type="text/javascript">

                            /* Datatables export */

                            $(document).ready(function() {
                                var table = $('#datatable-tabletools').DataTable();
                                var tt = new $.fn.dataTable.TableTools( table );

                                $( tt.fnContainer() ).insertBefore('#datatable-tabletools_wrapper div.dataTables_filter');

                                $('.DTTT_container').addClass('btn-group');
                                $('.DTTT_container a').addClass('btn btn-default btn-md');

                                $('.dataTables_length label').before('<div class="pull-left" style="margin-right:40px;"><select name="datatable-tabletools_length" aria-controls="datatable-tabletools" class="form-control"><option value="10">Bulk Actions</option><option value="25">Delete</option></select> <button class="btn">Apply</button></div>');

                                $('.dataTables_length label').before('<div class="pull-left" style="margin-right:40px;"><select name="datatable-tabletools_length" aria-controls="datatable-tabletools" class="form-control"><option value="10">Change Role to</option><option value="25">Administrator</option></select> <button class="btn">Apply</button></div>');
                                $('.dataTables_length label').css('display','none');


                                

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
                        <script type="text/javascript" src="assets/widgets/jgrowl-notifications/jgrowl.js"></script>
                        <script type="text/javascript" src="assets/widgets/jgrowl-notifications/jgrowl-demo.js"></script>
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
                            <h2>USERS <a class="btn btn-border btn-alt border-blue btn-link font-blue" href="#" title=""><span>Add New</span></a></h2> 
                                 @include('inc.dashboard.sideoptions')
                        </div>
                        <div class="panel">
                            <div class="panel-body">
                                <div class="example-box-wrapper">
                                    <div class="table-responsive">
                                        <table id="datatable-tabletools" class="table table-striped " cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Deliveries</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th>Username</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Deliveries</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>

                                        <tbody>
                                            
                                            @foreach(\App\Product::all() as $p)
                                            <tr>
                                                <td>{{$p->name}}</td>
                                                <td>System Architect</td>
                                                <td class="groupId">{{$p->id}}</td>
                                                <td>Administrator</td>
                                                <td>2</td>
                                                <td><button class="delete btn btn-danger btn-xs" value="{{$p->id}}">delete</button></td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>



                </div>
            </div>
        </div>


        @include('inc.footer')
        @section('script')

        @endsection

    </div>
</body>

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/advanced-datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 10:37:23 GMT -->
</html>