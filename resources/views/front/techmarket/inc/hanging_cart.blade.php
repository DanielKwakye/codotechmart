<ul id="site-header-cart" class="site-header-cart menu">
    <li class="animate-dropdown dropdown ">
        <a class="cart-contents" href="cart.html" data-toggle="dropdown" title="View your shopping cart">
            <i class="tm tm-shopping-bag"></i>
            <span class="count">{{\App\Front\Plugins\Cart::getInstance()->getTotalQty()}}</span>
            <span class="amount">
             <span class="price-label">Your Cart</span>¢ {{\App\Front\Plugins\Cart::getInstance()->getTotalPrice()}}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-mini-cart">
            <li>
                <div class="widget woocommerce widget_shopping_cart">
                    <div class="widget_shopping_cart_content">
                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                            @foreach(\App\Front\Plugins\Cart::getInstance()->all() as $c)
                            <li class="woocommerce-mini-cart-item mini_cart_item">
                                <a href="#" class="remove remove_cart" data="{{$c->item->id}}" aria-label="Remove this item" data-product_id="65" data-product_sku="">×</a>
                                <a href="{{url('product/'.$c->item->id.'/detail')}}">
                                    <img src="{{asset('assets/images/products/mini-cart1.jpg')}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
                                    {{$c->item->name}}&nbsp;
                                </a>
                                <span class="quantity">{{$c->qty}} ×
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">¢ </span>{{$c->item->price}}</span>
                                    </span>
                            </li>
                                @endforeach

                        </ul>
                        <!-- .cart_list -->
                        <p class="woocommerce-mini-cart__total total">
                            <strong>Subtotal:</strong>
                            <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">¢ </span>{{\App\Front\Plugins\Cart::getInstance()->getTotalPrice()}}</span>
                        </p>
                        <p class="woocommerce-mini-cart__buttons buttons">
                            <a href="{{url('cart')}}" class="button wc-forward">View cart</a>
                            <a href="{{url('checkout')}}" class="button checkout wc-forward">Checkout</a>
                        </p>
                    </div>
                    <!-- .widget_shopping_cart_content -->
                </div>
                <!-- .widget_shopping_cart -->
            </li>
        </ul>
        <!-- .dropdown-menu-mini-cart -->
    </li>
</ul>