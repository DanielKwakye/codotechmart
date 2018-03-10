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
                    <a href="{{url('/')}}">Home</a>
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


                                    <form action="{{url('checkout')}}" class="checkout woocommerce-checkout place_order_form" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" id="longitude" name="longitude">
                                        <input type="hidden" id="latitude" name="latitude">
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
                                                                <label class="" for="phone">Phone Number
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" id="phone" placeholder="Contact Number" required name="phone_number" class="input-text ">
                                                            </p>

                                                            <p id="billing_state_field" class="form-row form-row-wide validate-required validate-email">
                                                                <label class="" for="billing_state">Location
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <select data-placeholder="" class="state_select select2-hidden-accessible" id="select_location" required name="location" tabindex="-1" aria-hidden="true">
                                                                    <option value="0"> Enter A location </option>
                                                                    <option value="1">Use my current location</option>
                                                                </select>
                                                            </p>

                                                            <div class="clear"></div>
                                                            <p id="full_address" class="form-row form-row-wide address-field validate-required">
                                                                <label class="" for="search_location">Address
                                                                    <abbr title="required" class="required">*</abbr> &nbsp;&nbsp;&nbsp;
                                                                    <span id="loader" class="none"><img src="{{asset('assets/images/load.gif')}}" width="30" height="30"> Fetching Address ...</span>
                                                                </label>
                                                                <input type="text" value="" placeholder="Street address" id="search_location" name="full_address" class="input-text " required>
                                                            </p>

                                                            <p id="billing_state_field" class="form-row form-row-wide validate-required validate-email">
                                                                <label class="" for="billing_state">Delivery Option
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <select data-placeholder="" autocomplete="address-level1" class="state_select select2-hidden-accessible" id="billing_state" required name="delivery_option" tabindex="-1" aria-hidden="true">
                                                                    <option value="">Select an option…</option>
                                                                    <option value="1">Deliver To Me</option>
                                                                    <option value="0"> I'll Pick It Up </option>
                                                                </select>
                                                            </p>

                                                            <p id="billing_state_field" class="form-row form-row-wide validate-required validate-email">
                                                                <label class="" for="billing_state">Payment Option
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <select data-placeholder="" autocomplete="address-level1" class="state_select select2-hidden-accessible" id="billing_state" required name="payment_option" tabindex="-1" aria-hidden="true">
                                                                    <option value="">Select an option…</option>
                                                                    <option value="1">Pay Online</option>
                                                                    <option value="0"> Cash On Pick Up </option>
                                                                </select>
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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAolhXr2vsz2x8-fNYJjVghMI-p9XDzNwo&libraries=places"></script>
<script>
   $(".place_order_form").submit(function (e) {

       if(!$("#terms").is(":checked")){
           toast("Agree to the terms and conditions to continue");
           e.preventDefault();
       }

   });
   $("#select_location").change(function () {
      var val = $(this).val();
       console.log(val);
       if(val == 1){
           // location 1 is use my current location --------------------
           getLocation();
       }
       if(val == 0){
           // enter a location ----------------------
           console.log("search location");
           $("#loader").addClass("none");
           $("#search_location").val("");
       }
   });

   function getLocation() {
       if (navigator.geolocation) {
           $("#loader").removeClass("none");
           navigator.geolocation.getCurrentPosition(showPosition,positionNotFound);
       } else {
          alert("Geolocation is not supported by this browser.");
       }
   }
   
   function positionNotFound(error) {
       toast(error.message);
       $("#loader").addClass("none");
   }

   function showPosition(position) {
       $("#latitude").val(position.coords.latitude);
       $("#longitude").val(position.coords.longitude);
       var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng="+position.coords.latitude+","+position.coords.longitude+"&sensor=true&key=AIzaSyAolhXr2vsz2x8-fNYJjVghMI-p9XDzNwo";
       $.get(url, function (result) {
           console.log(result);
           // JSON.parse(result)
           // console.log(result.results[0]);
           $("#loader").addClass("none");
           $("#search_location").val(result.results[0].formatted_address);
       });
   }


   var input = document.getElementById('search_location');
   var options = {
       componentRestrictions: {country: 'gh'}
   };

   autocomplete = new google.maps.places.Autocomplete(input, options);

   google.maps.event.addListener(autocomplete, 'place_changed', function () {
       var place = autocomplete.getPlace();

       var destinationLat = place.geometry.location.lat();
       var destinationLng = place.geometry.location.lng();
       var address = place.address_components[0].long_name;

       $("#latitude").val(destinationLat);
       $("#longitude").val(destinationLng);
       $

   });

</script>
</body>


</html>