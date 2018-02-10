<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<!-- Mirrored from transvelo.github.io/techmarket-html/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 09:57:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Techmarket HTML</title>
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
                                        @include('front.techmarket.inc.cart_summary')
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
    <!-- #content -->
    <div class="col-full">
        <section class="brands-carousel">
            <h2 class="sr-only">Brands Carousel</h2>
            <div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands" data-slick="{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:400,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                <div class="brands">
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>apple</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="apple" src="assets/images/brands/1.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>bosch</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="bosch" src="assets/images/brands/2.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>cannon</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="cannon" src="assets/images/brands/3.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>connect</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="connect" src="assets/images/brands/4.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>galaxy</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="galaxy" src="assets/images/brands/5.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>gopro</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="gopro" src="assets/images/brands/6.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>handspot</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="handspot" src="assets/images/brands/7.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>kinova</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="kinova" src="assets/images/brands/8.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>nespresso</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="nespresso" src="assets/images/brands/9.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>samsung</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="samsung" src="assets/images/brands/10.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>speedway</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="speedway" src="assets/images/brands/11.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>yoko</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="yoko" src="assets/images/brands/12.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                </div>
            </div>
            <!-- .col-full -->
        </section>
        <!-- .brands-carousel -->
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