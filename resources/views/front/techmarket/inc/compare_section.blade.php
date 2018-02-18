@if(\App\Front\Plugins\Compare::getInstance()->totalQty > 0)

    <tr>
        <th>Product</th>
        @foreach(\App\Front\Plugins\Compare::getInstance()->all() as $p)
            <td>
                <a class="product" href="single-product-fullwidth.html">
                    <div class="product-image">
                        <div class="image">
                            <img width="300" height="300" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{asset('assets/images/products/1-2.jpg')}}">
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">{{$p['item']->name}}</h3>

                        <div class="star-rating">
                                                                        <span style="width:100%">Rated
                                                                            <strong class="rating">5.00</strong> out of 5</span>
                        </div>
                    </div>
                </a>
                <!-- /.product -->
            </td>
        @endforeach
    </tr>

    <tr>
        <th>Price</th>
        @foreach(\App\Front\Plugins\Compare::getInstance()->all() as $p)
            <td>
                <div class="product-price price">
                    <ins>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">¢ </span>{{$p['item']->price}}</span>
                    </ins>
                    <del>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">¢ </span>{{$p['item']->old_price}}</span>
                    </del>
                </div>
            </td>
        @endforeach
    </tr>

    <tr>
        <th>Description</th>
        @foreach(\App\Front\Plugins\Compare::getInstance()->all() as $p)
            <td>
                <p>
                    {{$p['item']->description}}
                </p>
            </td>
        @endforeach
    </tr>

    <tr>
        <th>Add to cart</th>
        @foreach(\App\Front\Plugins\Compare::getInstance()->all() as $p)
            <td>
                <a class="button trigger" data="{{$p['item']}}" href="#" >Add to cart</a>
            </td>
        @endforeach
    </tr>

    <tr>
        <th>Brand</th>
        @foreach(\App\Front\Plugins\Compare::getInstance()->all() as $p)
            <td>&nbsp;</td>
        @endforeach
    </tr>
    <tr>
        <th>Price</th>
        @foreach(\App\Front\Plugins\Compare::getInstance()->all() as $p)
            <td>
                <div class="product-price price">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">¢</span>{{$p['item']->price}}</span>
                </div>
            </td>
        @endforeach
    </tr>
    <tr>
        <th>&nbsp;</th>
        @foreach(\App\Front\Plugins\Compare::getInstance()->all() as $p)
            <td class="text-center">
                <a title="Remove" class="remove-icon remove_compare" data="{{$p['item']->id}}" href="{{url('/remove/compare/'.$p['item']->id)}}">
                    <i class="fa fa-times"></i>
                </a>
            </td>
        @endforeach
    </tr>
    @else
    Your Compare List Is Empty
@endif