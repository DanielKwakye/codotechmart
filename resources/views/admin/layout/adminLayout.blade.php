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
    

    <div id="page-wrapper">
        @include('admin.layout.adminNavbar')

        <div id="page-content-wrapper">
            <div id="page-content">

                <div class="container">
                    @yield('content')
                </div>

            </div>

        </div>

    </div>
</div>
</div>
@include('courier.inc.footer')

</div>
</body>

</html>