
$(document).ready(function(){
    $('.add-to-card').click(function(){
        var id=$(this).data('id_product');
        var cart_product_id = $('.cart_product_id_' + id).val();
        var cart_product_name = $('.cart_product_name_' + id).val();
        var cart_product_image = $('.cart_product_image_' + id).val();
        var cart_product_price = $('.cart_product_price_' + id).val();
        var cart_product_qty = $('.cart_product_qty_' + id).val();
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url:'{{url("/add-cart-ajax")}}',
            method: 'POST',
            data:{cart_product_id:cart_product_id, _token:_token,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty},
            success:function(data){
                swal({
                    title: "Sản phẩm đã được thêm vào giỏ hàng",
                    text: "Bạn có thể tiếp tục mua hàng hoặc đi đến giỏ hàng",
                    icon: "success",
                    buttons:["Xem tiếp", "Đi đến giỏ hàng"] ,
                    dangerMode: false,
                })
                .then((willDelete) => {
                if (willDelete) {
                    window.location.href = "{{url('/show-cart')}}";
                } 
                });     
            },
            error: (error) => {
                console.log(JSON.stringify(error));
            }
        })

    })
})


$(document).ready(function(){
    $('.changeQty').click(function(e){
        e.preventDefault();
        var thisClick = $(this);
        var quantity = $(this).closest(".cartpage").find(".qtyinput").val();
        var product_id = $(this).closest(".cartpage").find(".product_id").val();
        if(quantity==0){
            $.ajax({
            url:'{{url("/delete-cart")}}',
            type:'DELETE',
            method: 'get',
            data:{product_id:product_id, _token: '{{csrf_token()}}' },
            success:function(response){
                thisClick.closest(".cartpage").remove();
                $('#totalCall').load(location.href + ' .totalLoad');
                // console.log("done");
            },
            error: (error) => {
                console.log(JSON.stringify(error));
            }
        })
        }else{
        $.ajax({
            url:'{{url("/update-cart")}}',
            method: 'post',
            data:{product_id:product_id,quantity:quantity, _token: '{{csrf_token()}}' },
            success:function(response){
                // window.location.reload();   
                thisClick.closest(".cartpage").find('.subtotal').text(response.subtotal);
                $('#totalCall').load(location.href + ' .totalLoad');
                console.log("done");
            },
            error: (error) => {
                console.log(JSON.stringify(error));
            }
        })
        }
    })
})


$(document).ready(function(){
    $('.deleteItem').click(function(e){
        e.preventDefault();
        var thisDelete = $(this);
        var product_id = $(this).closest(".cartpage").find(".product_id").val();
        $.ajax({
            url:'{{url("/delete-cart")}}',
            type:'DELETE',
            method: 'get',
            data:{product_id:product_id, _token: '{{csrf_token()}}' },
            success:function(response){
                thisDelete.closest(".cartpage").remove();
                $('#totalCall').load(location.href + ' .totalLoad');
                // console.log("done");
            },
            error: (error) => {
                console.log(JSON.stringify(error));
            }
        })
    })
})
