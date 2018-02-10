<!DOCTYPE html> 
<html lang="en">

<head>
    @include('courier.inc.header')
    @yield('title')


</head>

<body>
    <style type="text/css">
    .hiding{
        display: none;
    }
    
    .input-group:not(:first-of-type) { margin-top: 10px; }
    .glyphicon { font-size: 12px; }
    
</style>
<div id="app">
<div id="sb-site">
    @include('admin.layout.inc.profileModal')
     @include('admin.layout.inc.editCategoryModal')
    

    <div id="page-wrapper">
        @include('admin.layout.adminNavbar')
        
        <div id="page-content-wrapper">
            <div id="page-content">

                <div class="container">
                    @if(session()->has('success'))
                        <script type="text/javascript">
                            
                            $(document).ready(function(){
                                notify('{{session()->get('success')}}',false);
                            });
                        </script>
                        @elseif(session()->has('error'))
                        <script type="text/javascript">
                            
                            $(document).ready(function(){
                                notify('{{session()->get('error')}}',true);
                            });
                        </script>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @yield('content')
                </div>

            </div>

        </div>

    </div>
</div>
</div>
@include('admin.layout.inc.editMonthlyPlan')
@include('courier.inc.footer')
@include('admin.layout.inc.addCategoryModal')

</div>
</body>

</html>