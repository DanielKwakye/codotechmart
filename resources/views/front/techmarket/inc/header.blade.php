<header id="masthead" class="site-header header-v1" style="background-image: none; ">
                <div class="col-full desktop-only">
                    <div class="techmarket-sticky-wrap">
                        <div class="row">
                            <div class="site-branding">
                                <a href="{{url('/')}}" class="custom-logo-link" rel="home">
                                    Tech Market
                                </a>
                                <!-- /.custom-logo-link -->
                            </div>
                            <!-- /.site-branding -->
                            <!-- ============================================================= End Header Logo ============================================================= -->
                            <nav id="primary-navigation" class="primary-navigation" aria-label="Primary Navigation" data-nav="flex-menu">
                                <ul id="menu-primary-menu" class="nav yamm">
                                    <li class="sale-clr yamm-fw menu-item animate-dropdown">
                                        <a title="Super deals" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="yamm-fw menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="Pages" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Shop Categories <span class="caret"></span></a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                <div class="yamm-content">
                                                    <div class="tm-mega-menu">
                                                        <div class="widget widget_nav_menu">
                                                            <ul class="menu">
                                                                <li class="nav-title menu-item">
                                                                    <a href="#">Home Pages</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="{{url("")}}">Home v1</a>
                                                                </li>                                                                
                                                            </ul>
                                                            <!-- .menu -->
                                                        </div>
                                                        <!-- .widget_nav_menu -->
                                                        <div class="widget widget_nav_menu">
                                                            <ul class="menu">
                                                                <li class="nav-title menu-item">
                                                                    <a href="#">Landing Pages</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="{{url("")}}">Landing v1</a>
                                                                </li>
                                                                
                                                            </ul>
                                                            <!-- .menu -->
                                                        </div>

                                                        <!-- .widget_nav_menu -->
                                                    </div>
                                                    <!-- .tm-mega-menu -->
                                                </div>
                                                <!-- .yamm-content -->
                                            </li>
                                            <!-- .menu-item -->
                                        </ul>
                                        <!-- .dropdown-menu -->
                                    </li>

                                    <li class="menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="Browse Shops" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Browse Shops <span class="caret"></span></a>
                                        <ul role="menu" class=" dropdown-menu">
                                            @if(\App\Shop::all() != null)
                                                @foreach(\App\Shop::all() as $s)
                                            <li class="menu-item animate-dropdown">
                                                <a title="Wishlist" href="{{url('shop/'.$s->id.'/detail')}}">{{$s->name}}</a>
                                            </li>
                                            @endforeach
                                                @endif
                                        </ul>
                                        <!-- .dropdown-menu -->
                                    </li>

                                    <li class="menu-item animate-dropdown">
                                        <a title="Headphones Sale" href="{{url('/wishlist')}}">Favorites</a>
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="Headphones Sale" href="{{url('/compare')}}">Compare List</a>
                                    </li>
                                    @yield('custom_menu')
                                    <li class="techmarket-flex-more-menu-item dropdown">
                                        <a title="..." href="#" data-toggle="dropdown" class="dropdown-toggle">...</a>
                                        <ul class="overflow-items dropdown-menu"></ul>
                                        <!-- . -->
                                    </li>
                                    @if(\Illuminate\Support\Facades\Auth::user())
                                        <li class="menu-item animate-dropdown">
                                            <a title="Logitech Sale" href="{{url('profile')}}">Account</a>
                                        </li>
                                        <li class="menu-item animate-dropdown">
                                            <a title="Logitech Sale" href="{{url('logout')}}">Logout</a>
                                        </li>
                                    @else
                                        <li class="menu-item animate-dropdown">
                                            <a title="Logitech Sale" href="{{url('login/register')}}">Login/Register</a>
                                        </li>
                                    @endif
                                </ul>
                                <!-- .nav -->
                            </nav>
                            <!-- .primary-navigation -->
                            
                            <!-- .secondary-navigation -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- .techmarket-sticky-wrap -->
                    <div class="row align-items-center">
                        @yield('branches')
                        <!-- .departments-menu -->
                        <form class="navbar-search" method="get" action="https://transvelo.github.io/techmarket-html/home-v1.html">
                            <label class="sr-only screen-reader-text" for="search">Search for:</label>
                            <div class="input-group">
                                <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="s" placeholder="Search for products" />
                                <div class="input-group-addon search-categories">
                                    <select name='product_cat' id='product_cat' class='postform resizeselect'>
                                        <option value='0' selected='selected'>All Regions</option>
                                        <option class="level-0" value="television">Asante Region</option>
                                        <option class="level-0" value="television">Brong Ahafo Region</option>
                                        <option class="level-0" value="television">Central Region</option>
                                        <option class="level-0" value="television">Eastern Region</option>
                                        <option class="level-0" value="television">Greater Accra</option>
                                        <option class="level-0" value="television">Northern Region</option>
                                        <option class="level-0" value="television">Upper East Region</option>
                                        <option class="level-0" value="television">Upper West Region</option>
                                        <option class="level-0" value="television">Volta Region</option>
                                        <option class="level-0" value="television">Western Region</option>
                                    </select>
                                </div>
                                <!-- .input-group-addon -->
                                <div class="input-group-btn">
                                    <input type="hidden" id="search-param" name="post_type" value="product" />
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-search"></i>
                                        <span class="search-btn">Search</span>
                                    </button>
                                </div>
                                <!-- .input-group-btn -->
                            </div>
                            <!-- .input-group -->
                        </form>
                        <!-- .navbar-search -->
                        <ul class="header-compare nav navbar-nav">
                            <li class="nav-item">
                                <a href="{{url('compare')}}" class="nav-link">
                                    <i class="tm tm-compare"></i>
                                    <span id="top-cart-compare-count" class="value">{{\App\Front\Plugins\Compare::getInstance()->totalQty}}</span>
                                </a>
                            </li>
                        </ul>
                        <!-- .header-compare -->
                        <ul class="header-wishlist nav navbar-nav">
                            <li class="nav-item">
                                <a href="{{url('wishlist')}}" class="nav-link">
                                    <i class="tm tm-favorites"></i>
                                    <span id="top-cart-wishlist-count" class="value">{{\App\Front\Plugins\WishList::getInstance()->totalQty}}</span>
                                </a>
                            </li>
                        </ul>
                        <!-- .header-wishlist -->
                            <div id="hang_cart">
                        @include('front.techmarket.inc.hanging_cart')
                            </div>
                        <!-- .site-header-cart -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- .col-full -->
                <div class="col-full handheld-only">
                    <div class="handheld-header">
                        <div class="row">
                            <div class="site-branding">
                                <a href="{{url('/')}}" class="custom-logo-link" rel="home">
                                    Tech Market
                                </a>
                                <!-- /.custom-logo-link -->
                            </div>
                            <!-- /.site-branding -->
                            <!-- ============================================================= End Header Logo ============================================================= -->
                            <div class="handheld-header-links">
                                <ul class="columns-3">
                                    <li class="my-account">
                                        <a href="{{url('login/register')}}" class="has-icon">
                                            <i class="tm tm-login-register"></i>
                                        </a>
                                    </li>
                                    <li class="wishlist">
                                        <a href="{{url('wishlist')}}" class="has-icon">
                                            <i class="tm tm-favorites"></i>
                                            <span class="count">{{\App\Front\Plugins\Compare::getInstance()->totalQty}}</span>
                                        </a>
                                    </li>
                                    <li class="compare">
                                        <a href="{{url('compare')}}" class="has-icon">
                                            <i class="tm tm-compare"></i>
                                            <span class="count">{{\App\Front\Plugins\WishList::getInstance()->totalQty}}</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- .columns-3 -->
                            </div>
                            <!-- .handheld-header-links -->
                        </div>
                        <!-- /.row -->
                        {{--left Navbar Here--}}
                        <div class="techmarket-sticky-wrap">
                           @include('front.techmarket.inc.left_navbar')
                         </div>
                        <!-- .techmarket-sticky-wrap -->
                    </div>
                    <!-- .handheld-header -->
                </div>
                <!-- .handheld-only -->
            </header>