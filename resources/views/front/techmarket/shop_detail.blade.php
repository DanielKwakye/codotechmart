@section('branches')
    <div id="departments-menu" class="dropdown departments-menu">
        <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="tm tm-departments-thin"></i>
            <span>All Branches</span>
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
@endsection
@section('custom_menu')
    <li class="menu-item animate-dropdown">
        <a title="Headphones Sale" href="{{url('shop/'.$shop->id.'/products')}}">Products</a>
    </li>
@endsection
@section('left_menu')
    <li class="highlight menu-item animate-dropdown">
        <a title="New Arrivals" href="{{url('products')}}">Products</a>
    </li>
@endsection

<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <title>Techmarket HTML</title>
        @include('front.techmarket.inc.head_assets')
    </head>
    <body class="woocommerce-active page-template-template-homepage-v1 can-uppercase">
        <div id="page" class="hfeed site">
            @include('front.techmarket.inc.top_bar')
            @include('front.techmarket.inc.header')
            <!-- .header-v1 -->
            <!-- ============================================================= Header End ============================================================= -->
            <div id="content" class="site-content">
                <div class="col-full">
                    <div class="row">
                        <div id="primary" class="content-area">
                            <section id="main" class="site-main">
                                <div class="home-v1-slider home-slider">
                                    <div class="slider-1" style="background-image: url(assets/images/slider/home-v1-background.jpg);">
                                        <img src="{{asset('assets/images/slider/home-v1-img-1.png')}}" alt="">
                                        <div class="caption">
                                            <div class="title">Turn. Click. Expand. Smart modular design simplifies adding storage for growing media.</div>
                                            <div class="sub-title">Powerful Six Core processor, vibrant 4KUHD display output and fast SSD elegantly cased in a soft alloy design.</div>
                                            <div class="button">Get Yours now
                                                <i class="tm tm-long-arrow-right"></i>
                                            </div>
                                            <div class="bottom-caption">Free shipping on US Terority</div>
                                        </div>
                                    </div>
                                    <!-- .slider-1 -->
                                    <div class="slider-1 slider-2" style="background-image: url(assets/images/slider/home-v1-background.jpg);">
                                        <img src="{{asset('assets/images/slider/home-v1-img-2.png')}}" alt="">
                                        <div class="caption">
                                            <div class="title">The new-tech gift you
                                                <br> are wishing for is
                                                <br> right here</div>
                                            <div class="sub-title">Big screens in incredibly slim designs
                                                <br>that in your hand.</div>
                                            <div class="button">Browse now
                                                <i class="tm tm-long-arrow-right"></i>
                                            </div>
                                            <div class="bottom-caption">Free shipping on US Terority </div>
                                        </div>
                                    </div>
                                    <!-- .slider-2 -->
                                </div>
                                <!-- .home-v1-slider -->
                                <div class="features-list">
                                    <div class="features">
                                        <div class="feature">
                                            <div class="media">
                                                <i class="feature-icon d-flex mr-3 tm tm-free-delivery"></i>
                                                <div class="media-body feature-text">
                                                    <h5 class="mt-0">Free Delivery</h5>
                                                    <span>from $50</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .feature -->
                                        <div class="feature">
                                            <div class="media">
                                                <i class="feature-icon d-flex mr-3 tm tm-feedback"></i>
                                                <div class="media-body feature-text">
                                                    <h5 class="mt-0">99% Customer</h5>
                                                    <span>Feedbacks</span>
                                                </div>
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .feature -->
                                        <div class="feature">
                                            <div class="media">
                                                <i class="feature-icon d-flex mr-3 tm tm-free-return"></i>
                                                <div class="media-body feature-text">
                                                    <h5 class="mt-0">365 Days</h5>
                                                    <span>for free return</span>
                                                </div>
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .feature -->
                                        <div class="feature">
                                            <div class="media">
                                                <i class="feature-icon d-flex mr-3 tm tm-safe-payments"></i>
                                                <div class="media-body feature-text">
                                                    <h5 class="mt-0">Payment</h5>
                                                    <span>Secure System</span>
                                                </div>
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .feature -->
                                        <div class="feature">
                                            <div class="media">
                                                <i class="feature-icon d-flex mr-3 tm tm-best-brands"></i>
                                                <div class="media-body feature-text">
                                                    <h5 class="mt-0">Only Best</h5>
                                                    <span>Brands</span>
                                                </div>
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .feature -->
                                    </div>
                                    <!-- .features -->
                                </div>
                                <!-- /.features list -->
                                <div class="section-deals-carousel-and-products-carousel-tabs row">
                                    <section class="column-1 deals-carousel" id="sale-with-timer-carousel">
                                        <div class="deals-carousel-inner-block">
                                            <header class="section-header">
                                                <h2 class="section-title">
                                                    <strong>Deals</strong> of the week</h2>
                                                <nav class="custom-slick-nav"></nav>
                                            </header>
                                            <!-- /.section-header -->
                                            <div class="sale-products-with-timer-carousel deals-carousel-v1">
                                                <div class="products-carousel">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce columns-1">
                                                            <div class="products" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=https://transvelo.github.io/"#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=https://transvelo.github.io/"#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#sale-with-timer-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}}]}">
                                                                <div class="sale-product-with-timer product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="sale-product-with-timer-header">
                                                                            <div class="price-and-title">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>425.89</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>545.89</span>
                                                                                    </del>
                                                                                </span>
                                                                                <!-- /.price -->
                                                                                <h2 class="woocommerce-loop-product__title">Tablet Red EliteBook Revolve</h2>
                                                                            </div>
                                                                            <!-- /.price-and-title -->
                                                                            <div class="sale-label-outer">
                                                                                <div class="sale-saved-label">
                                                                                    <span class="saved-label-text">Save</span>
                                                                                    <span class="saved-label-amount">
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>120.00</span>
                                                                                    </span>
                                                                                </div>
                                                                                <!-- /.sale-saved-label -->
                                                                            </div>
                                                                            <!-- /.sale-label-outer -->
                                                                        </div>
                                                                        <!-- /.sale-product-with-timer-header -->
                                                                        <img width="224" height="197" alt="" class="wp-post-image" src="{{asset('assets/images/products/1.jpg')}}">
                                                                        <div class="deal-progress">
                                                                            <div class="deal-stock">
                                                                                <div class="stock-sold">Already Sold:
                                                                                    <strong>0</strong>
                                                                                </div>
                                                                                <div class="stock-available">Available:
                                                                                    <strong>1000</strong>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.deal-stock -->
                                                                            <div class="progress">
                                                                                <span style="width:0%" class="progress-bar">0</span>
                                                                            </div>
                                                                            <!-- /.progress -->
                                                                        </div>
                                                                        <!-- /.deal-progress -->
                                                                        <div class="deal-countdown-timer">
                                                                            <div class="marketing-text">
                                                                                <span class="line-1">Hurry up!</span>
                                                                                <span class="line-2">Offers ends in:</span>
                                                                            </div>
                                                                            <!-- /.marketing-text -->
                                                                            <span class="deal-time-diff" style="display:none;">28800</span>
                                                                            <div class="deal-countdown countdown"></div>
                                                                        </div>
                                                                        <!-- /.deal-countdown-timer -->
                                                                    </a>
                                                                    <!-- /.woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- /.sale-product-with-timer -->
                                                                <div class="sale-product-with-timer product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="sale-product-with-timer-header">
                                                                            <div class="price-and-title">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>425.89</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>545.89</span>
                                                                                    </del>
                                                                                </span>
                                                                                <!-- /.price -->
                                                                                <h2 class="woocommerce-loop-product__title">Tablet Red EliteBook Revolve</h2>
                                                                            </div>
                                                                            <!-- /.price-and-title -->
                                                                            <div class="sale-label-outer">
                                                                                <div class="sale-saved-label">
                                                                                    <span class="saved-label-text">Save</span>
                                                                                    <span class="saved-label-amount">
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>120.00</span>
                                                                                    </span>
                                                                                </div>
                                                                                <!-- /.sale-saved-label -->
                                                                            </div>
                                                                            <!-- /.sale-label-outer -->
                                                                        </div>
                                                                        <!-- /.sale-product-with-timer-header -->
                                                                        <img width="224" height="197" alt="" class="wp-post-image" src="assets/images/products/2.jpg">
                                                                        <div class="deal-progress">
                                                                            <div class="deal-stock">
                                                                                <div class="stock-sold">Already Sold:
                                                                                    <strong>0</strong>
                                                                                </div>
                                                                                <div class="stock-available">Available:
                                                                                    <strong>1000</strong>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.deal-stock -->
                                                                            <div class="progress">
                                                                                <span style="width:0%" class="progress-bar">0</span>
                                                                            </div>
                                                                            <!-- /.progress -->
                                                                        </div>
                                                                        <!-- /.deal-progress -->
                                                                        <div class="deal-countdown-timer">
                                                                            <div class="marketing-text">
                                                                                <span class="line-1">Hurry up!</span>
                                                                                <span class="line-2">Offers ends in:</span>
                                                                            </div>
                                                                            <!-- /.marketing-text -->
                                                                            <span class="deal-time-diff" style="display:none;">28800</span>
                                                                            <div class="deal-countdown countdown"></div>
                                                                        </div>
                                                                        <!-- /.deal-countdown-timer -->
                                                                    </a>
                                                                    <!-- /.woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- /.sale-product-with-timer -->
                                                                <div class="sale-product-with-timer product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="sale-product-with-timer-header">
                                                                            <div class="price-and-title">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>425.89</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>545.89</span>
                                                                                    </del>
                                                                                </span>
                                                                                <!-- /.price -->
                                                                                <h2 class="woocommerce-loop-product__title">Tablet Red EliteBook Revolve</h2>
                                                                            </div>
                                                                            <!-- /.price-and-title -->
                                                                            <div class="sale-label-outer">
                                                                                <div class="sale-saved-label">
                                                                                    <span class="saved-label-text">Save</span>
                                                                                    <span class="saved-label-amount">
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>120.00</span>
                                                                                    </span>
                                                                                </div>
                                                                                <!-- /.sale-saved-label -->
                                                                            </div>
                                                                            <!-- /.sale-label-outer -->
                                                                        </div>
                                                                        <!-- /.sale-product-with-timer-header -->
                                                                        <img width="224" height="197" alt="" class="wp-post-image" src="assets/images/products/3.jpg">
                                                                        <div class="deal-progress">
                                                                            <div class="deal-stock">
                                                                                <div class="stock-sold">Already Sold:
                                                                                    <strong>0</strong>
                                                                                </div>
                                                                                <div class="stock-available">Available:
                                                                                    <strong>1000</strong>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.deal-stock -->
                                                                            <div class="progress">
                                                                                <span style="width:0%" class="progress-bar">0</span>
                                                                            </div>
                                                                            <!-- /.progress -->
                                                                        </div>
                                                                        <!-- /.deal-progress -->
                                                                        <div class="deal-countdown-timer">
                                                                            <div class="marketing-text">
                                                                                <span class="line-1">Hurry up!</span>
                                                                                <span class="line-2">Offers ends in:</span>
                                                                            </div>
                                                                            <!-- /.marketing-text -->
                                                                            <span class="deal-time-diff" style="display:none;">28800</span>
                                                                            <div class="deal-countdown countdown"></div>
                                                                        </div>
                                                                        <!-- /.deal-countdown-timer -->
                                                                    </a>
                                                                    <!-- /.woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- /.sale-product-with-timer -->
                                                                <div class="sale-product-with-timer product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="sale-product-with-timer-header">
                                                                            <div class="price-and-title">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>425.89</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>545.89</span>
                                                                                    </del>
                                                                                </span>
                                                                                <!-- /.price -->
                                                                                <h2 class="woocommerce-loop-product__title">Tablet Red EliteBook Revolve</h2>
                                                                            </div>
                                                                            <!-- /.price-and-title -->
                                                                            <div class="sale-label-outer">
                                                                                <div class="sale-saved-label">
                                                                                    <span class="saved-label-text">Save</span>
                                                                                    <span class="saved-label-amount">
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>120.00</span>
                                                                                    </span>
                                                                                </div>
                                                                                <!-- /.sale-saved-label -->
                                                                            </div>
                                                                            <!-- /.sale-label-outer -->
                                                                        </div>
                                                                        <!-- /.sale-product-with-timer-header -->
                                                                        <img width="224" height="197" alt="" class="wp-post-image" src="assets/images/products/4.jpg">
                                                                        <div class="deal-progress">
                                                                            <div class="deal-stock">
                                                                                <div class="stock-sold">Already Sold:
                                                                                    <strong>0</strong>
                                                                                </div>
                                                                                <div class="stock-available">Available:
                                                                                    <strong>1000</strong>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.deal-stock -->
                                                                            <div class="progress">
                                                                                <span style="width:0%" class="progress-bar">0</span>
                                                                            </div>
                                                                            <!-- /.progress -->
                                                                        </div>
                                                                        <!-- /.deal-progress -->
                                                                        <div class="deal-countdown-timer">
                                                                            <div class="marketing-text">
                                                                                <span class="line-1">Hurry up!</span>
                                                                                <span class="line-2">Offers ends in:</span>
                                                                            </div>
                                                                            <!-- /.marketing-text -->
                                                                            <span class="deal-time-diff" style="display:none;">28800</span>
                                                                            <div class="deal-countdown countdown"></div>
                                                                        </div>
                                                                        <!-- /.deal-countdown-timer -->
                                                                    </a>
                                                                    <!-- /.woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- /.sale-product-with-timer -->
                                                            </div>
                                                            <!-- /.products -->
                                                        </div>
                                                        <!-- /.woocommerce -->
                                                    </div>
                                                    <!-- /.container-fluid -->
                                                </div>
                                                <!-- /.slick-list -->
                                            </div>
                                            <!-- /.sale-products-with-timer-carousel -->
                                            <footer class="section-footer">
                                                <nav class="custom-slick-pagination">
                                                    <a class="slider-prev left" href="#" data-target="#sale-with-timer-carousel .products">
                                                        <i class="tm tm-arrow-left"></i>Previous deal</a>
                                                    <a class="slider-next right" href="#" data-target="#sale-with-timer-carousel .products">Next deal<i class="tm tm-arrow-right"></i></a>
                                                </nav>
                                            </footer>
                                            <!-- /.section-footer -->
                                        </div>
                                        <!-- /.deals-carousel-inner-block -->
                                    </section>
                                    <!-- /.deals-carousel -->
                                    <section class="column-2 section-products-carousel-tabs tab-carousel-1">
                                        <div class="section-products-carousel-tabs-wrap">
                                            <header class="section-header">
                                                <ul role="tablist" class="nav justify-content-end">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#tab-59f89f0881f930" data-toggle="tab">New Arrivals</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="#tab-59f89f0881f931" data-toggle="tab">On Sale</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="#tab-59f89f0881f932" data-toggle="tab">Best Rated</a>
                                                    </li>
                                                </ul>
                                            </header>
                                            <!-- .section-header -->
                                            <div class="tab-content">
                                                <div id="tab-59f89f0881f930" class="tab-pane active" role="tabpanel">
                                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce">
                                                                <div class="products">
                                                                    @foreach($products as $p)
                                                                    <div class="product">
                                                                        <img src="{{asset('assets/images/ajax-loader.gif')}}" style="display: none;" id="ajax_loader_{{$p->id}}">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="#" rel="nofollow" class="add_to_wishlist" data="{{$p->id}}"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="{{url('product/detail/'.$p->id)}}" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{asset('assets/images/products/3.jpg')}}" width= "224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">{{$p->name}}</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button trigger" href="#" data="{{$p}}" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link add_to_compare" data="{{$p->id}}" href="#">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->

                                                                    <!-- /.product-outer -->
                                                                     @endforeach

                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce -->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .products-carousel -->
                                                </div>
                                                <!-- .tab-pane -->
                                                <div id="tab-59f89f0881f931" class="tab-pane " role="tabpanel">
                                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce">
                                                                <div class="products">
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{asset('assets/images/products/11.jpg')}}" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="{{asset('assets/images/products/2.jpg')}}" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 309.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">459.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>


                                                                    <!-- /.product-outer -->

                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce -->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .products-carousel -->
                                                </div>
                                                <!-- .tab-pane -->
                                                <div id="tab-59f89f0881f932" class="tab-pane " role="tabpanel">
                                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce">
                                                                <div class="products">
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{asset('assets/images/products/6.jpg')}}" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{asset('assets/images/products/15.jpg')}}" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 399.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>

                                                                    <!-- /.product-outer -->

                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce -->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .products-carousel -->
                                                </div>
                                                <!-- .tab-pane -->
                                                <div id="tab-59f89f0881f933" class="tab-pane " role="tabpanel">
                                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce">
                                                                <div class="products">
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/6.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="assets/images/products/4.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->

                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce -->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .products-carousel -->
                                                </div>
                                                <!-- .tab-pane -->
                                            </div>
                                            <!-- .tab-content -->
                                        </div>
                                        <!-- .section-products-carousel-tabs-wrap -->
                                    </section>
                                    <!-- .section-products-carousel-tabs -->
                                </div>

                                <!-- .fullwidth-notice -->

                                <!-- .section-landscape-products-carousel -->
                                @include('front.techmarket.inc.brands')
                                <!-- .brands-carousel -->
                            </main>
                            <!-- #main -->
                        </div>
                        <!-- #primary -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-full -->
            </div>
            <!-- #content -->
           @include('front.techmarket.inc.footer')
            <!-- .site-footer -->
        </div>
        <!-- For demo purposes – can be removed on production -->
        @include('front.techmarket.inc.config')
       @include('front.techmarket.inc.foot_assets')
    </body>

</html>