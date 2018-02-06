$(document).on('click', '.trigger', function (event) {
    event.preventDefault();
    var data = JSON.parse($(this).attr('data'));
    $('.modal-title').html("Add " + data.name+ " to your cart")
    $('#product_id').val(data.id);
    $('#product_price').val(data.price);
    $('#shop_id').val(data.shop_id);
    $('.modal').iziModal('open');
});

$('.add_to_compare').click(function(e){
    e.preventDefault();
     var data = $(this).attr('data');
     $('#ajax_loader_'+data).show();
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
    url = url + "add/cart";

    $('#add-to-cart').addClass('none');
    $('#loader').removeClass('none');

    var data = {
        product: product_id,
        qty : qty,
        price : price,
        shop_id : shop_id
    };

    $.get(url,data,function(result){

        result = JSON.parse(result);

        $('.sub_total_price').html(result.total_price+"");

//        check if the person wants delivery------
        if(sessionStorage.getItem("deliveryOption") !== null && sessionStorage.getItem("deliveryOption") === "yes"){
            var total_price = JSON.parse(sessionStorage.getItem("price")) + result.total_price;
            $('.total_price').html( total_price+"");
        }else{
            $('.total_price').html(result.total_price+"");
        }

        $('#add-to-cart').removeClass('none');

        $('.modal').modal('hide');

        $('#loader').addClass('none');

//        this method is called if adding to cart is successfull
        if(result.status === "success"){
//
            $("#hang_cart").load("")

            iziToast.success({
                id: 'success',
                title: 'Success',
                message: result.message,
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

    });


});