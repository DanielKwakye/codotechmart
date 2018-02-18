
    <div class="cart_totals">
        <h2>Cart totals</h2>
        <table class="shop_table shop_table_responsive">
            <tbody>
            <tr class="cart-subtotal">
                <th>Subtotal</th>
                <td data-title="Subtotal">
                    <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">¢ </span>{{\App\Front\Plugins\Cart::getInstance()->getTotalPrice()}}</span>
                </td>
            </tr>
            <tr class="order-total">
                <th>Shipping</th>
                <td data-title="Shipping">
                    <strong>
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">¢ </span>0.00</span>
                    </strong>
                </td>
            </tr>
            <tr class="order-total">
                <th>Total</th>
                <td data-title="Total">
                    <strong>
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">¢ </span>{{\App\Front\Plugins\Cart::getInstance()->getTotalPrice()}}</span>
                    </strong>
                </td>
            </tr>
            </tbody>
        </table>
        <!-- .shop_table shop_table_responsive -->
        <div class="wc-proceed-to-checkout">
            <!-- .wc-proceed-to-checkout -->
            <a class="checkout-button button alt wc-forward" href="{{url('checkout')}}">
                Proceed to checkout</a>
            <a class="back-to-shopping" href="{{url('/')}}">Back to Shopping</a>
        </div>
        <!-- .wc-proceed-to-checkout -->
    </div>
    <!-- .cart_totals -->
