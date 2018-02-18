<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<!-- Mirrored from transvelo.github.io/techmarket-html/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 09:57:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cart</title>
    @include('front.techmarket.inc.head_assets')
</head>
<body class="page home page-template-default">
<div id="page" class="hfeed site">
    @include('front.techmarket.inc.top_bar')
    <!-- .top-bar-v1 -->
    @include('front.techmarket.inc.header')
    <!-- .header-v1 -->
    <!-- ============================================================= Header End ============================================================= -->
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="home-v1.html">Home</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>

                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="cart-wrapper">
                                        <form method="post" class="woocommerce-cart-form main_cart">
                                            {{csrf_field()}}
                                            @include('front.techmarket.inc.main_cart')
                                        </form>
                                        <!-- .woocommerce-cart-form -->
                                        <div class="cart-collaterals">
                                        @include('front.techmarket.inc.cart_summary')
                                        </div>

                                        <!-- .cart-collaterals -->
                                    </div>
                                    <!-- .cart-wrapper -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .entry-content -->
                        </div>
                        <!-- .hentry -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>

    <!-- .col-full -->
@include('front.techmarket.inc.footer')
    <!-- .site-footer -->
</div>
<!-- For demo purposes – can be removed on production -->
@include('front.techmarket.inc.config')
@include('front.techmarket.inc.foot_assets')
</body>

</html>