<div id="page-header" class="{{Auth::guard('admin')->user()->option->header}}">
    <div id="mobile-navigation">
        <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
        <a href="index.html" class="logo-content-small" title="MonarchUI"></a>
    </div>
    <div id="header-logo" class="logo-bg">
        <a href="{{url('/')}}" style="background: url('{{asset('couriers/assets/image-resources/logo-admin.png')}}') left 50% no-repeat;" class="logo-content-big" title="admin">
            Monarch <i>UI</i>
            <span>The perfect solution for user interfaces</span>
        </a>
        <a href="{{url('/')}}" style="background: url({{asset(Auth::guard('admin')->user()->image)}}); border-radius: 50%; background-size: 100% 100%" class="logo-content-small" title="MonarchUI">
            Monarch <i>UI</i>
            <span>The perfect solution for user interfaces</span>
        </a>
        <a id="close-sidebar" href="#" title="Close sidebar">
            <i class="glyph-icon icon-angle-left"></i>
        </a>
    </div>
    <div id="header-nav-left">
        <div class="user-account-btn dropdown">
            <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                <img width="28" class="profileimages" src="{{asset(Auth::guard('admin')->user()->image)}}" style="width: 28px; height: 28px;">
                <ba class="username1">{{Auth::guard('admin')->user()->name}} </ba>
                <i class="glyph-icon icon-angle-down"></i>
            </a>
            <div class="dropdown-menu float-left">
                <div class="box-sm">
                    <div class="login-box clearfix">
                        <div class="user-img">
                            <img class="profileimages2" src="{{asset(Auth::guard('admin')->user()->image)}}" alt="">
                        </div>
                        <div class="user-info">
                            <span>
                                {{Auth::guard('admin')->user()->name}}
                                <i>admin</i>
                            </span>
                            <a href="{{url('admin/profile')}}" title="Edit profile">Edit profile</a>
                        </div>
                    </div>
            
                    <div class="pad5A button-pane button-pane-alt text-center">
                        <a href="{{ url('admin/logout') }}" class="btn display-block font-normal btn-danger">
                            <i class="glyph-icon icon-power-off"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #header-nav-left -->

    <div id="header-nav-right">
        <a href="#" class="hdr-btn" id="fullscreen-btn" title="Fullscreen">
            <i class="glyph-icon icon-arrows-alt"></i>
        </a>
        <a href="#" class="hdr-btn sb-toggle-left" id="chatbox-btn" title="Chat sidebar">
            <i class="glyph-icon icon-linecons-paper-plane"></i>
        </a>
        <div class="dropdown" id="notifications-btn">
            <a data-toggle="dropdown" href="#" title="">
                <span class="small-badge bg-yellow"></span>

                <i class="glyph-icon icon-linecons-megaphone"></i>
            </a>
            <div class="dropdown-menu box-md float-right">

                <div class="popover-title display-block clearfix pad10A">
                    Notifications
                    <a class="text-transform-cap font-primary font-normal btn-link float-right" href="#" title="View more options">
                        More options...
                    </a>
                </div>
                <div class="scrollable-content scrollable-slim-box">
                    <ul class="no-border notifications-box">
                        {{-- <li>
                            <span class="bg-danger icon-notification glyph-icon icon-bullhorn"></span>
                            <span class="notification-text">This is an error notification</span>
                            <div class="notification-time">
                                a few seconds ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li> --}}
                        
                        {{-- notification --}}
                           
                                {{-- <notification v-bind:notifications="notifications"></notification> --}}
                                {{-- <example-component></example-component> --}}
                           
                    </ul>
                </div>
                <div class="pad10A button-pane button-pane-alt text-center">
                    <a href="#" class="btn btn-primary" title="View all notifications">
                        View all notifications
                    </a>
                </div>
            </div>
        </div>
        
        <a class="header-btn" id="logout-btn" href="lockscreen-3.html" title="Lockscreen page example">
            <i class="glyph-icon icon-linecons-lock"></i>
        </a>

    </div><!-- #header-nav-right -->

