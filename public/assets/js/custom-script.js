function toast(message) {

    iziToast.success({
        id: 'success',
        title: 'Success',
        message: message,
        position: 'topLeft',
        transitionIn: 'bounceInLeft',
        // iconText: 'star',
        onOpened: function(instance, toast){
            // console.info(instance)
        },
        onClosed: function(instance, toast, closedBy){
        }
    });

}

$(document).on('click', '.trigger', function (event) {
    event.preventDefault();
    var data = JSON.parse($(this).attr('data'));
    $('.modal-title').html("Add " + data.name+ " to your cart")
    $('#product_id').val(data.id);
    $('#product_price').val(data.price);
    $('#shop_id').val(data.shop_id);
    $('.modal').iziModal('open');
});

$(document).on('click','.remove_cart', function (e) {
    e.preventDefault();
    var id = $(this).attr('data');
    var url = base_url + "/remove/cart/" + id;
    $.get(url,null,function (result) {
        result = JSON.parse(result);
        if(result.status){
            $("#hang_cart").load(base_url + "/hang/cart");
            toast(result.message);
        }
    });
});


$('.add_to_compare').click(function(e){
    e.preventDefault();
     var data = $(this).attr('data');
     $('#ajax_loader_'+data).show();    
});

$('#add-to-cart').click(function(event){
    event.preventDefault();
    var qty = $('#qty').val();

//    validations ---------------------
    if(!$.isNumeric(qty) && !(Math.floor(qty) === qty)){

        iziToast.error({
            id: 'error',
            title: 'Error',
            message: 'Please enter the correct quantity',
            position: 'topRight',
            transitionIn: 'fadeInDown'
        });
        return;
    }

//    check if qty is less than zero

    if(qty < 1){
        iziToast.error({
            id: 'error',
            title: 'Error',
            message: 'quantity cannot be less than 1',
            position: 'topRight',
            transitionIn: 'fadeInDown'
        });

        return;
    }
    qty = Math.floor(qty);

    var url = $('#cart-form').attr('action');
    var product_id = $('#product_id').val();
    var price = $('#product_price').val();
    var shop_id = $('#shop_id').val();

    // var request = $('#cart-form').serialize();
    url = url + "/add/cart";

    $('#add-to-cart').addClass('none');
    $('#loader').removeClass('none');

    var data = {
        product_id: product_id,
        qty : qty,
        price : price,
        shop_id : shop_id
    };

    $.get(url,data,function(result){

        //console.log(result);

        result = JSON.parse(result);

        // console.log(result);

        $('.sub_total_price').html(result.total_price+"");

//        check if the person wants delivery------


        $('#add-to-cart').removeClass('none');


        $('#loader').addClass('none');

        $('.modal').iziModal('close');

//        this method is called if adding to cart is successfull
        if(result.status === "success"){
        // console.log('hand url is ' + url  + "/hang/cart");
            $("#hang_cart").load(base_url + "/hang/cart");

            toast(result.message);
        }

    });

});
