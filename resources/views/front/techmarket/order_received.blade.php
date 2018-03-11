<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<!-- Mirrored from transvelo.github.io/techmarket-html/login-and-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 09:57:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Order Received</title>
    @include('front.techmarket.inc.head_assets')
    <style>
        .woocommerce-notice{
            padding: 1em 1.618em;
            margin-bottom: 2.617924em;
            background-color: #0f834d;
            margin-left: 0;
            border-radius: 2px;
            color: #fff;
            clear: both;
            border-left: 0.6180469716em solid rgba(0, 0, 0, 0.15);
        }
    </style>
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
                    <a href="{{url('/')}}">Home</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
                    <a href="{{url('checkout')}}">Checkout</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>Order received
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="woocommerce-order">
                                        <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">Thank you. Your order has been received.</p>
                                        <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">
                                            <li class="woocommerce-order-overview__order order">
                                                Order number:
                                                <strong>{{$order->order_number}}</strong>
                                            </li>
                                            <li class="woocommerce-order-overview__date date">
                                                Date:
                                                <strong>{{\Carbon\Carbon::parse($order->created_at)->toDayDateTimeString()}}</strong>
                                            </li>
                                            <li class="woocommerce-order-overview__total total">
                                                Total:
                                                <strong>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">¢</span>{{$order->amount}}</span>
                                                </strong>
                                            </li>
                                            
                                        </ul>
                                        <!-- .woocommerce-order-overview -->
                                        <section class="woocommerce-order-details">
                                            <h2 class="woocommerce-order-details__title">Order details</h2>
                                            <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">
                                                <thead>
                                                <tr>
                                                    <th class="woocommerce-table__product-name product-name">Product</th>
                                                    <th class="woocommerce-table__product-table product-total">Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($order->carts as $c)
                                                <tr class="woocommerce-table__line-item order_item">
                                                    <td class="woocommerce-table__product-name product-name">
                                                        <a href="single-product-fullwidth.html">
                                                            {{$c->product->name}}
                                                        </a>
                                                        <strong class="product-quantity">× {{$c->qty}}</strong>
                                                    </td>
                                                    <td class="woocommerce-table__product-total product-total">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">¢</span>{{$c->price}}</span>
                                                    </td>
                                                </tr>
                                                @endforeach

                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th scope="row">Subtotal:</th>
                                                    <td>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">¢</span>
                                                                            {{$c->order->amount}}
                                                                    </span>
                                                    </td>
                                                </tr>
                                                {{-- <tr>
                                                    <th scope="row">Shipping:</th>
                                                    <td>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>100.00</span>&nbsp;
                                                        <small class="shipped_via">via Normal Delivery</small>
                                                    </td>
                                                </tr> --}}
                                                {{-- <tr>
                                                    <th scope="row">Payment method:</th>
                                                    <td>Direct bank transfer</td>
                                                </tr> --}}
                                                <tr>
                                                    <th scope="row">Total:</th>
                                                    <td>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">¢</span>
                                                                    {{$c->order->amount}}</span>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                            <!-- .woocommerce-table -->
                                        </section>
                                        <!-- .woocommerce-order-details -->
                                    </div>
                                    <!-- .woocommerce-order -->
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
@include('front.techmarket.inc.footer')
<!-- .site-footer -->
</div>
<!-- For demo purposes – can be removed on production -->
@include('front.techmarket.inc.config')
<!-- For demo purposes – can be removed on production : End -->
@include('front.techmarket.inc.foot_assets')
<!-- For demo purposes – can be removed on production : End -->
</body>

</html>