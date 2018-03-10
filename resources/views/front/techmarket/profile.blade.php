<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<!-- Mirrored from transvelo.github.io/techmarket-html/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 09:54:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Profile</title>
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
                    </span>Shop
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="shop-archive-header">
                            <div class="jumbotron">
                                <div class="jumbotron-img">
                                    <img width="416" height="283" alt="" src="assets/images/products/jumbo.jpg" class="jumbo-image alignright">
                                </div>
                                <div class="jumbotron-caption">
                                    <h3 class="jumbo-title">Welcome ! {{\Illuminate\Support\Facades\Auth::user()->name}}</h3>
                                    <p class="jumbo-subtitle">You can also earn from referring others. It sounds great isn't it ? Let's Get Started
                                        <br>
                                        <br>Simply share your referral link. You earn when others purchase items via your link
                                        <br>
                                        <br>You can request for payment when your referral amount exceeds ¢ 30.00
                                        <a href="#" class="toggle_link">Click Here For Referral Link <i class="tm tm-long-arrow-right"></i></a>
                                    <p id="referral_link" class="none"><code>{{url('login/register/'.\Illuminate\Support\Facades\Auth::user()->referral_link)}}</code></p>
                                    </p>
                                </div>
                                <!-- .jumbotron-caption -->
                            </div>
                            <!-- .jumbotron -->
                        </div>
                        <!-- .shop-archive-header -->
                        <div class="features-list">
                            <div class="features">
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-free-delivery"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">No. of Referrals</h5>
                                            <span>from $50</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- .feature -->
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-feedback"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">¢ 150 Earned</h5>
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
                        <div>
                            {{-- list of orders here .... --}}

                            <table class="shop_table cart wishlist_table">
                                <thead>
                                <tr>
                                    <th class="product-remove"></th>
                                    <th class="product-thumbnail"></th>
                                    <th class="product-name">
                                        <span class="nobr">Order Number</span>
                                    </th>
                                    <th class="product-price">
                                                <span class="nobr">
                                                    Order Date
                                                </span>
                                    </th>
                                    <th class="product-stock-status">
                                                <span class="nobr">
                                                    Status
                                                </span>
                                    </th>
                                    <th class="product-stock-status">
                                                <span class="nobr">
                                                    Action
                                                </span>
                                    </th>
                                    <th class="product-add-to-cart"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product-remove">
                                        <div>
                                            <a title="Remove this product" class="remove remove_from_wishlist" href="#">×</a>
                                        </div>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="single-product-fullwidth.html">
                                            <img width="180" height="180" alt="" class="wp-post-image" src="assets/images/products/cart-1.jpg">
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a href="single-product-fullwidth.html">#200911</a>
                                    </td>

                                    <td class="product-name">
                                        <a href="single-product-fullwidth.html">25 July 2017</a>
                                    </td>

                                    <td class="product-price">
                                        <ins>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">£</span>199.95</span>
                                        </ins>
                                        <del>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">£</span>229.99</span>
                                        </del>
                                    </td>
                                    <td class="product-add-to-cart">
                                        <a class="button add_to_cart_button button alt" href="{{url('order/detail')}}"> See Items</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-remove">
                                        <div>
                                            <a title="Remove this product" class="remove remove_from_wishlist" href="#">×</a>
                                        </div>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="single-product-fullwidth.html">
                                            <img width="180" height="180" alt="" class="wp-post-image" src="assets/images/products/cart-1.jpg">
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a href="single-product-fullwidth.html">4K Action Cam with  Wi-Fi &amp; GPS</a>
                                    </td>

                                    <td class="product-name">
                                        <a href="single-product-fullwidth.html">4K Action Cam with  Wi-Fi &amp; GPS</a>
                                    </td>

                                    <td class="product-price">
                                        <ins>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">£</span>199.95</span>
                                        </ins>
                                        <del>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">£</span>229.99</span>
                                        </del>
                                    </td>
                                    <td class="product-add-to-cart">
                                        <a class="button add_to_cart_button button alt" href="{{url('order/detail')}}"> See Items</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- .wishlist_table -->

                        </div>
                        <!-- .shop-control-bar-bottom -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
                <div id="secondary" class="widget-area shop-sidebar" role="complementary">
                    <div class="widget woocommerce widget_product_categories techmarket_widget_product_categories" id="techmarket_product_categories_widget-2">
                        <ul class="product-categories ">
                            <li class="product_cat">
                                <span>Browse Categories</span>
                                <ul>
                                    <li class="cat-item">
                                        <a href="product-category.html">
                                            <span class="no-child"></span>some test product</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html">
                                            <span class="no-child"></span>Home Theater &amp; Audio</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html">
                                            <span class="no-child"></span>Smartwatches</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                        <div class="widget widget_techmarket_products_carousel_widget">

                            <!-- .section-products-carousel -->
                        </div>
                    </div>

                </div>
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
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });

    // $("#referral_link").hide();

    $(".toggle_link").click(function () {
        $("#referral_link").toggle(500);
    });
</script>
</body>

</html>