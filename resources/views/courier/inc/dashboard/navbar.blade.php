 @php
   $shops = Auth::guard('courier')->user()->shops()->pluck('shops.id');
    $unrequested_shops = \App\Shop::whereNotIn('id',$shops)->get();
    $requested_shops=\App\Shop::whereIn('id',$shops)->get();
@endphp
<style type="text/css">
.smalltext{
    /*padding-top: 5px;*/
    font-size: 10px;
}
</style>

<div id="page-header" class="{{Auth::guard('courier')->user()->option->header}}">
    <div id="mobile-navigation">
        <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
        <a href="{{url('courier')}}" class="logo-content-small" title="MonarchUI"></a>
    </div>
    <div id="header-logo" class="logo-bg">
        <a href="{{url('courier')}}" style="background: url('{{asset('/images/logo.png')}}') left 50% no-repeat;" class="logo-content-big" title="Courier">
            Monarch <i>UI</i>
            <span>The perfect solution for user interfaces</span>
        </a>
        <a href="{{url('courier/')}}" style="background: url('{{asset('/images/logo.png')}}'); border-radius: 50%; background-size: 100% 100%" class="logo-content-small" title="MonarchUI">
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
                <img width="28" class="profileimages" src="{{asset(Auth::guard('courier')->user()->image)}}" style="width: 28px; height: 28px;">
                <ba class="username1">{{Auth::guard('courier')->user()->name}} </ba>
                <i class="glyph-icon icon-angle-down"></i>
            </a>
            <div class="dropdown-menu float-left">
                <div class="box-sm">
                    <div class="login-box clearfix">
                        <div class="user-img">
                            <img class="profileimages2" src="{{asset(Auth::guard('courier')->user()->image)}}" alt="">
                        </div>
                        <div class="user-info">
                            <span>
                                {{Auth::guard('courier')->user()->name}}
                                <i>Courier</i>
                            </span>
                            <a href="{{url('courier/profile')}}" title="Edit profile">Edit profile</a>
                        </div>
                    </div>
            
                    <div class="pad5A button-pane button-pane-alt text-center">
                        <a href="{{ url('courier/logout') }}" class="btn display-block font-normal btn-danger">
                            <i class="glyph-icon icon-power-off"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #header-nav-left -->
    <style type="text/css">
        .leftside{
            float: left;
            height: 28px;
            line-height: 28px;
            display: block;
            text-align: center;
            background: rgba(255,255,255,0.05);
            border-radius: 3px;
            margin: 8px 10px 0 0;
            color: rgba(255,255,255,255);
        }
        a.leftside:hover{
            color: rgba(255,255,255,255);
            text-decoration: none;
        }
    </style>
    <div id="header-nav-right">
        
        <a href="#" class="leftside" title="Days To Expire">
           <span class="">Account Expires In</span>  : <span class="smalltext" id="demo"></span><br>
        </a>
        
        <a class="header-btn" id="fullscreen-btn" title="Fullscreen" href="#" >
            <i class="glyph-icon icon-arrows-alt"></i>
        </a>
       {{--  <div class="dropdown" id="notifications-btn">
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
                        <li>
                            <span class="bg-danger icon-notification glyph-icon icon-bullhorn"></span>
                            <span class="notification-text">This is an error notification</span>
                            <div class="notification-time">
                                a few seconds ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="pad10A button-pane button-pane-alt text-center">
                    <a href="#" class="btn btn-primary" title="View all notifications">
                        View all notifications
                    </a>
                </div>
            </div>
        </div> --}}
        
        <a class="header-btn" id="logout-btn" href="{{url('logout')}}" title="Log Out">
            <i class="glyph-icon icon-linecons-lock"></i>
        </a>

    </div><!-- #header-nav-right -->

