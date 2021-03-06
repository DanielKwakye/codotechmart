@section('custom_menu')
    <li class="menu-item animate-dropdown">
        <a title="Headphones Sale" href="{{url('/shop/detail')}}">Visit Shop</a>
    </li>
@endsection
@section('left_menu')
    <li class="highlight menu-item animate-dropdown">
        <a title="New Arrivals" href="{{url('/shop/detail')}}">Visit Shop</a>
    </li>
@endsection
<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<!-- Mirrored from transvelo.github.io/techmarket-html/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 09:54:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Products</title>
    @include('front.techmarket.inc.head_assets')
</head>
<body class="woocommerce-active left-sidebar">
<div id="page" class="hfeed site">
@include('front.techmarket.inc.top_bar')
<!-- .top-bar-v1 -->
@include('front.techmarket.inc.header')
<!-- .header-v1 -->
    <!-- ============================================================= Header End ============================================================= -->
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="home-v1.html">Home</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>Products
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <!-- .shop-archive-header -->
                        <div class="shop-control-bar">
                            <div class="handheld-sidebar-toggle">
                                <button type="button" class="btn sidebar-toggler">
                                    <i class="fa fa-sliders"></i>
                                    <span>Filters</span>
                                </button>
                            </div>
                            <!-- .handheld-sidebar-toggle -->
                            <h1 class="woocommerce-products-header__title page-title">Products</h1>
                            <ul role="tablist" class="shop-view-switcher nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#grid" title="Grid View" data-toggle="tab" class="nav-link active">
                                        <i class="tm tm-grid-small"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#grid-extended" title="Grid Extended View" data-toggle="tab" class="nav-link ">
                                        <i class="tm tm-grid"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#list-view-large" title="List View Large" data-toggle="tab" class="nav-link ">
                                        <i class="tm tm-listing-large"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#list-view" title="List View" data-toggle="tab" class="nav-link ">
                                        <i class="tm tm-listing"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#list-view-small" title="List View Small" data-toggle="tab" class="nav-link ">
                                        <i class="tm tm-listing-small"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- .shop-view-switcher -->
                            <form class="form-techmarket-wc-ppp" method="POST">
                                <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
                                    <option value="20">Show 20</option>
                                    <option value="40">Show 40</option>
                                    <option value="-1">Show All</option>
                                </select>
                                <input type="hidden" value="5" name="shop_columns">
                                <input type="hidden" value="15" name="shop_per_page">
                                <input type="hidden" value="right-sidebar" name="shop_layout">
                            </form>
                            <!-- .form-techmarket-wc-ppp -->
                            <form method="get" class="woocommerce-ordering">
                                <select class="orderby" name="orderby">
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option selected="selected" value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                                <input type="hidden" value="5" name="shop_columns">
                                <input type="hidden" value="15" name="shop_per_page">
                                <input type="hidden" value="right-sidebar" name="shop_layout">
                            </form>
                            <!-- .woocommerce-ordering -->
                            <nav class="techmarket-advanced-pagination">
                                <form class="form-adv-pagination" method="post">
                                    <input type="number" value="1" class="form-control" step="1" max="5" min="1" size="2" id="goto-page">
                                </form> of 5<a href="#" class="next page-numbers">→</a>
                            </nav>
                            <!-- .techmarket-advanced-pagination -->
                        </div>
                        <!-- .shop-control-bar -->
                        <div class="tab-content">
                            <div id="grid" class="tab-pane active" role="tabpanel">
                                <div class="woocommerce columns-5">
                                    <div class="products">
                                        @foreach($products as $p)
                                        <!-- .product -->
                                            <div class="product ">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                </div>
                                                <!-- .yith-wcwl-add-to-wishlist -->
                                                <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                    <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{asset('assets/images/products/1.jpg')}}">
                                                    <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">¢ </span>{{$p->price}}</span>
                                                        </span>
                                                    <h2 class="woocommerce-loop-product__title">{{$p->name}}</h2>
                                                </a>
                                                <!-- .woocommerce-LoopProduct-link -->
                                                <div class="hover-area">
                                                    <a class="button trigger" href="#" data="{{$p}}">Add to cart</a>
                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                </div>
                                                <!-- .hover-area -->
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .tab-pane -->
                            <div id="grid-extended" class="tab-pane" role="tabpanel">
                                <div class="woocommerce columns-5">
                                    <div class="products">
                                        @foreach($products as $p)
                                        <div class="product">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{asset('assets/images/products/1.jpg')}}">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">¢ </span>{{$p->price}}</span>
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">{{$p->name}}</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button trigger" data="{{$p}}" href="#">Add to cart</a>
                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                        </div>
                                        @endforeach

                                        <!-- .product -->
                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .tab-pane -->
                            <div id="list-view-large" class="tab-pane" role="tabpanel">
                                <div class="woocommerce columns-1">
                                    <div class="products">
                                        @foreach($products as $p)
                                        <div class="product list-view-large ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{asset('assets/images/products/1.jpg')}}">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                            <h2 class="woocommerce-loop-product__title">{{$p->name}}</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="brand">
                                                            <a href="#">
                                                                <img alt="galaxy" src="assets/images/brands/5.png">
                                                            </a>
                                                        </div>
                                                        <!-- .brand -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                        <span class="sku_wrapper">SKU:
                                                                    <span class="sku">5487FB8/13</span>
                                                                </span>
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                        <div class="availability">
                                                            Availability:
                                                            <p class="stock in-stock">1000 in stock</p>
                                                        </div>
                                                        <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button trigger" data="{{$p}}" href="#">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        @endforeach
                                        <!-- .product -->
                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .tab-pane -->
                            <div id="list-view" class="tab-pane" role="tabpanel">
                                <div class="woocommerce columns-1">
                                    <div class="products">
                                        @foreach($products as $P)
                                        <div class="product list-view ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{asset('assets/images/products/1.jpg')}}">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                            <h2 class="woocommerce-loop-product__title">{{$p->name}}</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="brand">
                                                            <a href="#">
                                                                <img alt="galaxy" src="assets/images/brands/5.png">
                                                            </a>
                                                        </div>
                                                        <!-- .brand -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                        <div class="availability">
                                                            Availability:
                                                            <p class="stock in-stock">1000 in stock</p>
                                                        </div>
                                                        <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">¢ </span>{{$p->price}}</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button trigger" href="#" data="{{$p}}">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        @endforeach
                                        <!-- .product -->

                                        <!-- .product -->
                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .tab-pane -->
                            <div id="list-view-small" class="tab-pane" role="tabpanel">
                                <div class="woocommerce columns-1">
                                    <div class="products">
                                        @foreach($products as $p)
                                        <div class="product list-view-small ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{asset('assets/images/products/1.jpg')}}">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                            <h2 class="woocommerce-loop-product__title">{{$p->name}}</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">¢ </span>{{$p->price}}</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button trigger" data="{{$p}}" href="">Add to Cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        @endforeach
                                        <!-- .product -->
                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .tab-pane -->
                        </div>
                        <!-- .tab-content -->
                        <div class="shop-control-bar-bottom">
                            <form class="form-techmarket-wc-ppp" method="POST">
                                <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
                                    <option value="20">Show 20</option>
                                    <option value="40">Show 40</option>
                                    <option value="-1">Show All</option>
                                </select>
                                <input type="hidden" value="5" name="shop_columns">
                                <input type="hidden" value="15" name="shop_per_page">
                                <input type="hidden" value="right-sidebar" name="shop_layout">
                            </form>
                            <!-- .form-techmarket-wc-ppp -->
                            <p class="woocommerce-result-count">
                                Showing 1&ndash;15 of 73 results
                            </p>
                            <!-- .woocommerce-result-count -->
                            <nav class="woocommerce-pagination">
                                <ul class="page-numbers">
                                    <li>
                                        <span class="page-numbers current">1</span>
                                    </li>
                                    <li><a href="#" class="page-numbers">2</a></li>
                                    <li><a href="#" class="page-numbers">3</a></li>
                                    <li><a href="#" class="page-numbers">4</a></li>
                                    <li><a href="#" class="page-numbers">5</a></li>
                                    <li><a href="#" class="next page-numbers">→</a></li>
                                </ul>
                                <!-- .page-numbers -->
                            </nav>
                            <!-- .woocommerce-pagination -->
                        </div>
                        <!-- .shop-control-bar-bottom -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
                @include('front.techmarket.product_categories')
                <!-- .widget_techmarket_products_carousel_widget -->
            </div>
            <!-- #secondary -->
        </div>
        <!-- .row -->
    </div>
    <!-- .col-full -->
</div>
<!-- #content -->
<!-- .col-full -->
@include('front.techmarket.inc.footer')
<!-- .site-footer -->
</div>
<!-- For demo purposes – can be removed on production -->
<!-- For demo purposes – can be removed on production -->
@include('front.techmarket.inc.config')
<!-- For demo purposes – can be removed on production : End -->
@include('front.techmarket.inc.foot_assets')
</body>

</html>