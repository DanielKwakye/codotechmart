@extends('admin.layout.adminLayout')
@section('title')
    <title>Options</title>
@endsection
@section('content')
     <script type="text/javascript" src="../../assets/widgets/parsley/parsley.js"></script>

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
                        <h2>Personal Options</h2>
                    </div>

                    <div class="content-box pad25A">
                            <div class="row">

                                <div class="col-sm-10">
                                    <h5 class="header">Color Options & Layout</h5><br>
                                    
                                    <div class="col-md-6">
                                        
                                        <h5 class="header">
                                            Header Style
                                            <a class="set-adminheader-style" data-header-bg="bg-gradient-9" title="Remove all styles" href="javascript:void(0);">Default</a>
                                        </h5>
                                        <div class="theme-color-wrapper clearfix header">
                                            <h5>Solids</h5>
                                            <a class="tooltip-button set-adminheader-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);" value="bg-primary font-inverse" id="header">Primary</a>
                                            <a class="tooltip-button set-adminheader-style bg-green" id="header" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);" value="bg-green font-inverse" id="header">Green</a>
                                            <a class="tooltip-button set-adminheader-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);" value="bg-red font-inverse" id="header">Red</a>
                                            <a class="tooltip-button set-adminheader-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);" value="bg-blue font-inverse" id="header">Blue</a>
                                            <a class="tooltip-button set-adminheader-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);" value="bg-warning font-inverse" id="header">Warning</a>
                                            <a class="tooltip-button set-adminheader-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);" value="bg-purple font-inverse" id="header">Purple</a>
                                            <a class="tooltip-button set-adminheader-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);" value="bg-black font-inverse" id="header">Black</a>

                                            <div class="clear"></div>

                                            <h5 class="mrg15T">Gradients</h5>
                                            <a class="tooltip-button set-adminheader-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" id="header" value="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                                            <a class="tooltip-button set-adminheader-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);" id="header" value="bg-gradient-2 font-inverse">Gradient 2</a>
                                            <a class="tooltip-button set-adminheader-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);" id="header" value="bg-gradient-3 font-inverse">Gradient 3</a>
                                            <a class="tooltip-button set-adminheader-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);" id="header" value="bg-gradient-4 font-inverse">Gradient 4</a>
                                            <a class="tooltip-button set-adminheader-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);" id="header" value="bg-gradient-5 font-inverse">Gradient 5</a>
                                            <a class="tooltip-button set-adminheader-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);" id="header" value="bg-gradient-6 font-inverse">Gradient 6</a>
                                            <a class="tooltip-button set-adminheader-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);" id="header" value="bg-gradient-7 font-inverse">Gradient 7</a>
                                            <a class="tooltip-button set-adminheader-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);" id="header" value="bg-gradient-8 font-inverse">Gradient 8</a>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <h5 class="header">
                                            Sidebar Style
                                            <a class="set-sidebar-style sidebardefault" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Default</a>
                                        </h5>
                                        <div class="theme-color-wrapper clearfix sidebar">
                                            <h5>Solids</h5>
                                            <a class="tooltip-button set-sidebar-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);" id="sidebar" value="bg-primary font-inverse">Primary</a>
                                            <a class="tooltip-button set-sidebar-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);" id="sidebar" value="bg-green font-inverse">Green</a>
                                            <a class="tooltip-button set-sidebar-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);" id="sidebar" value="bg-red font-inverse">Red</a>
                                            <a class="tooltip-button set-sidebar-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);" id="sidebar" value="bg-blue font-inverse">Blue</a>
                                            <a class="tooltip-button set-sidebar-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);" id="sidebar" value="bg-warning font-inverse">Warning</a>
                                            <a class="tooltip-button set-sidebar-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);" id="sidebar" value="bg-purple font-inverse">Purple</a>
                                            <a class="tooltip-button set-sidebar-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);" id="sidebar" value="bg-black font-inverse">Black</a>

                                            <div class="clear"></div>

                                            <h5 class="mrg15T">Gradients</h5>
                                            <a class="tooltip-button set-sidebar-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);" id="sidebar" value="bg-gradient-1 font-inverse">Gradient 1</a>
                                            <a class="tooltip-button set-sidebar-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);" id="sidebar" value="bg-gradient-2 font-inverse">Gradient 2</a>
                                            <a class="tooltip-button set-sidebar-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);" id="sidebar" value="bg-gradient-3 font-inverse">Gradient 3</a>
                                            <a class="tooltip-button set-sidebar-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);" id="sidebar" value="bg-gradient-4 font-inverse">Gradient 4</a>
                                            <a class="tooltip-button set-sidebar-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);" id="sidebar" value="bg-gradient-5 font-inverse">Gradient 5</a>
                                            <a class="tooltip-button set-sidebar-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);" id="sidebar" value="bg-gradient-6 font-inverse">Gradient 6</a>
                                            <a class="tooltip-button set-sidebar-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);" id="sidebar" value="bg-gradient-7 font-inverse">Gradient 7</a>
                                            <a class="tooltip-button set-sidebar-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);" id="sidebar" value="bg-gradient-8 font-inverse">Gradient 8</a><br><br>

                                        </div>
                                    </div>
                                    <button class="btn btn-success text-center save hidden">Save</button>
                                </div>
                                
                            </div> 
                    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            var headervalue,sidebarvalue;
            $('.header a').click(function(){
             headervalue=$(this).attr('value');
             $('.save').removeClass('hidden');
        });
            $('.sidebar a').click(function(){
            sidebarvalue=$(this).attr('value');
            $('.save').removeClass('hidden');
        });
            $('.save').click(function(){
                var id={{Auth::guard('admin')->user()->id}};
                var _token = "{{csrf_token()}}";
                $.post("{{url('admin/changeoptions')}}",{id:id,header:headervalue,sidebar:sidebarvalue,_token:_token},function(result){
                $now=JSON.parse(result);
                $('#page-header').attr('class',$now.header);
                $('#page-sidebar').attr('class',$now.sidebar);
                notify($now.status, $now.error);
                }).fail(function(){
                    alert('error sending request');
                });
            });
            $('.sidebardefault').click(function(){
                sidebarvalue=null;
            });
        });

    </script>
@endsection