@section('styles-above')
 <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/extensions/sweetalert.css')}}">
@endsection
@section('scripts-below')
<script src="{{asset('admin-assets/vendors/js/tables/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('admin-assets/vendors/js/extensions/sweetalert.min.js')}}" type="text/javascript"></script>
@yield('tableinit')
@endsection