</div>
    @if(Auth::guard('courier')->user()->option->sidebar!==null)
    <style type="text/css">
        #sidebar-menu li .sidebar-submenu ul li a.sfActive {
    background: #03182d66;
}
    </style>
    @endif
        <div id="page-sidebar" class="{{Auth::guard('courier')->user()->option->sidebar}}">
    <div class="scroll-sidebar">
        

    <ul id="sidebar-menu">
    
    <li class="header"><span>Components</span></li>
    <li>
        <a href="#" title="All Orders">
            <i class="glyph-icon icon-linecons-diamond"></i>
            <span>Orders</span>
            <span class="bs-badge badge-danger totalorders">{{count(\App\Order::where('user_id',Auth::guard('courier')->user()->id)->get())}}</span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="{{url('courier/pending-orders')}}" title="Orders Not Delivered yet"><span>Pending Orders</span>
                    <span class="bs-badge badge-purple orders">{{count(\App\Order::whereIn('status',[1,2])->where('user_id',Auth::guard('courier')->user()->id)->get())}}</span></a></li>
                    <li><a href="{{url('courier/delivery-history')}}" title="Buttons"><span>Delivery History</span> <span class="bs-badge badge-yellow delivery">{{count(\App\Order::where('status',3)->where('user_id',Auth::guard('courier')->user()->id)->get())}}</span></a></a></li>
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>
    <li>
        <a href="#" title="Statistics">
            <i class="glyph-icon icon-linecons-wallet"></i>
            <span>Reports</span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="{{url('courier/charts')}}" title="Check Your Progress"><span>Statistics</span></a></li>
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>
    <li>
        <a href="#" title="Forms UI">
            <i class="glyph-icon icon-credit-card"></i>
            <span>Payment</span>
        </a>
    </li>
    
    <li class="header"><span>Extra</span></li>
    <li>
        <a href="#" title="Accounts">
            <i class="glyph-icon icon-linecons-megaphone"></i>
            <span>Accounts</span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="{{url('courier/profile')}}" title="My Profile"><span>Profile</span></a></li>
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>
    <li>
        <a href="#" title="Shops">
            <i class="glyph-icon icon-linecons-paper-plane"></i>
            <span>Shops</span> <span class="bs-badge badge-purple">{{count(\App\shopRequest::where('courier_id',Auth::guard('courier')->user()->id)->where('status',2)->get())+count(\App\Shop::whereNotIn('id',$shops)->get())+count(\App\shopRequest::where('courier_id',Auth::guard('courier')->user()->id)->where('status',1)->get())}}</span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="{{url('courier/myshops')}}" title="Registered Shops"><span>My Shops</span>
                    <span class="bs-badge badge-purple">{{count(\App\shopRequest::where('courier_id',Auth::guard('courier')->user()->id)->where('status',2)->get())}}</span></a></li>
                <li><a href="{{url('courier/all-shops')}}" title="Search Available Shops"><span>All Shops</span> <span class="bs-badge badge-yellow">{{count(\App\Shop::whereNotIn('id',$shops)->get())}}</span></a></li>
                <li><a href="{{url('courier/requestedshops')}}" title="Requested Shops"><span>Requested Shops</span> <span class="bs-badge badge-danger">{{count(\App\shopRequest::where('courier_id',Auth::guard('courier')->user()->id)->where('status',1)->get())}}</span></a></li>
            </ul>

        </div>
    </li>

    <li>
        <a href="{{url('courier/options')}}" title="Customise Dashboard Appearance Option">
            <i class="glyph-icon icon-wrench"></i>
            <span class="appearance">Appearance<span class="bs-badge badge-purple">New</span></span>
        </a><!-- .sidebar-submenu -->
    </li>
    <li>
        <a href="mailto:shopwithvim@gmail.com" title="Contact Us">
            <i class="glyph-icon icon-envelope"></i>
            <span class="appearance">Contact Us</span>
        </a><!-- .sidebar-submenu -->
    </li>
    {{-- <li>
        <a href="{{url('courier/options')}}" title="Notifications">
            <i class="glyph-icon icon-linecons-paper-plane"></i>
            <span class="appearance">notifications<span class="bs-badge badge-purple">{{count(Auth::guard('courier')->user()->unreadNotifications)}}</span></span>
        </a><!-- .sidebar-submenu -->
    </li> --}}
    </ul><!-- #sidebar-menu -->


    </div>
</div>