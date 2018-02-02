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
                                                                    <a href="home-v1.html">Home v1</a>
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
                                                                    <a href="landing-page-v1.html">Landing v1</a>
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
                                    <li class="menu-item animate-dropdown">
                                        <a title="Logitech Sale" href="{{url('login/register')}}">Login/Register</a>
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="Headphones Sale" href="{{url('/favorites')}}">Favorites</a>
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
                        <div id="departments-menu" class="dropdown departments-menu">
                            <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="tm tm-departments-thin"></i>
                                <span>All Departments</span>
                            </button>
                            <ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">
                                <li class="highlight menu-item animate-dropdown">
                                    <a title="Value of the Day" href="home-v2.html">Value of the Day</a>
                                </li>
                                <li class="highlight menu-item animate-dropdown">
                                    <a title="Top 100 Offers" href="home-v3.html">Top 100 Offers</a>
                                </li>

                            </ul>
                        </div>
                        <!-- .departments-menu -->
                        <form class="navbar-search" method="get" action="https://transvelo.github.io/techmarket-html/home-v1.html">
                            <label class="sr-only screen-reader-text" for="search">Search for:</label>
                            <div class="input-group">
                                <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="s" placeholder="Search for products" />
                                <div class="input-group-addon search-categories">
                                    <select name='product_cat' id='product_cat' class='postform resizeselect'>
                                        <option value='0' selected='selected'>All Categories</option>
                                        <option class="level-0" value="television">Televisions</option>                                       
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
                                <a href="compare.html" class="nav-link">
                                    <i class="tm tm-compare"></i>
                                    <span id="top-cart-compare-count" class="value">3</span>
                                </a>
                            </li>
                        </ul>
                        <!-- .header-compare -->
                        <ul class="header-wishlist nav navbar-nav">
                            <li class="nav-item">
                                <a href="wishlist.html" class="nav-link">
                                    <i class="tm tm-favorites"></i>
                                    <span id="top-cart-wishlist-count" class="value">3</span>
                                </a>
                            </li>
                        </ul>
                        <!-- .header-wishlist -->
                        <ul id="site-header-cart" class="site-header-cart menu">
                            <li class="animate-dropdown dropdown ">
                                <a class="cart-contents" href="cart.html" data-toggle="dropdown" title="View your shopping cart">
                                    <i class="tm tm-shopping-bag"></i>
                                    <span class="count">2</span>
                                    <span class="amount">
                                        <span class="price-label">Your Cart</span>&#036;136.99</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-mini-cart">
                                    <li>
                                        <div class="widget woocommerce widget_shopping_cart">
                                            <div class="widget_shopping_cart_content">
                                                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                    <li class="woocommerce-mini-cart-item mini_cart_item">
                                                        <a href="#" class="remove" aria-label="Remove this item" data-product_id="65" data-product_sku="">×</a>
                                                        <a href="single-product-sidebar.html">
                                                            <img src="assets/images/products/mini-cart1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">XONE Wireless Controller&nbsp;
                                                        </a>
                                                        <span class="quantity">1 ×
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>64.99</span>
                                                        </span>
                                                    </li>
                                                    <li class="woocommerce-mini-cart-item mini_cart_item">
                                                        <a href="#" class="remove" aria-label="Remove this item" data-product_id="27" data-product_sku="">×</a>
                                                        <a href="single-product-sidebar.html">
                                                            <img src="assets/images/products/mini-cart2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">Gear Virtual Reality 3D with Bluetooth Glasses&nbsp;
                                                        </a>
                                                        <span class="quantity">1 ×
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>72.00</span>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <!-- .cart_list -->
                                                <p class="woocommerce-mini-cart__total total">
                                                    <strong>Subtotal:</strong>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>136.99</span>
                                                </p>
                                                <p class="woocommerce-mini-cart__buttons buttons">
                                                    <a href="cart.html" class="button wc-forward">View cart</a>
                                                    <a href="checkout.html" class="button checkout wc-forward">Checkout</a>
                                                </p>
                                            </div>
                                            <!-- .widget_shopping_cart_content -->
                                        </div>
                                        <!-- .widget_shopping_cart -->
                                    </li>
                                </ul>
                                <!-- .dropdown-menu-mini-cart -->
                            </li>
                        </ul>
                        <!-- .site-header-cart -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- .col-full -->
                <div class="col-full handheld-only">
                    <div class="handheld-header">
                        <div class="row">
                            <div class="site-branding">
                                <a href="home-v1.html" class="custom-logo-link" rel="home">
                                    Tech Market
                                </a>
                                <!-- /.custom-logo-link -->
                            </div>
                            <!-- /.site-branding -->
                            <!-- ============================================================= End Header Logo ============================================================= -->
                            <div class="handheld-header-links">
                                <ul class="columns-3">
                                    <li class="my-account">
                                        <a href="login-and-register.html" class="has-icon">
                                            <i class="tm tm-login-register"></i>
                                        </a>
                                    </li>
                                    <li class="wishlist">
                                        <a href="wishlist.html" class="has-icon">
                                            <i class="tm tm-favorites"></i>
                                            <span class="count">3</span>
                                        </a>
                                    </li>
                                    <li class="compare">
                                        <a href="compare.html" class="has-icon">
                                            <i class="tm tm-compare"></i>
                                            <span class="count">3</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- .columns-3 -->
                            </div>
                            <!-- .handheld-header-links -->
                        </div>
                        <!-- /.row -->
                        {{--left Navbar Here--}}
                        @include('front.techmarket.inc.left_navbar')
                        <!-- .techmarket-sticky-wrap -->
                    </div>
                    <!-- .handheld-header -->
                </div>
                <!-- .handheld-only -->
            </header>