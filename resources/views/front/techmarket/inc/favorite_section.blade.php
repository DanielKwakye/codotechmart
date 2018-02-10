@if(\App\Front\Plugins\WishList::getInstance()->totalQty > 0)
<table class="shop_table cart wishlist_table">
    <thead>
    <tr>
        <th class="product-remove"></th>
        <th class="product-thumbnail"></th>
        <th class="product-name">
            <span class="nobr">Product Name</span>
        </th>
        <th class="product-price">
                                                            <span class="nobr">
                                                                Unit Price
                                                            </span>
        </th>
        <th class="product-stock-status">
                                                            <span class="nobr">
                                                                Stock Status
                                                            </span>
        </th>
        <th class="product-add-to-cart"></th>
    </tr>
    </thead>
    <tbody>

    @foreach(\App\Front\Plugins\WishList::getInstance()->all() as $p)
    <tr>
        <td class="product-remove">
            <div>
                <a title="Remove this product" class="remove remove_wishlist" href="{{url('remove/favorite/'.$p['item']->id)}}">×</a>
            </div>
        </td>
        <td class="product-thumbnail">
            <a href="single-product-fullwidth.html">
                <img width="180" height="180" alt="" class="wp-post-image" src="{{asset('assets/images/products/cart-1.jpg')}}">
            </a>
        </td>
        <td class="product-name">
            <a href="single-product-fullwidth.html">{{$p['item']->name}}</a>
        </td>
        <td class="product-price">
            <ins>
                    <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">¢ </span>{{$p['item']->price}}</span>
            </ins>
            <del>
                    <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol"></span> {{$p['item']->old_price}}</span>
            </del>
        </td>
        <td class="product-stock-status">
            <span class="wishlist-in-stock">In Stock</span>
        </td>
        <td class="product-add-to-cart">
            <a class="button add_to_cart_button button alt" href="#"> Add to Cart</a>
        </td>
    </tr>
        @endforeach

    </tbody>
    <tfoot>
    <tr>
        <td colspan="6">
            <div class="yith-wcwl-share" style="text-align: center">
                <img id="loader" src="{{asset('assets/images/load.gif')}}" class="none" width="30" height="30" style="margin: auto;">
                <a class="button save_my_wishlist button alt" style="margin: auto;" href="{{url('attempt/save/wishlist')}}"> Save your wishlist</a>
            </div>
        </td>
    </tr>
    </tfoot>
</table>
@else
    Your Wish List Is Empty

@endif