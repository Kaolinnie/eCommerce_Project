$.ajax({
    type:'GET',
    url:'/Page/getAllPages',
    data: {},
    success: function(data) {
        $(".brief_pages").append(data);
    }
});

function startOrderWithAddress() {
    alert("address is: "+$("#address_input").val());
}

$(document).ready(function(){
    $('.hamburger').click(function(){
        $("#menunav").toggleClass('open');
    });
    $('.checkout_link').click(function(){
        $("#cartSubview").toggleClass('open');
    });
    $("#closeSubviewImg").click(function() {
        $("#cartSubview").removeClass('open');
    })
    $("main").click(function(){
        $('#menunav').removeClass('open');
        $('#cartSubview').removeClass('open');
    });
});

function addItemToCart(product_id){
    $.ajax({
        url:'/Checkout/addToCart/'+product_id,
        type:'POST',
        data:{},
        success: function(data) {
            $("#productsAdded").append(data);
        }
    });
}