</div>
    @if(Auth::guard('admin')->user()->option->sidebar!==null)
    <style type="text/css">
        #sidebar-menu li .sidebar-submenu ul li a.sfActive {
    background: #03182d66;
}
    </style>
    @endif
        <div id="page-sidebar" class="{{Auth::guard('admin')->user()->option->sidebar}}">
    <div class="scroll-sidebar">
        

    <ul id="sidebar-menu">
    <li class="header"><span>Dashboard</span></li>
       <li>
        <a href="{{url('admin')}}" title="Forms UI">
            <i class="glyph-icon icon-linecons-eye"></i>
            <span>HOME</span>
        </a>
    </li>

    <li class="header"><span>Components</span></li>
    <li>
        <a href="#" title="All Orders">
            <i class="glyph-icon icon-linecons-diamond"></i>
            <span>Enrolled Shops</span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                    <li><a href="{{url('admin/shops')}}" title="Buttons"><span>All Shops</span>
                    <span class="bs-badge badge-azure allshops">{{count(\App\Shop::withTrashed()->get())}}</span></a></li>
                    <li><a href="{{url('admin/active-shops')}}" title="Buttons"><span>Active Shops</span>
                    <span class="bs-badge badge-purple activatedshop">{{count(\App\Shop::all())}}</span></a></li>
                    <li><a href="{{url('admin/deactivated-shops')}}" title="Buttons"><span>Deactivated Shops</span> <span class="bs-badge badge-yellow deactivatedshop">{{count(\App\Shop::onlyTrashed()->get())}}</span></a></a></li>
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>
    <li>
        <a href="#" title="Statistics">
            <i class="glyph-icon icon-linecons-wallet"></i>
            <span>Couriers Onboard</span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="{{url('admin/couriers')}}" title="Buttons"><span>All Couriers</span>
                    <span class="bs-badge badge-azure allcouriers">{{count(\App\Courier::withTrashed()->get())}}</span></a></li>
                    <li><a href="{{url('admin/active-couriers')}}" title="Buttons"><span>Active Couriers</span>
                    <span class="bs-badge badge-purple activeCouriers">{{count(\App\Courier::all())}}</span></a></li>
                    <li><a href="{{url('admin/deactivated-couriers')}}" title="Buttons"><span>Deactivated Couriers</span> <span class="bs-badge badge-yellow deactiveCouriers">{{count(\App\Courier::onlyTrashed()->get())}}</span></a></a></li>
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>
    <li>
        <a href="#" title="Statistics">
            <i class="glyph-icon icon-linecons-wallet"></i>
            <span>Monthly Plans</span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="{{url('admin/shopPlans')}}" title="Buttons"><span>Shops Monthly Plan</span>
                    </a></li>
                    <li><a href="{{url('admin/courierPlans')}}" title="Buttons"><span>Couriers Monthly Plan</span></a></a></li>
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>
    
        <li>
        <a href="{{url('admin/shopcategories')}}" title="Forms UI">
            <i class="glyph-icon icon-linecons-eye"></i>
            <span>Shop Categories</span>
        </a>
    </li>
    <li>
        <a href="{{url('admin/referrals')}}" title="Forms UI">
            <i class="glyph-icon icon-linecons-eye"></i>
            <span>Referrals</span>
        </a>
    </li>
     <li>
        <a href="{{url('admin/complaints')}}" title="Forms UI">
            <i class="glyph-icon icon-linecons-eye"></i>
            <span>Complaints</span>
        </a>
    </li>
    
    <li class="header"><span>Extra</span></li>
    <li>
        <a href="{{url('admin/options')}}" title="Customise Dashboard Options">
            <i class="glyph-icon icon-linecons-paper-plane"></i>
            <span class="appearance">Appearance<span class="bs-badge badge-purple">New</span></span>
        </a><!-- .sidebar-submenu -->
    </li>
    </ul><!-- #sidebar-menu -->


    </div>
</div>