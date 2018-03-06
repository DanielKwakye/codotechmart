<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<!-- Mirrored from transvelo.github.io/techmarket-html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 09:57:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Checkout</title>
    @include('front.techmarket.inc.head_assets')
</head>
<body class="woocommerce-active page-template-default woocommerce-checkout woocommerce-page can-uppercase">
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
                    Checkout
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div class="content-area" id="primary">
                    <main class="site-main" id="main">
                        <div class="type-page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">

                                    <div class="collapse" id="login-form">
                                        <form method="post" class="woocomerce-form woocommerce-form-login login">
                                            <p class="before-login-text">
                                                Vestibulum lacus magna, faucibus vitae dui eget, aliquam fringilla. In et commodo elit. Class aptent taciti sociosqu ad litora.
                                            </p>
                                            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                            <p class="form-row form-row-first">
                                                <label for="username">Username or email
                                                    <span class="required">*</span>
                                                </label>
                                                <input type="text" id="username" name="username" class="input-text">
                                            </p>
                                            <p class="form-row form-row-last">
                                                <label for="password">Password
                                                    <span class="required">*</span>
                                                </label>
                                                <input type="password" id="password" name="password" class="input-text">
                                            </p>
                                            <div class="clear"></div>
                                            <p class="form-row">
                                                <input type="submit" value="Login" name="login" class="button">
                                                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                                    <input type="checkbox" value="forever" id="rememberme" name="rememberme" class="woocommerce-form__input woocommerce-form__input-checkbox">
                                                    <span>Remember me</span>
                                                </label>
                                            </p>
                                            <p class="lost_password">
                                                <a href="#">Lost your password?</a>
                                            </p>
                                            <div class="clear"></div>
                                        </form>
                                    </div>
                                    <!-- .collapse -->
                                    <div class="collapse" id="checkoutCouponForm">
                                        <form method="post" class="checkout_coupon">
                                            <p class="form-row form-row-first">
                                                <input type="text" value="" id="coupon_code" placeholder="Coupon code" class="input-text" name="coupon_code">
                                            </p>
                                            <p class="form-row form-row-last">
                                                <input type="submit" value="Apply coupon" name="apply_coupon" class="button">
                                            </p>
                                            <div class="clear"></div>
                                        </form>
                                    </div>
                                    <!-- .collapse -->
                                    <form action="{{url('checkout')}}" class="checkout woocommerce-checkout place_order_form" method="post">
                                        {{csrf_field()}}
                                        <div id="customer_details" class="col2-set">
                                            <div class="col-1">
                                                <div class="woocommerce-billing-fields">
                                                    <h3>Billing Details</h3>
                                                    <div class="woocommerce-billing-fields__field-wrapper-outer">
                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                                <label class="" for="billing_first_name">Name
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" placeholder="" id="billing_first_name" name="billing_first_name" class="input-text ">
                                                            </p>
                                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                                <label class="" for="billing_last_name">Phone Number
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" value="" placeholder="Contact Number" id="billing_last_name" name="phone_number" class="input-text ">
                                                            </p>


                                                            <div class="clear"></div>
                                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                                <label class="" for="billing_address_1">Address
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" value="" placeholder="Street address" id="billing_address_1" name="full_address" class="input-text ">
                                                            </p>

                                                            <p id="order_comments_field" class="form-row notes">
                                                                <label class="" for="order_comments">Order notes</label>
                                                                <textarea cols="5" rows="2" placeholder="Notes about your order, e.g. special notes for delivery." id="order_comments" class="input-text " name="notes"></textarea>
                                                            </p>

                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce-billing-fields__field-wrapper-outer -->
                                                </div>
                                                <!-- .woocommerce-billing-fields -->


                                            </div>
                                            <!-- .col-1 -->

                                            <!-- .col-2 -->
                                        </div>
                                        <!-- .col2-set -->
                                        <h3 id="order_review_heading">Your order</h3>
                                        <div class="woocommerce-checkout-review-order" id="order_review">
                                            <div class="order-review-wrapper">
                                                <h3 class="order_review_heading">Your Order</h3>
                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                    <thead>
                                                    <tr>
                                                        <th class="product-name">Product</th>
                                                        <th class="product-total">Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @if(\App\Front\Plugins\Cart::getInstance()->getTotalQty() > 0)
                                                        @foreach(\App\Front\Plugins\Cart::getInstance()->all() as $item)
                                                        <tr class="cart_item">
                                                            <td class="product-name">
                                                                <strong class="product-quantity">{{$item->qty}} ×</strong> {{$item->item->name}}&nbsp;
                                                            </td>
                                                            <td class="product-total">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">¢</span>{{$item->price}}</span>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    @endif

                                                    </tbody>
                                                    <tfoot>
                                                    <tr class="cart-subtotal">
                                                        <th>Subtotal</th>
                                                        <td>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">¢</span>{{\App\Front\Plugins\Cart::getInstance()->getTotalPrice()}}</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td>
                                                            <strong>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">¢</span>{{\App\Front\Plugins\Cart::getInstance()->getTotalPrice()}}</span>
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                                <!-- /.woocommerce-checkout-review-order-table -->
                                                <div class="woocommerce-checkout-payment" id="payment">

                                                    <div class="form-row place-order">
                                                        <p class="form-row terms wc-terms-and-conditions woocommerce-validated">
                                                            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                                <input type="checkbox" id="terms" name="terms" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox">
                                                                <span>I’ve read and accept the <a class="woocommerce-terms-and-conditions-link" href="terms-and-conditions.html">terms &amp; conditions</a></span>
                                                                <span class="required">*</span>
                                                            </label>
                                                            <input type="hidden" value="1" name="terms-field">
                                                        </p>
                                                        <button type="submit" class="button wc-forward text-center">Place order</button>
                                                    </div>
                                                </div>
                                                <!-- /.woocommerce-checkout-payment -->
                                            </div>
                                            <!-- /.order-review-wrapper -->
                                        </div>
                                        <!-- .woocommerce-checkout-review-order -->
                                    </form>
                                    <!-- .woocommerce-checkout -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .entry-content -->
                        </div>
                        <!-- #post-## -->
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
<script>
   $(".place_order_form").submit(function (e) {

       if(!$("#terms").is(":checked")){
           toast("Agree to the terms and conditions to continue");
           e.preventDefault();
       }

   });
</script>
</body>


</html>