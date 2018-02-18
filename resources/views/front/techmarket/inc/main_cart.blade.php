
    <table class="shop_table shop_table_responsive cart">
        <thead>
        <tr>
            <th class="product-remove">&nbsp;</th>
            <th class="product-thumbnail">&nbsp;</th>
            <th class="product-name">Product</th>
            <th class="product-price">Price</th>
            <th class="product-quantity">Quantity</th>
            <th class="product-subtotal">Sub Total</th>
        </tr>
        </thead>
        <tbody>
        @if(\App\Front\Plugins\Cart::getInstance()->getTotalQty() > 0)
            @foreach(\App\Front\Plugins\Cart::getInstance()->all() as $c)
                <input type="hidden" name="items[]" value="{{$c->item->id}}">
                <tr>
                    <td class="product-remove">
                        <a class="remove" href="#">×</a>
                    </td>
                    <td class="product-thumbnail">
                        <a href="single-product-fullwidth.html">
                            <img width="180" height="180" alt="" class="wp-post-image" src="single-product-fullwidth.html">
                        </a>
                    </td>
                    <td data-title="Product" class="product-name">
                        <div class="media cart-item-product-detail">
                            <a href="single-product-fullwidth.html">
                                <img width="180" height="180" alt="" class="wp-post-image" src="{{asset('assets/images/products/cart-1.jpg')}}">
                            </a>
                            <div class="media-body align-self-center">
                                <a href="single-product-fullwidth.html">{{$c->item->name}}</a>
                            </div>
                        </div>
                    </td>
                    <td data-title="Price" class="product-price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">¢ </span>{{$c->item->price}}
                                                                    </span>
                    </td>
                    <td class="product-quantity" data-title="Quantity">
                        <div class="quantity">
                            <label for="quantity-input-1">Quantity</label>
                            <input id="quantity-input-1" min="1" type="number" name="qtys[]" value="{{$c->qty}}" title="Qty" class="input-text qty text" size="4">
                        </div>
                    </td>
                    <td data-title="Total" class="product-subtotal">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">¢ </span> {{$c->price}}
                                                                    </span>
                        <a title="Remove this item" class="remove remove_cart" data="{{$c->item->id}}" href="#" >×</a>
                    </td>
                </tr>
            @endforeach
        @endif

        <tr>
            <td class="actions" colspan="6">
                {{--<div class="coupon">--}}
                {{--<label for="coupon_code">Coupon:</label>--}}
                {{--<input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code">--}}
                {{--<input type="submit" value="Apply coupon" name="apply_coupon" class="button">--}}
                {{--</div>--}}
                <img id="loader" src="{{asset('assets/images/load.gif')}}" class="pull-right none" width="30" height="30" style="margin-left: 1em;">
                <input type="submit" value="Update cart" name="update_cart" class="button">

            </td>
        </tr>
        </tbody>
    </table>
    <!-- .shop_table shop_table_responsive -->
