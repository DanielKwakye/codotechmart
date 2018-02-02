<div class="techmarket-sticky-wrap">
    <div class="row">
        <nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
            <button class="btn navbar-toggler" type="button">
                <i class="tm tm-departments-thin"></i>
                <span>Menu</span>
            </button>
            <div class="handheld-navigation-menu">
                <span class="tmhm-close">Close</span>
                <ul id="menu-departments-menu-1" class="nav">
                    <li class="highlight menu-item animate-dropdown">
                        <a title="Value of the Day" href="{{url('/')}}">Home</a>
                    </li>

                    <li class="highlight menu-item animate-dropdown">
                        <a title="New Arrivals" href="{{url('/login')}}">Login / Register</a>
                    </li>

                    <li class="highlight menu-item animate-dropdown">
                        <a title="New Arrivals" href="{{url('/favorite')}}">Favorites</a>
                    </li>

                    <li class="highlight menu-item animate-dropdown">
                        <a title="New Arrivals" href="{{url('/compare')}}">Compare List</a>
                    </li>

                    @yield('left_menu')

                    <li class="highlight menu-item animate-dropdown">
                        <a title="New Arrivals" href="{{url('/faq')}}">FAQs</a>
                    </li>
                    <li class="highlight menu-item animate-dropdown">
                        <a title="New Arrivals" href="{{url('/about')}}">About Us</a>
                    </li>

                </ul>
            </div>
            <!-- .handheld-navigation-menu -->
        </nav>
        <!-- .handheld-navigation -->
        <div class="site-search">
            <div class="widget woocommerce widget_product_search">
                <form role="search" method="get" class="woocommerce-product-search" action="https://transvelo.github.io/techmarket-html/home-v1.html">
                    <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                    <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products&hellip;" value="" name="s" />
                    <input type="submit" value="Search" />
                    <input type="hidden" name="post_type" value="product" />
                </form>
            </div>
            <!-- .widget -->
        </div>
        <!-- .site-search -->
        <a class="handheld-header-cart-link has-icon" href="cart.html" title="View your shopping cart">
            <i class="tm tm-shopping-bag"></i>
            <span class="count">2</span>
        </a>
    </div>
    <!-- /.row -->
</div>