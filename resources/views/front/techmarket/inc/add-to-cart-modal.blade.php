<!-- Modal -->
<div id="iziModal" class="modal" data-iziModal-group="grupo1">
    <form id="cart-form" method="post" action="{{url('/')}}">

        <div class="modal-header">
            <button type="button" class="close" data-iziModal-close>&times;</button>
            <h4 class="modal-title" style="color:#3fa962;"></h4>
        </div>
        <div class="modal-body">
            <input type="number" id="qty" placeholder="How many ?" value="1" name="qty" class="form-control form-control-plain" required=""/>
            <input type="hidden" id="product_id"/>
            <input type="hidden" id="product_price">
            <input type="hidden" id="branch_id"/>
            <input type="hidden" id="shop_id"/>
        </div>
        <div class="modal-footer">
            <button type="button" class="button" data-iziModal-close>Close</button>
            <button type="submit" id="add-to-cart" class="button danger" >Add</button>
            <img id="loader" src="{{asset('assets/images/load.gif')}}" class="none" width="30" height="30">
        </div>

    </form>
</div>